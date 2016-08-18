<?php

/**
 * @link https://github.com/humanized/yii2-access-token
 * @copyright Copyright (c) 2016 Humanized BV Comm V
 * @license https://github.com/humanized/yii2-access-token/LICENSE
 */

namespace humanized\accesstoken;

/**
 * Yii2 User Access Token Module
 * 
 * Provides several routines and interfaces dealing with a file-based maintenance mode.
 * 
 * Maintenance mode can be toggled through CLI or through GUI by incorporating the provided widget.
 * 
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

    public function init()
    {
        if (\Yii::$app instanceof \yii\console\Application) {
            $this->controllerNamespace = 'humanized\accesstoken\commands';
        }
        parent::init();
    }

}
