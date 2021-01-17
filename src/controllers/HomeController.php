<?php

namespace yenereminelibol\pharmacymodule\controllers;

class HomeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
