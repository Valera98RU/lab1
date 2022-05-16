##Configure data base param
Create  `.env` file and add parameters to directory with docker-compose file
```angular2html
DB_NAME= database name
DB_USER= user login
DB_PASSWORD= user password
CI_ENVIRONMENT = development
```

## Create Docker-composer container
```cmd
    docker-compose up
```

## Composer install
```cmd
    docker-compose exec composer install -r var/www/html/ci-news
```

##Connect to database
Create `.env` file to `ci-news` directory and add properties

```angular2html
database.default.hostname = 192.168.1.136
database.default.database = database name
database.default.username = user login
database.default.password = user password
database.default.DBDriver = Postgre
database.default.port = 5432
```

## Migrations and seeders command
```cmd
docker-compose exec  php var/www/html/ci-news/spark migrate

docker-compose exec  php var/www/html/ci-news/spark db:seed BaseSeeder

```
