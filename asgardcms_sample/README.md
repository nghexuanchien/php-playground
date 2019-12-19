# Asgard CMS Sample

This is an sample for how Asgard CMS could helps  us to build a website

# Setup
In working project directory run following commands:

```sh
$ docker-compose up -d
$ docker-compose exec app composer update
$ docker-compose exec app php artisan asgard:install
$ docker-compose exec app php artisan module:migrate Blog
$ docker-compose exec app php artisan module:migrate contact
$ docker-compose exec app php artisan db:seed
```
# See it works
### Front end
  - Access [http://localhost:8089](http://localhost:8089)
### Back end
  - Access [http://localhost:8089/en/backend](http://localhost:8089/en/backend) with:
    + Admin credential  `You have created from step above`
