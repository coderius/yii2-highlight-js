Syntax highlighter widget for Yii2
==================================
Highlight.js is a syntax highlighter written in JavaScript

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist codev/yii2-highlight-js "*"
```

or add

```
"coderius/yii2-highlight-js": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php coderius\yii2_highlight_js\HighlightWidget::begin();?>

<?= $content ?>

<?php coderius\yii2_highlight_js\HighlightWidget::end(); ?>
```


Some code that needs to be formalized with the plugin must be framed in the block :

```html
<pre>
<code>
...some code
</code>
</pre>
```


If You need to change the styles of the code block, you can attach your styles in this way.

```php
<?php coderius\yii2_highlight_js\HighlightWidget::begin(
            [
                'customAsset' => codev\yii2_highlight_js\NumLineAsset::className(),

            ]
        ); 
?>

<?= $content ?>

<?php coderius\yii2_highlight_js\HighlightWidget::end(); ?>
```
In this example I did my custom asset (as example codev\yii2_highlight_js\NumLineAsset::className())
It contains paths to styles and scripts to change the style HighlightWidget.

!Do not forget to specify the dependencies in the file

```php
/**
 * This is just an example.
 */
class NumLineAsset extends AssetBundle
{

...code

public $depends = [
        'coderius\yii2_highlight_js\HighlightAsset',
    ];

...code

```

License
-------
yii2_highlight_js is released under the BSD License. See LICENSE.md file for details.

This yii2 extantion widget is a wrapper over a plugin highlight_js https://github.com/isagalaev/highlight.js