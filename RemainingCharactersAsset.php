<?php

/**
 * @author      José Lorente <jose.lorente.martin@gmail.com>
 * @license     The MIT License (MIT)
 * @copyright   José Lorente
 * @version     1.0
 */

namespace jlorente\remainingcharacters;

use yii\web\AssetBundle;

/**
 * Asset bundle for remaining character widget.
 * 
 * @author José Lorente <jose.lorente.martin@gmail.com>
 * @since 1.0
 */
class RemainingCharactersAsset extends AssetBundle {

    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/jlorente/yii2-widget-remainingcharacters';

    /**
     * @inheritdoc
     */
    public $js;

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init() {
        $this->setJs();
        parent::init();
    }

    /**
     * Selects the minified or the regular file depending on the debug configuration.
     */
    protected function setJs() {
        $this->js = ['remaining_characters.js'];
    }

}
