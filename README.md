# Развертывание

### 1. Запустить Docker

### 2. Скопировать репозиторий GitHub
```console
git clone https://github.com/loooltooot/s1mple-store
cd s1mple-store
```
### 3. Создать контейнеры через docker-compose
```console
docker-compose pull laravel.test
docker-compose up -d
```
#### (Другой вариант) 3.1 Установить зависимоcти composer
```console
composer i
```
#### (Другой вариант) 3.2 Создать контейнеры через Laravel Sail
```console
./vendor/bin/sail up -d
```
### 4. Дождаться выполнения команд в laravel.test и выполнить команды (docker-compose / sail)
```console
docker-compose down
docker-compose up -d
```
### 5. Открыть http://127.0.0.1/ в браузере
