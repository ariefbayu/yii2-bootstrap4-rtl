<?php
namespace ariefbayu\yii2;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap v4 Rtl css files.
 *
 * @author ariefbayu <ariefbayu@gmail.com>
 */
class BootstrapRtlAsset extends AssetBundle
{
    public $sourcePath = '@npm-asset/bootstrap-v4-rtl/dist';

    public $css = [
        'css/bootstrap-rtl.css',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
