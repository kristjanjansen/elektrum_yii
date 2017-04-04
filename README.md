```sh
mkdir yii
cd yii
composer require yiisoft/yii
cd vendor/yiisoft/yii/framework/
./yiic webapp ../../../../web
cd ../../../..
rm -R web/assets
rm -R web/css
rm -R web/images
rm -R web/themes
rm -R web/index-test.php
mv web/protected .
rm protected/models/*
rm -R protected/.htaccess
rm -R protected/vendor
rm -R protected/extensions
rm -R protected/commands/shell
```

Modify the following files:


```sh
web/index.php
protected/yiic.php
protected/config/database.php
protected/controllers/SiteController.php
```

Add following files

```
protected/components/Loader.php
protected/models/Client.php
protected/migrations/*.php
