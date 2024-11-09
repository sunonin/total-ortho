<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'hail812\adminlte3\assets\AdminLteAsset', // Include AdminLTE3 asset bundle
        'hail812\adminlte3\assets\FontAwesomeAsset', // Optional: Include FontAwesome
    ];
}
