<?php

namespace my\webext;

use Yii;
use yii\base\BootstrapInterface;

class Module extends \yii\base\Module implements BootstrapInterface
{
    //必须覆盖这个属性
    public $controllerNamespace = 'my\webext\controllers';

    public function bootstrap($app)
    {
        $app->urlManager->addRules([
            /**
             * web路由配置
             */
            //这个是url只输入module，自动跳转到DefaultController的配置
            [
                'class' => 'yii\web\UrlRule',
                'route' => $this->id,
                'pattern' => $this->id,
                'suffix' => false
            ],
            // web路由的规则
            [
                'class' => 'yii\web\UrlRule',
                'route' => $this->id . '/<controller>/<action>',
                'pattern' => $this->id . '/<controller:[\w\-]+>/<action:[\w\-]+>',
                'suffix' => false
            ],

            /**
             * rest路由配置
             * 注意controller，必须加上$this->id这个属性
             */
            [
                'class' => 'yii\rest\Urlrule',
                'pluralize' => false,
                'controller' => [$this->id . '/rest', ],
            ],
        ], true);
    }
}
