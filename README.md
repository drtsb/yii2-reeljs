# yii2-reeljs

Renders a [jQuery Reel plugin](http://reel360.org/) widget

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).


Either run

```
composer require bastardijke/yii2-reeljs:*
```
or add

```json
"bastardijke/yii2-reeljs" : "*"
```

to the require section of your application's `composer.json` file.

Usage
-----

Please, check [jQuery Reel](http://reel360.org/reel#options) documentation for the different options supported by the plugin.

```
use bastardijke\reeljs\ReelJs;

$imageList = [
	'images/1.jpg',
	'images/2.jpg',
	'images/3.jpg',
	'images/4.jpg',
];

<?= ReelJs::widget([
    'options' => [
        'src' => $imageList[0], // Required. Source for first image.
    ],
    'clientOptions' => [
        'images' => implode( ',' , $imageList ),
        'speed' => 0.3,
        'shy' => "true",
    ], 
]);
?>
```