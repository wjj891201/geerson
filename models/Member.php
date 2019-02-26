<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Member extends ActiveRecord
{

    public $remember = true;
    public $orpass, $repass;

    public static function tableName()
    {
        return "{{%member}}";
    }

    public function attributeLabels()
    {
        return [
            'orpass' => '原始密码',
            'username' => '手机号码',
            'email' => '邮箱',
            'password' => '密码',
            'repass' => '确认密码'
        ];
    }

    public function rules()
    {
        return [
            ['orpass', 'required', 'message' => '原密码不能为空', 'on' => ['changepass']],
            ['orpass', 'validateOrpass', 'on' => ['changepass']],
            ['username', 'required', 'message' => '手机号码不能为空', 'on' => ['login', 'seekpass', 'memberadd', 'mailchangepass']],
            ['username', 'match', 'pattern' => '/^[1][358][0-9]{9}$/', 'message' => '手机号码格式错误', 'on' => ['login']],
            ['username', 'unique', 'message' => '手机号码已存在', 'on' => ['memberadd']],
            ['password', 'required', 'message' => '密码不能为空', 'on' => ['login', 'changepass', 'memberadd', 'mailchangepass']],
            ['remember', 'boolean', 'on' => 'login'],
            ['password', 'validatePass', 'on' => 'login'],
            ['email', 'required', 'message' => '邮箱不能为空', 'on' => ['seekpass', 'memberadd']],
            ['email', 'email', 'message' => '邮箱格式不正确', 'on' => ['seekpass', 'memberadd']],
            ['email', 'unique', 'message' => '邮箱已存在', 'on' => ['memberadd']],
            ['email', 'validateEmail', 'on' => 'seekpass'],
            ['repass', 'required', 'message' => '确认密码不能为空', 'on' => ['changepass', 'memberadd', 'mailchangepass']],
            ['repass', 'compare', 'compareAttribute' => 'password', 'message' => '两次密码输入不一致', 'on' => ['changepass', 'memberadd', 'mailchangepass']],
        ];
    }

    //验证原始密码是否正确
    public function validateOrpass()
    {
        if (!$this->hasErrors())
        {
            $data = self::find()->where('userid = :userid and password = :orpass', [":userid" => Yii::$app->session['member']['userid'], ":orpass" => md5($this->orpass)])->one();
            if (is_null($data))
            {
                $this->addError("orpass", "原密码不正确");
            }
        }
    }

    public function validatePass()
    {
        if (!$this->hasErrors())
        {
            $data = self::find()->where('username = :username and password = :password', [":username" => $this->username, ":password" => md5($this->password)])->one();
            if (is_null($data))
            {
                $this->addError("password", "手机号码或者密码错误");
            }
        }
    }

    public function validateEmail()
    {
        if (!$this->hasErrors())
        {
            $data = self::find()->where('username = :username and email = :email', [":username" => $this->username, ":email" => $this->email])->one();
            if (is_null($data))
            {
                $this->addError("email", "管理员邮箱不匹配");
            }
        }
    }

    public function login($data)
    {
        $this->scenario = "login";
        if ($this->load($data) && $this->validate())
        {
            //登陆
            $lifetime = $this->remember ? 24 * 3600 : 0;
            $session = Yii::$app->session;
            session_set_cookie_params($lifetime);

            $data = self::find()->where('username = :username', [":username" => $this->username])->one();
            $session['member'] = [
                'userid' => $data['userid'],
                'username' => $data['username'],
                'isLogin' => 1
            ];
            $this->updateAll(['lasttime' => time(), 'lastip' => ip2long(Yii::$app->request->userIP)], ['username' => $this->username]);
            return (bool) $session['member']['isLogin'];
        }
        return false;
    }

    public function seekPass($data)
    {
        $this->scenario = "seekpass";
        if ($this->load($data) && $this->validate())
        {
            //发送邮件
            $time = time();
            $token = $this->createToken($this->username, $time);
            $mailer = Yii::$app->mailer->compose('seekpass', ['username' => $this->username, 'time' => $time, 'token' => $token]);
            $mailer->setFrom("15195861092@163.com");
            $mailer->setTo($this->email);
            $mailer->setSubject("商城找回密码");
            if ($mailer->send())
            {
                return true;
            }
        }
        return false;
    }

    public function createToken($user, $time)
    {
        return md5(md5($user) . base64_encode(Yii::$app->request->userIP) . md5($time));
    }

    public function changePass($data)
    {
        $this->scenario = "changepass";
        if ($this->load($data) && $this->validate())
        {
            return (bool) $this->updateAll(['password' => md5($this->password)], ['userid' => Yii::$app->session['member']['userid']]);
        }
        return false;
    }

    //邮箱找回密码
    public function mailchangePass($data)
    {
        $this->scenario = "mailchangepass";
        if ($this->load($data) && $this->validate())
        {
            return (bool) $this->updateAll(['password' => md5($this->password)], ['username' => $this->username]);
        }
        return false;
    }

    public function reg($data)
    {
        $this->scenario = "memberadd";
        $this->addtime = time();
        if ($this->load($data) && $this->validate())
        {
            $this->password = md5($this->password);
            if ($this->save(false))
            {
                return true;
            }
        }
        return false;
    }

}
