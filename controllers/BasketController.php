<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\BasketItem;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\EntryForm;
use app\models\ContactForm;
use app\models\SignupForm;

class BasketController extends Controller
{
    public function actionAdd(){
        $model = new BasketItem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->article]);
        }

        return $this->render('add', [
            'model' => $model,
        ]);
    }
    
}