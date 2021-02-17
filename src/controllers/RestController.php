<?php

namespace my\webext\controllers;

use yii\rest\Controller;

class RestController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['my'] = \my\webext\behaviors\MyBehavior::class;

        return $behaviors;
    }

    public function actionIndex()
    {
        echo __CLASS__ . __METHOD__;
        die;
    }

    public function actionCreate()
    {
        $this->hi();

        echo "rest - create";
        die;
    }
}
