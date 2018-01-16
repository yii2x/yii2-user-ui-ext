<?php

namespace yii2x\user\ui\ext;

use \yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    /** @param \yii\web\Application $app */
    public function bootstrap($app)
    {           
//        if(!empty($app->hasModule('auth'))){
//            
//            $module = $app->getModule('auth');
//            $module->set('ui-auth', [
//                'class' => 'yii2x\auth\ui\AuthExtUI'
//            ]);
//        }
    }
}
