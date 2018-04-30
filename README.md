## Vue.JS & Laravel SSR

[Youtube Tutorial link](https://www.youtube.com/watch?v=cTwQtmFjYkw&list=PLJpBh2VJhy5x0RtRn-qREgP_pdvcFYpPf)

#### [@WeCodeTutorials](https://twitter.com/WeCodeTutorials)
[![Logo](https://cdn.pbrd.co/images/HdwCut8.png)](https://www.youtube.com/channel/UCj9VatwdukZjNOnIKcpWcsA)

This is an example project on ewndering a Vue.JS component inside a Laravel application using vue-server-renderer and PHP V8JS extension.

This project is made for my youtube tutorial on "Vue.JS and Laravel Server Side Rendering (SSR)".

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

Good Luck :)
