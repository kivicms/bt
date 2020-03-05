# Тесты для Битрикс

### Запуск контейнеров
```shell script
docker-compose up -d 
```

После запуска контейнеров перейти по адресу: localhost/bitrixsetup.php и установить Битрикс

### База данных 
host: mysql

database: sitemanager

username: bitrix

pass: 123456

### Запуск тестов
```shell script
vendor/bin/codecept run --debug
```

### Добавить новый тест
```shell script
vendor/bin/codecept generate:cest acceptance First
```

### Дока по приемочным тестам
https://codeception.com/docs/03-AcceptanceTests