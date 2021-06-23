# Bhop Stats
PHP >=7.0
## WEB интерфейс для вывода статистики [shavit bhop timer](https://github.com/shavitush/bhoptimer)
## Поддерживаемые игры:
+ Counter-Strike Global Offensive
+ Counter-Strike Source (original box)
## Настройка панели
Настройка файла базы данных ***application/config/db.php***
```php
return [
  'host' => '###',                            //хост базы данных
  'dbname' => '###',                          //имя базы данных
  'user' => '###',                            //Пользователь 
  'password' => '###',                        //Пароль пользователя
  'steamkey' => '###'                         //Steam Web API Key для вывода информации о игроке подробнее https://steamcommunity.com/dev
];

```

Добавление изменение стилей происходит в файле ***application/models/user.php***
```php
public function style() {
  $style = [
    0 => 'Prespeed', // где 0 индификатор стиля в shavit-styles.cfg
  ];
  return $style;
}
```
## [Demo](https://test.game-lab.su/)
