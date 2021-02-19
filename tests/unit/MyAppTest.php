<?php

use PHPUnit\Framework\TestCase;
use my\webext\MyApp;

class MyAppTest extends TestCase
{
    public function testMain()
    {
        $obj = new MyApp();
        $obj->id = "asd123";

        $this->assertClassHasAttribute('id', MyApp::class);

        $this->assertTrue($obj instanceof \yii\base\Component);
    }
}
