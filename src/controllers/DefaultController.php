<?php

namespace my\webext\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        echo "default - index";
        die;
    }
}
