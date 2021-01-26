<?php

namespace app\controllers;

use yii\web\Controller;


class TestController extends Controller
{
    
    public function actionTest()
    {
        return $this->render('index', [
           'var1' => '111111',
           'var2' => 'ggg222'
        ]);
    }
   
}
