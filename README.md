### Installation

```sh
composer install
yarn # or npm install
npm run build
cp .env.example .env # Modify .env to your needs
cd prelive_protected
./yiic migrate
```
Not point your browser to `/prelive` webroot.

### For internal use: creating the distro

```sh
mkdir elektrum_yii
cd elektrum_yii
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
rm -R protected/.htaccess
rm -R protected/commands/shell
rm -R protected/data
rm -R protected/extensions
rm -R protected/models/*
rm -R protected/vendor
```

Modify the following files:

```sh
web/index.php
protected/yiic.php
protected/config/database.php
protected/controllers/SiteController.php
```

Add the following files:

```
protected/components/Loader.php
protected/models/Client.php
protected/migrations/*.php
composer.json
webpack.mix.js
protected/css/*
protected/js/*
