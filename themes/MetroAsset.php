<?php

namespace xj\notifyjs\themes;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class MetroAsset extends AssetBundle
{

    public $sourcePath = '@bower/notifyjs/dist';
    public $basePath = '@webroot/assets';
    public $css = ['styles/metro/notify-metro.css'];
    public $js = ['styles/metro/notify-metro.js'];
    public $depends = ['xj\notifyjs\NotifyjsAsset'];

}
