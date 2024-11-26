Как запустить проект через докер:

## Docker

- cp .env.example .env
- sudo docker compose up -d
- sudo docker exec backend composer install
- sudo docker exec backend php artisan key:generate --ansi
- sudo docker exec backend php artisan migrate --seed
- sudo docker exec backend php artisan storage:link
- sudo chown -R $USER:www-data ./storage ./bootstrap/cache/
- sudo chmod -R 777 ./storage ./bootstrap/cache/

Ngnix: http://localhost:8080 <br>
MySql: http://localhost:8081 <br>
PhpMyAdmin: http://localhost:8082

допсутпы к бд:

- username: tiger_sms
- password: tiger_sms

(имя папки и проекта должны быть такими же)



