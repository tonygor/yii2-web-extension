# migration
php yii migrate -p=./vendor/tonygor/yii2-web-extension/migrations/

# config/main.php
    'modules' => [
        'myext' => [
            'class' => \my\webext\Module::class,
        ]
    ],

    'bootstrap' => [
        'myext',
    ],
