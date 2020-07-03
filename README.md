Twitter Bootstrap 4 RTL Extension for Yii 2
===========================================

This is the Twitter Bootstrap 4 RTL (Right to Left) extension for Yii 2. It create an AssetBundle for [Bootstrap v4 RTL](https://github.com/MahdiMajidzadeh/bootstrap-v4-rtl).

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist armezit/yii2-bootstrap4-rtl
```

or add

```
"armezit/yii2-bootstrap4-rtl": "*"
```

to the require section of your `composer.json` file.

For using this asset bundle you need just add this line `'armezit\yii2\BootstrapRtlAsset'` in `$depends` of `AppAsset` or any asset bundels you work that.

Example:

```php
namespace backend\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'armezit\yii2\BootstrapRtlAsset',
    ];
}
```
