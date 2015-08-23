<?php

namespace torvalds\blockui;

use \yii\web\AssetBundle;

class BlockuiAsset extends AssetBundle {

    public $sourcePath = '@bower/blockui';
    public $js = [
        'jquery.blockUI.js'
    ];
}