<?php

namespace my\webext\controllers;

//use yii\rest\Controller;
use yii\web\Controller;

class WebController extends Controller
{
    public function actionIndex()
    {
        echo __CLASS__ . __METHOD__;
        die;
    }
}
