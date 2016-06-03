<?php

/**
 * @package   yii2-krajee-base
 * @author    raja <rajaflight24@gmail.com>
 * @copyright Copyright &copy; raja Visweswaran, Krajee.com, 2014 - 2016
 * @version   1.8.5
 */

namespace raja\base;

/**
 * Asset bundle for loading animations
 *
 * @author raja <rajaflight24@gmail.com>
 * @since 1.0
 */
class AnimateAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/animate']);
        parent::init();
    }
}
