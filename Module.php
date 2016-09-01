<?php

/**
 * @link https://github.com/humanized/yii2-access-token
 * @copyright Copyright (c) 2016 Humanized BV Comm V
 * @license https://github.com/humanized/yii2-access-token/LICENSE
 */

namespace humanized\useraccesstoken;

/**
 * Yii2 User Access Token Module
 * 
 * Provides several strategies for token-based user registration/authentication
 * 
 * 
 * @name Yii2 User Access Token Module
 * @version 0.1
 * @author Jeffrey Geyssens <jeffrey@humanized.be>
 * @package yii2-user-access-token
 * 
 */
class Module extends \yii\base\Module
{

    public $typeConfig = [
        'enabled' => true,
        'typeEnum' => ['default', 'facebook', 'google', 'live']
    ];

    public function init()
    {
        if (\Yii::$app instanceof \yii\console\Application) {
            $this->controllerNamespace = 'humanized\useraccesstoken\commands';
        }
        parent::init();
    }

}
