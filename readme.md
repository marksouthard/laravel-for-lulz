# Laravel for Lulz

## Presentation

You can open the index.html file from within the presentation folder to view the slides.

## Demo Installation

The demo now uses sqlite, so it will run via the include php artisan serve Artisan Command.

* From terminal `cd` into the ghetto-imdb folder.
* Duplicate the `.env.example` as `.env`
* Run `php artisan serve`
* Run `php artisan migrate:install`
* Run `php artisan migrate`
* Run `php artisan db:seed`

You are now ready to view the site at http://localhost:8000