<?php

namespace xj\notifyjs\themes;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class NotifyjsAsset extends AssetBundle
{

    public $sourcePath = '@bower/notifyjs/dist';
    public $basePath = '@webroot/assets';
    public $js = ['notify.js'];
    public $depends = ['yii\web\JqueryAsset'];

}