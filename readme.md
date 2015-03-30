# Laravel for Lulz

## Presentation

You can open the index.html file from within the presentation folder to view the slides.

## Demo Installation

The demo now uses sqlite, so it will run via the include php artisan serve Artisan Command. All Artisan commands must be run from within the `ghetto-imdb` project folder.

* Duplicate the `.env.example` as `.env`
* Run `php artisan serve` to boot up a server at `http://localhost:8000`
* Run `php artisan migrate:install` to install the migration table
* Run `php artisan migrate` to run the migrations
* Run `php artisan db:seed` to seed the database so that we have data with which to work

You are now ready to view the site at `http://localhost:8000`