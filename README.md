## Vue.JS & Laravel SSR

#### [@WeCodeTutorials](https://twitter.com/WeCodeTutorials)
[![Logo](https://cdn.pbrd.co/images/HdwCut8.png)](https://www.youtube.com/channel/UCj9VatwdukZjNOnIKcpWcsA)

This is an example project on rendering a Vue.JS component inside a Laravel application using vue-server-renderer and PHP V8JS extension.

This project is made for my youtube tutorial on ["Vue.JS and Laravel Server Side Rendering (SSR)".](https://www.youtube.com/watch?v=cTwQtmFjYkw&list=PLJpBh2VJhy5x0RtRn-qREgP_pdvcFYpPf)

## get it up and running.

After you clone this project, do the following:

```bash
# go into the project
cd vue-laravel-ssr

# create a .env file
cp .env.example .env

# install composer dependencies
composer update

# install npm dependencies
npm install

# generate a key for your application
php artisan key:generate

# run webpack and watch for changes
npm run watch
```

#### Prerequisites
- v8 version >= 4.6.70
- PHP version >= 7.0
- PHP PECL
- PHP V8js extension

Install V8 on any machine: https://developers.google.com/v8/build

V8js extension installation on linux: https://github.com/lesstif/v8js-rpm

PECL for Mac: https://jason.pureconcepts.net/2012/10/install-pear-pecl-mac-os-x/

PECL for Windows: http://php.net/manual/en/install.pecl.windows.php

PECL on linux: just install php-pear which contains pecl:
```
$ wget http://pear.php.net/go-pear.phar
$ go-pear.phar
```


Good Luck :)
