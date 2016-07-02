<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionTest1()
    {
        $a=5;
        $b=5;
        $sum=$a+$b;
        return $this->render('test1',['sum'=>$sum]);
    }
    public function actionTest2($fname=null,$lname=null)
    {
        $info="My name is $fname $lname";
        return $this->render('test2',['info'=>$info]);
    }
            
}
