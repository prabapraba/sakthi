<?php

/**
 * @package   yii2-krajee-base
 * @author    raja <rajaflight24@gmail.com>
 * @copyright Copyright &copy; raja Visweswaran, Krajee.com, 2014 - 2016
 * @version   1.8.5
 */

namespace raja\base;

/**
 * Base asset bundle for Krajee extensions (including bootstrap plugins)
 *
 * @author raja <rajaflight24@gmail.com>
 * @since 1.6.0
 */
class PluginAssetBundle extends AssetBundle
{
    /**
     * @inheritdoc
     */
     public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
