<?php
namespace bastardijke\reeljs;

use yii\base\Widget;
use yii\base\InvalidConfigException;
use yii\helpers\Html;

class ReelJs extends Widget
{

    /**
     *
     * @var array Options of the img tag.
     */
    public $options = [];


    /**
     * @var array the options for the Reel plugin.
     * Please refer to the Reel plugin Web page for possible options.
     * @see http://reel360.org/reel#options
     */
    public $clientOptions = [];

    private $imageSource = null;

    /**
     * @inheritdoc
     */
    public function init()
    {

        parent::init();

        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }

        if (!isset($this->options['src'])) {
            throw new InvalidConfigException( 'Required option "src" is missed.' );  
        }

        $this->imageSource = $this->options['src'];

        Html::addCssClass($this->options, 'reel');

        ReelJsAsset::register($this->getView());

    }

    /**
     * @inheritdoc
     */
    public function run()
    {

        foreach ($this->clientOptions as $key => $value) {
            $this->options[ 'data-' . $key ] = $value;
        }

        echo Html::img( $this->imageSource , $this->options );

    }

}
