# How to use
Clone repo



`Save .env.example as .env and put your database credentials`


Install the composer dependencies

`composer install`


Set application key

`php artisan key:generate`   

And Migrate with

`php artisan migrate --seed` or `php artisan migrate:fresh --seed`

 `php artisan storage:link`



