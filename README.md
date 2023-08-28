### Запуск
Bronara требует [PHP ^7.4](https://www.php.net/downloads) [Node 6.14+](https://nodejs.org/en/download/) [Composer](https://getcomposer.org/download/)

### Установка проекта
```
cd <папка проекта>
git init
git remote add origin https://github.com/vovas80/Bronara.git
git pull origin master
```
### Сборка проекта
```
cp .env.example .env
composer install
php artisan key:generate
php artisan config:clear
php artisan cache:clear
```
### Конфигурация .env
открыть файл .env любым текстовым редактором(или в среде разработки) В строках ниже нужно указать данные для подключения к базе данных Mysql

```
DB_HOST=адрес(localhost, 127.0.0.1)
DB_PORT=3306
DB_DATABASE=имя базы данных
DB_USERNAME=имя пользователя
DB_PASSWORD=пароль пользователя
```
