<?php
/**
 * 更改管理员规则
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow   QQ: 1527200768  Time: 2016/12/14 15:06
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace backend\components;

use Yii;

class AdminUserRule extends \yii\rbac\Rule{
    public function execute($user, $item, $params)
    {
        if (Yii::$app->controller->action->id !== 'update' && Yii::$app->controller->action->id !== 'delete' || Yii::$app->user->id == $params['id']){
            return true;
        }
        return false;
    }
}