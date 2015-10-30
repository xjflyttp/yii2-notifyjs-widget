<?php

namespace xj\notifyjs\themes;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class BootstrapAsset extends AssetBundle
{

    public $sourcePath = '@bower/notifyjs/dist';
    public $basePath = '@webroot/assets';
    public $js = ['styles/bootstrap/notify-bootstrap.js'];
    public $depends = ['xj\notifyjs\NotifyjsAsset'];

}
