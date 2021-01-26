<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Product;
use app\components\TestService;


class TestController extends Controller
{
    
    public function actionTest()
    {
        return \Yii::$app->test->run();
        
        //$service = new TestService(['var' => 123456]);
        //return $service->run();
        
        $model = new Product();
        $model->id = 1;
        $model->price = 111;
        $model->name = 'First';
        $model->category = 'auto';

        
        return $this->render('index', [
           'model' => $model,
           'var2' => 'ggg222'
        ]);
    }
   
}
