<?php

namespace my\webext;

use Yii;

class MyApp extends Base
{
    public $id;

    public static function say()
    {
        echo __CLASS__ . __METHOD__;
        die;
    }

    public function hello()
    {
        echo 'hello!!!!!!!!!!!!!!';die;
    }
}
