<?php
namespace bastardijke\reeljs;

use yii\web\AssetBundle;

class ReelJsAsset extends AssetBundle
{

    public $js = [
        'js/jquery.reel.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }

}
