<?php

/**
 * @package   yii2-krajee-base
 * @author    raja <rajaflight24@gmail.com>
 * @copyright Copyright &copy; raja Visweswaran, Krajee.com, 2014 - 2016
 * @version   1.8.5
 */

namespace raja\base;

use Yii;

/**
 * Common base widget asset bundle for all Krajee widgets
 *
 * @author raja <rajaflight24@gmail.com>
 * @since 1.0
 */
class WidgetAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/kv-widgets']);
        $this->setupAssets('js', ['js/kv-widgets']);
        parent::init();
    }
}
