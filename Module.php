<?php

namespace app\modules\yii2x\user\ui\ext;

/**
 * enterprise module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'yii2x\user\ui\ext\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}

    "repositories":[
        {
            "type": "git",
            "url": "https://github.com/yii2x/yii2-enterprise.git"
        },
        {
            "type": "git",
            "url": "https://github.com/yii2x/yii2-filesystem.git"
        },                
        {
            "type": "git",
            "url": "https://github.com/yii2x/yii2-user.git"
        },
        {
            "type": "git",
            "url": "https://github.com/yii2x/yii2-user-ui-ext.git"
        },
        {
            "type": "git",
            "url": "https://github.com/yii2x/yii2-user-ui-admin-lte.git"
        },
        {
            "type": "git",
            "url": "https://github.com/yii2x/yii2-rbac.git"
        },
        {
            "type": "git",
            "url": "https://github.com/yii2x/yii2-abac.git"
        },                
    ], 
                
                composer show yii2x/yii2-abac