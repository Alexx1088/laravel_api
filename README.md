
## Stack
- Стек- PHP 7.3+
- Laravel 8.75

## Deployment
Развертывание должно производиться через стандартные механизмы:
- git clone ...
- docker-compose up -d
- docker exec -it application bash
- php artisan storage:link
- php artisan migrate
- php artisan db:seed