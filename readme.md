## Лабораторная работа №5: Запуск сайта в контейнере

### Цель работы
Выполнив данную работу мы сможем подготовить образ контейнера для запуска веб-сайта на базе Apache HTTP Server + PHP (mod_php) + MariaDB.

### Задание 
Создать Dockerfile для сборки образа контейнера, который будет содержать веб-сайт на базе Apache HTTP Server + PHP (mod_php) + MariaDB. База данных MariaDB должна храниться в монтируемом томе. Сервер должен быть доступен по порту 8000.

Установить сайт WordPress. Проверить работоспособность сайта.



Постройте образ контейнера с именем apache2-php-mariadb.
```dockerfile 
build -t apache2-hp-mariadb . 
```
Создайте контейнер apache2-php-mariadb из образа apache2-php-mariadb и запустите его в фоновом режиме с командой запуска bash.

```dockerfile
run -d --name apache2-php-mariadb -it apache2-php-mariadb bash
```

Скопируйте из контейнера файлы конфигурации apache2, php, mariadb в папку files/ на компьютере. Для этого, в контексте проекта, выполните команды:

![image1](./images/image1.png)

Остановить и удалить контейнер 

```dockerfile
docker stop apache2-php-mariadb
docker rm apache2-php-mariadb
```





