<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 * 
 */

/*используется на разных страницах*/
define('LASTRECORDS', 'Последние рекорды');
define('ERROR_STYLE_TITLE','Данный стиль отсутствует в конфигурации');

/*шапка сайта*/
define('DEF_MENU_MAPS', 'Карты');
define('INFO_HED_ALL_RECORDS', 'ВСЕГО РЕКОРДОВ');
define('INFO_HED_REC_BASE', 'РЕКОРДОВ ОСНОВА');
define('INFO_HED_REC_BONUS', 'РЕКОРДОВ БОНУС');
define('INFO_HED_ALL_MAPS', 'ВСЕГО КАРТ');
define('HED_SEARCH_TITLE', '<em>Подсказка:</em><br><b>STEAM_x:x:xxxxx<br>[U:x:xxxxx]<br>Игровой ник<br>Ссылка в стиме</b>');
define('HED_SEARCH_placeholder', 'Поиск игрока');
define('HED_SEARCH_submit', 'Поиск');
define('HED_LANG_SELECT', 'Язык');

/*название страниц*/
define('TITLE_PAGE_HAME', 'Главная страница');
define('TITLE_PAGE_SEARCH_PLAYERS', 'Поиск игроков');
define('TITLE_PAGE_PLAYER', 'Игрок ');
define('TITLE_PAGE_PLAYER_ALLRECORDS', 'Все рекорды');
define('TITLE_PAGE_PLAYER_ALLRECORDS_STYLE', 'Все рекорды на стиле ');
define('TITLE_PAGE_MAPS', 'Все карты');
define('TITLE_PAGE_MAP', 'Карта ');
define('TITLE_PAGE_MAP_ALLRECORDS', 'Все рекорды на карте ');

/*главная*/
define('VI_MAIN_INDEX_TOP_PLAYER', 'Топ игроки');

/*последние рекорды*/
define('VI_MAIN_LASTRECORDS_LAST_PLAYER', 'ПОСТЛЕДНИЕ 100 РЕКОРДОВ');

/*поиск игроков*/
define('VI_MAIN_SEARCH_RESULT_TRUE', 'Поиск по запросу: ');
define('VI_MAIN_SEARCH_RESULT_FALSE', 'Игрок не найден');

/*страница игрока*/
define('VI_USER_INDEX_NOSTEAM_TEXT', 'Игрок играет с пиратской версией игры');
define('VI_USER_INDEX_PROFILE', 'Провиль');
define('VI_USER_INDEX_THERE_IS_NO_RECORD', 'Игрок не поставил ни одного рекорда');
define('VI_USER_INDEX_ALLREC', 'Всего рекордов');
define('VI_USER_INDEX_REC_BASE', 'Рекордов основа');
define('VI_USER_INDEX_REC_BONUS', 'Рекордов бонус');
define('VI_USER_INDEX_ALLJUMPS', 'Прыжков');
define('VI_USER_INDEX_ALLSTREIF', 'Стрейфов');
define('VI_USER_INDEX_RECORDS_BY_STYLE', 'Рекордов по стилям');
define('VI_USER_INDEX_SYBMIT_ALLREC', 'все рекорды');
define('VI_USER_ALLREC_TITLE_BACK', 'Вернуться назад');
define('VI_USER_ALLRECSTYLE', 'Рекорды на стиле');
define('VI_USER_STEAMAPI_ERROR_TITLE', 'Ошибка SteamAPI!');
define('VI_USER_STEAMAPI_ERROR_CONTENT', 'Ошибка чтения SteamAPI key, убедитесь что steamapi key ввёден верно!!!');

/*страница карт*/
define('VI_MAP_TITLE', 'ВСЕ КАРТЫ СЕРВЕРА');
define('VI_MAP_INFO_TITLE', 'информация');
define('VI_MAP_ALLREC', 'Рекордов');
define('VI_MAP_REC_BASE', 'Основа рекордов');
define('VI_MAP_REC_BONUS', 'Бонус рекордов');
define('VI_MAP_ALLJUMP', 'Прыжков');
define('VI_MAP_ALLSTREIF', 'Стрейфов');
define('VI_MAP_AVERAGE_SYNCHRONIZATION', 'Ср. синхронизация');
define('VI_MAP_TIER', 'Сложность карты');
define('VI_MAP_TRACK_BASE', 'Основа');
define('VI_MAP_TRACK_BONUS', 'Бонус');
define('VI_MAP_TOP_REC', 'ТОП РЕКОРДЫ');
define('VI_MAP_MAPINFO_NO_REC_BONUS', 'Нет ни одного бонусного рекорда');
define('MODEL_MAP_ERROR_SEARCH', 'По данному стилю и пути нет рекродов');

/*страница 404*/
define('VI_404_TITLE', 'Страница не найдена!');
define('VI_404_SUBMIT_BACK', 'Вернуться на главную');

/*таблицы*/
define('VI_TABLE_NAME', 'Игрок');
define('VI_TABLE_COUNTRY', 'Страна');
define('VI_TABLE_LAST_VISIT', 'Последнее посещение');
define('VI_TABLE_LAST_MAP', 'Последнея карта');
define('VI_TABLE_MAP', 'Карта');
define('VI_TABLE_DATA', 'Дата');
define('VI_TABLE_TIME', 'Время');
define('VI_TABLE_STYLE', 'Стиль');
define('VI_TABLE_JUMP', 'Прыжков');
define('VI_TABLE_STREIF', 'Стрефов');
define('VI_TABLE_SINH', 'Синх.');
define('VI_TABLE_TRACK', 'Путь');
define('VI_TABLE_POINT', 'Очков');
define('VI_TABLE_NUMBER_OF_RECORDS', 'Количество рекордов');
define('VI_TABLE_POPULAR_STYLE', 'Популярный стиль');
define('VI_MAIN_INDEX_MORE_DETAILED', 'Подробнее');

/*админка*/
/*название страниц*/
define('TITLE_PAGE_ADMIN_AUTH', 'Админ панель авторизация');
define('TITLE_PAGE_ADMIN_STYLE', 'Настройка стилей');
define('TITLE_PAGE_ADMIN_DB', 'Настройка базы данных');
define('TITLE_PAGE_ADMIN_ADMINS', 'Настройка администраторов');

/*авторизация*/
define('VI_ADMIN_LOGO_TEXT_AUTH', 'Админ панель');
define('VI_ADMIN_FORM_LOGIN', 'Логин');
define('VI_ADMIN_FORM_PASS', 'Пароль');
define('VI_ADMIN_SYBMIT_ENTER', 'Вход');
define('VI_ADMIN_SYBMIT_STEAM', 'Войти через Steam');
define('VI_ADMIN_ALERT_AUTH_TITLE', 'Ошибка авторизации!');
define('VI_ADMIN_ALERT_AUTH_TEXT', 'Вы не являетесь администратором!');
define('MODEL_ADMIN_ALERT_AUTH_ERROR', 'Логин или пароль указан неверно');

/*меню и хедер*/
define('VI_ADMIN_HED_INDEX_LOGO_TEXT', 'Админ панель');
define('VI_ADMIN_HED_INDEX_MENU_BACK_SAIT', 'Перейти на сайт');
define('VI_ADMIN_HED_INDEX_MENU_LOGOUT', 'Выход');
define('VI_ADMIN_HED_INDEX_MENU_STYLE', 'Стили');
define('VI_ADMIN_HED_INDEX_MENU_DB', 'Базы данных');
define('VI_ADMIN_HED_INDEX_MENU_ADMINS', 'Администраторы');

/*настройка стилей*/
define('VI_ADMIN_INDEX_TITLE_PAGE', 'Стили');
define('VI_ADMIN_INDEX_TABLE_NAME', 'Название');
define('VI_ADMIN_INDEX_SUBMIT_EDIT', 'Изменить');
define('VI_ADMIN_INDEX_SUBMIT_ADD_STYLE', 'Добавить стиль');
define('VI_ADMIN_INDEX_SUBMIT_CLOUS', 'Закрыть');
define('MODEL_ADMIN_ALERT_SUCCESS_STYLE_EDIT', 'Название стиля изменено на ');
define('MODEL_ADMIN_ALERT_SUCCESS_STYLE_ADD', 'Добавлен новый стиль ');

/*нстройка баз данных*/
define('VI_ADMIN_DB_TITLE_PAGE', 'Базы данных');
define('VI_ADMIN_DB_MENU_TIMER', 'БД Таймера');
define('VI_ADMIN_DB_FORM_SIZE', 'Размер базы данных');
define('VI_ADMIN_DB_FORM_SYBMIT_CLEAR', 'Очистить рекорды');
define('ALERT_ADMIN_DB_TITLE', 'Очистить рекорды');
define('ALERT_ADMIN_DB_CONTENT', 'При очистке таблицы данные невозможно восстановить, так же будут обнулены все очки игроков!!!');
define('ALERT_ADMIN_DB_CANCEL', 'Отмена');
define('ALERT_ADMIN_DB_YES_CLEAR', 'Да, очистить таблицу');
define('MODEL_ADMIN_ALERT_SUCCESS_CLEAR', 'Все рекорды удалены!');

/*настройка администраторов*/
define('VI_ADMIN_ADMINS_TITLE_PAGE', 'Администраторы');
define('VI_ADMIN_ADMINS_MENU_ADD_ADMIN', 'Добавить администратора');
define('VI_ADMIN_ADMINS_FORM_LOGIN', 'Ник');
define('VI_ADMIN_ADMINS_FORM_PASS', 'Пароль');
define('VI_ADMIN_ADMINS_FORM_STEAMID', 'Индификатор');
define('VI_ADMIN_ADMINS_FORM_SYBMIT_DELETE', 'Удалить');
define('VI_ADMIN_ADMINS_FORM_SYBMIT_EDIT', 'Изменить');
define('ALERT_ADMIN_ADMINS_TITLE', 'Добавить администратора');
define('ALERT_ADMIN_ADMINS_SYBMIT_CANCEL', 'Закрыть');
define('ALERT_ADMIN_ADMINS_SYBMIT_ADD_ADMIN', 'Добавить админа');
define('MODEL_ADMIN_ADMINS_ALERT_SUCCESS_EDIT', 'Данные администратора изменены');
define('MODEL_ADMIN_ADMINS_ALERT_SUCCESS_ADD', ' добавлен в администраторы');

/*установка*/
define('VI_INSTALL_HEAD_TITLE', 'Установка ');
define('VI_INSTALL_CONNECT_DB_TEXT', 'Подключение базы данных таймера');
define('VI_INSTALL_FORM_HOST', 'localhost');
define('VI_INSTALL_FORM_NAME', 'Название базы данных');
define('VI_INSTALL_FORM_USER', 'Имя пользователя');
define('VI_INSTALL_FORM_PASS', 'Пароль');
define('VI_INSTALL_TEXT_STEAMAPI', 'Получить API Key вы можете нажав <a href="https://steamcommunity.com/dev" target="_blank">ЗДЕСЬ</a>');
define('VI_INSTALL_FORM_STEAMAPI', 'Ключ api стима');
define('VI_INSTALL_ADD_ADMIN_TEXT', 'Администратор');
define('VI_INSTALL_FORM_ADMIN_LOGIN', 'Логин');
define('VI_INSTALL_FORM_ADMIN_PASS', 'Пароль');
define('VI_INSTALL_FORM_ADMIN_STEAMID', 'SteamID');
define('VI_INSTALL_FORM_SYBMIT', 'Установить');
define('VI_INSTALL_LANG_TEXT', 'Язык сайта');
define('VI_INSTALL_LANG_SYBMIT', 'Язык');
define('ALERT_INSTALL_ERROR_CONNECTION_BD', 'Содинение с база данных не установленно!');
define('VI_INSTALL_CSSOLD_TITLE', 'При использовании таймера на версии CS:S v34, SteamAPI будут недоступны');
define('VI_INSTALL_SUCCESS_TITLE', 'Установка завершена');
define('VI_INSTALL_SUCCESS_CONTENT', 'Теперь вы можете пользоваться Bhop Stats, так же вы можете перейти в админ панель и добавить новые стили');
define('VI_INSTALL_SUCCESS_SYBMIT_SITE', 'Перейти на сайт');
define('VI_INSTALL_SUCCESS_SYBMIT_ADMIN_PANEL', 'Админ панель');

/*ситемный файл*/
define('LIB_SISTEM_TIME_JUST', ' Только что');
define('LIB_SISTEM_TIME_SEC_BACK', ' сек. назад');
define('LIB_SISTEM_TIME_MIN_AGO', ' мин. назад');
define('LIB_SISTEM_TIME_HPUR_AGO', ' час. назад');
define('LIB_SISTEM_TIME_YESTARDAY', 'Вчера в ');

define('LIB_SISTEM_TIME_JANUARY', 'января');
define('LIB_SISTEM_TIME_FEBRUARY', 'февраля');
define('LIB_SISTEM_TIME_APRIL', 'марта');
define('LIB_SISTEM_TIME_MARCH', 'апреля');
define('LIB_SISTEM_TIME_MAY', 'мая');
define('LIB_SISTEM_TIME_JUNE', 'июня');
define('LIB_SISTEM_TIME_JULY', 'июля');
define('LIB_SISTEM_TIME_AUGUST', 'августа');
define('LIB_SISTEM_TIME_SEPTEMBER', 'сентября');
define('LIB_SISTEM_TIME_OCTOBER', 'октября');
define('LIB_SISTEM_TIME_NEVEMBER', 'ноября');
define('LIB_SISTEM_TIME_DECEMBER', 'декабря');

define('LIB_SISTEM_SECOND', ' сек.  ');
define('LIB_SISTEM_MINUTE', ' мин.  ');
define('LIB_SISTEM_HOURS', ' час.  ');

define('LIB_SISTEM_TRACK_BASE', 'Основа');
define('LIB_SISTEM_TRACK_BONUS', 'Бонус');

define('LIB_SISTEM_STATUS_STEAM_ONLI', 'В сети');
define('LIB_SISTEM_STATUS_STEAM_OFF', 'Нет на месте');
define('LIB_SISTEM_STATUS_STEAM_NOT_IN_PLACE', 'Не в сети');

define('LIB_SISTEM_STATUS_VAC_NO', 'VAC бан отсутствует');
define('LIB_SISTEM_STATUS_VAC_YES', 'У игрока VAC бан');

define('LIB_SISTEM_THERE_ARE_NO_RECORDS', 'Игрок не прошел ни одной карты');
?>