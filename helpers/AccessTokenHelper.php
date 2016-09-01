<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace humanized\useraccesstoken\helpers;

use Yii;
use humanized\useraccesstoken\models\UserAccessToken;

class AccessTokenHelper
{

    public static function findIdentityByAccessToken($token, $type = null)
    {
        $condition = ['token' => $token];
        if (isset($type)) {
            $condition['type'] = $type;
        }
        $model = UserAccessToken::find()->where($condition)->one();
        if (isset($model)) {
            $identityClass = Yii::$app->user->identityClass;
            return $identityClass::findOne(['id' => $model->id]);
        }
        return NULL;
    }

}
