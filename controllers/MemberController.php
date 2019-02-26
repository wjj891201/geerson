<?php

namespace app\controllers;

use app\controllers\CheckController;
use Yii;
use app\models\Member;
use yii\helpers\Url;
use app\models\FormValue;

class MemberController extends CheckController
{

    /**
     * 个人中心~~~~上传图片
     */
    public function actionCenter()
    {


        return $this->render('center');
    }

    /**
     * 个人中心~~~~图片列表
     */
    public function actionList()
    {
        $udraw = FormValue::find()->where(['fgid' => 6, 'userid' => Yii::$app->session['member']['userid']])->orderBy(['addtime' => SORT_DESC])->all();
        return $this->render('list', ['udraw' => $udraw]);
    }

    /**
     * 个人中心~~~~修改密码
     */
    public function actionPsw()
    {
        $model = new Member;
        if (Yii::$app->request->isPost)
        {
            $post = Yii::$app->request->post();
            if ($model->changePass($post))
            {
                return $this->redirect(['call/mess', 'mess' => '密码修改成功', 'url' => Url::to(['member/center'])]);
            }
        }
        return $this->render('psw', ['model' => $model]);
    }

}
