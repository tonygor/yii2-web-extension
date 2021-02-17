<?php

namespace my\webext\behaviors;

use yii\base\Behavior;

class MyBehavior extends Behavior
{
    public function hi()
    {
        echo __CLASS__ . __METHOD__;
        die;
    }
}
