<?php

namespace app\controllers;

use app\controllers\CommonController;
use Yii;
use app\models\Member;

class PublicController extends CommonController
{

    /**
     * 登录
     */
    public function actionLogin()
    {
        $model = new Member;
        $request = Yii::$app->request;
        if ($request->isPost)
        {
            $post = $request->post();
            if ($model->login($post))
            {
                $this->redirect(['member/center']);
                Yii::$app->end();
            }
        }
        return $this->render('login', ['model' => $model]);
    }

    public function actionLogout()
    {
        Yii::$app->session->remove('member');
        if (!isset(Yii::$app->session['member']['isLogin']))
        {
            $this->redirect(['index/index']);
            Yii::$app->end();
        }
        $this->goBack();
    }

    /**
     * 注册
     */
    public function actionSignup()
    {
        $model = new Member;
        $request = Yii::$app->request;
        if ($request->isPost)
        {
            $post = $request->post();
            if ($model->reg($post))
            {
                $this->redirect(['member/center']);
                Yii::$app->end();
            }
        }
        return $this->render('signup', ['model' => $model]);
    }

}
