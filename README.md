## Installation instructions
This install requires docker and docker-compose be installed on your system \

~/git clone https://github.com/TristanB1994/prepr_larvelApp.git \
~/cd prepr_laravelApp \
~/docker run --rm -v $(pwd):/app composer install \
~/sudo chown -R $USER:$USER ~/prepr_larvelApp \
~/docker-compose up -d \

~/docker-compose exec db bash \
:/# mysql -u root -p \
mysql > GRANT ALL ON laravel.* TO '${USER}'@'%' IDENTIFIED BY 'your_laravel_db_password'; \
mysql > FLUSH PRIVILEGES \
mysql > exit \ 
~/docker-compose exec app php artisan migrate \


###Starting the php applications
~/docker exec -it app bash  \
/var/www$ composer require laravel/ui  \
/var/www$ php artisan ui bootstrap --auth   \

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
