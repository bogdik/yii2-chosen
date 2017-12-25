<?php
/**
 * @copyright Copyright (c) 2016 Oleg Balykin
 * @link https://github.com/ezoterik
 * @version 1.0.0
 */
namespace bogdik\chosen;

use yii\web\AssetBundle;

/**
 * ChosenBootstrapAsset
 *
 * @author Oleg Balykin <ezoterik@gmail.com>
 * @link https://github.com/RomeroMsk/yii2-chosen
 * @see http://harvesthq.github.io/chosen
 */
class ChosenBootstrapAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap4c-chosen';

    public $css = [
        'component-chosen.css',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'nex\chosen\ChosenAsset',
    ];
}
