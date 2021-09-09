<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 * @translation freak_exe_uLow
 */

/*используется на разных страницах*/
define('LASTRECORDS', 'Last Records');
define('ERROR_STYLE_TITLE','This style is not in your configuration');

/*шапка сайта*/
define('DEF_MENU_MAPS', 'Maps');
define('INFO_HED_ALL_RECORDS', 'All records');
define('INFO_HED_REC_BASE', 'Main records');
define('INFO_HED_REC_BONUS', 'Bonus records');
define('INFO_HED_ALL_MAPS', 'Total Maps');
define('HED_SEARCH_TITLE', '<em>Sync:</em><br><b>STEAM_x:x:xxxxx<br>[U:x:xxxxx]<br>Username<br>Steam Link</b>');
define('HED_SEARCH_placeholder', 'Search for a player');
define('HED_SEARCH_submit', 'Search');
define('HED_LANG_SELECT', 'Language');

/*название страниц*/
define('TITLE_PAGE_HAME', 'Main Page');
define('TITLE_PAGE_SEARCH_PLAYERS', 'Search for players');
define('TITLE_PAGE_PLAYER', 'Player');
define('TITLE_PAGE_PLAYER_ALLRECORDS', 'All records');
define('TITLE_PAGE_PLAYER_ALLRECORDS_STYLE', 'All records on the style ');
define('TITLE_PAGE_MAPS', 'All Maps');
define('TITLE_PAGE_MAP', 'Map ');
define('TITLE_PAGE_MAP_ALLRECORDS', 'All records on the map ');

/*главная*/
define('VI_MAIN_INDEX_TOP_PLAYER', 'Top players');

/*последние рекорды*/
define('VI_MAIN_LASTRECORDS_LAST_PLAYER', 'The last 100 records');

/*поиск игроков*/
define('VI_MAIN_SEARCH_RESULT_TRUE', 'Search by request: ');
define('VI_MAIN_SEARCH_RESULT_FALSE', 'Player not found');

/*страница игрока*/
define('VI_USER_INDEX_NOSTEAM_TEXT', 'The player plays with a pirated version of the game');
define('VI_USER_INDEX_PROFILE', 'Profile');
define('VI_USER_INDEX_THERE_IS_NO_RECORD', 'The player did not set any records');
define('VI_USER_INDEX_ALLREC', 'Total records');
define('VI_USER_INDEX_REC_BASE', 'Main records');
define('VI_USER_INDEX_REC_BONUS', 'Bonus records');
define('VI_USER_INDEX_ALLJUMPS', 'Jumps');
define('VI_USER_INDEX_ALLSTREIF', 'Strafes');
define('VI_USER_INDEX_RECORDS_BY_STYLE', 'Style records');
define('VI_USER_INDEX_SYBMIT_ALLREC', 'All records');
define('VI_USER_ALLREC_TITLE_BACK', 'Go back to');
define('VI_USER_ALLRECSTYLE', 'All Style records');
define('VI_USER_STEAMAPI_ERROR_TITLE', 'Error SteamAPI!');
define('VI_USER_STEAMAPI_ERROR_CONTENT', 'Error reading the Steam API key, make sure that the steam api key is entered correctly!!!');

/*страница карт*/
define('VI_MAP_TITLE', 'All server Maps');
define('VI_MAP_INFO_TITLE', 'Info');
define('VI_MAP_ALLREC', 'Records');
define('VI_MAP_REC_BASE', 'Main records');
define('VI_MAP_REC_BONUS', 'Bonus records');
define('VI_MAP_ALLJUMP', 'Jumps');
define('VI_MAP_ALLSTREIF', 'Strafes');
define('VI_MAP_AVERAGE_SYNCHRONIZATION', 'Sync');
define('VI_MAP_TIER', 'Map Tier');
define('VI_MAP_TRACK_BASE', 'Main');
define('VI_MAP_TRACK_BONUS', 'Bonus');
define('VI_MAP_TOP_REC', 'Top Records');
define('VI_MAP_MAPINFO_NO_REC_BONUS', 'There is no bonus record');
define('MODEL_MAP_ERROR_SEARCH', 'There are no records for this style');

/*страница 404*/
define('VI_404_TITLE', 'Page not found!');
define('VI_404_SUBMIT_BACK', 'Back to the main page');

/*таблицы*/
define('VI_TABLE_NAME', 'Player');
define('VI_TABLE_COUNTRY', 'Country');
define('VI_TABLE_LAST_VISIT', 'Last visit');
define('VI_TABLE_LAST_MAP', 'Last map');
define('VI_TABLE_MAP', 'Map');
define('VI_TABLE_DATA', 'Date');
define('VI_TABLE_TIME', 'Time');
define('VI_TABLE_STYLE', 'Style');
define('VI_TABLE_JUMP', 'Jumps');
define('VI_TABLE_STREIF', 'Strafes');
define('VI_TABLE_SINH', 'Sync');
define('VI_TABLE_TRACK', 'Track');
define('VI_TABLE_POINT', 'Points');
define('VI_TABLE_NUMBER_OF_RECORDS', 'Number of records');
define('VI_TABLE_POPULAR_STYLE', 'Popular Styles');
define('VI_MAIN_INDEX_MORE_DETAILED', 'Read more');

/*админка*/
/*название страниц*/
define('TITLE_PAGE_ADMIN_AUTH', 'Admin panel login');
define('TITLE_PAGE_ADMIN_STYLE', 'Style settings');
define('TITLE_PAGE_ADMIN_DB', 'Database Setup');
define('TITLE_PAGE_ADMIN_ADMINS', 'Administrators configuration');

/*авторизация*/
define('VI_ADMIN_LOGO_TEXT_AUTH', 'Admin panel');
define('VI_ADMIN_FORM_LOGIN', 'Login');
define('VI_ADMIN_FORM_PASS', 'Password');
define('VI_ADMIN_SYBMIT_ENTER', 'Sign in');
define('VI_ADMIN_SYBMIT_STEAM', 'Sign in with Steam');
define('VI_ADMIN_ALERT_AUTH_TITLE', 'Login error!');
define('VI_ADMIN_ALERT_AUTH_TEXT', 'You are not an administrator!');
define('MODEL_ADMIN_ALERT_AUTH_ERROR', 'Login or password is incorrect');

/*меню и хедер*/
define('VI_ADMIN_HED_INDEX_LOGO_TEXT', 'Admin panel');
define('VI_ADMIN_HED_INDEX_MENU_BACK_SAIT', 'Go to the main page');
define('VI_ADMIN_HED_INDEX_MENU_LOGOUT', 'Logout');
define('VI_ADMIN_HED_INDEX_MENU_STYLE', 'Style');
define('VI_ADMIN_HED_INDEX_MENU_DB', 'Database');
define('VI_ADMIN_HED_INDEX_MENU_ADMINS', 'Administrators');

/*настройка стилей*/
define('VI_ADMIN_INDEX_TITLE_PAGE', 'Styles');
define('VI_ADMIN_INDEX_TABLE_NAME', 'Name');
define('VI_ADMIN_INDEX_SUBMIT_EDIT', 'Edit');
define('VI_ADMIN_INDEX_SUBMIT_ADD_STYLE', 'Add a style');
define('VI_ADMIN_INDEX_SUBMIT_CLOUS', 'Close');
define('MODEL_ADMIN_ALERT_SUCCESS_STYLE_EDIT', 'The name of the style has been changed to ');
define('MODEL_ADMIN_ALERT_SUCCESS_STYLE_ADD', 'A new style has been added ');

/*нстройка баз данных*/
define('VI_ADMIN_DB_TITLE_PAGE', 'Databases');
define('VI_ADMIN_DB_MENU_TIMER', 'Timer database');
define('VI_ADMIN_DB_FORM_HOST', 'Host');
define('VI_ADMIN_DB_FORM_NAME', 'Database name');
define('VI_ADMIN_DB_FORM_USER', 'User');
define('VI_ADMIN_DB_FORM_PASS', 'Password');
define('VI_ADMIN_DB_FORM_SIZE', 'Database size');
define('VI_ADMIN_DB_FORM_SYBMIT_CLEAR', 'Clear the records');
define('ALERT_ADMIN_DB_TITLE', 'Clear the records');
define('ALERT_ADMIN_DB_CONTENT', 'If you clear the table, the data cannot be restored, as well as all the points of the players will be reset!!!');
define('ALERT_ADMIN_DB_CANCEL', 'Cancel');
define('ALERT_ADMIN_DB_YES_CLEAR', 'Yes, clear the db tables');
define('MODEL_ADMIN_ALERT_SUCCESS_CLEAR', 'All records are deleted!');

/*настройка администраторов*/
define('VI_ADMIN_ADMINS_TITLE_PAGE', 'Administrators');
define('VI_ADMIN_ADMINS_MENU_ADD_ADMIN', 'Add a Admin');
define('VI_ADMIN_ADMINS_FORM_LOGIN', 'Username');
define('VI_ADMIN_ADMINS_FORM_PASS', 'Password');
define('VI_ADMIN_ADMINS_FORM_STEAMID', 'SteamID');
define('VI_ADMIN_ADMINS_FORM_SYBMIT_DELETE', 'Delete');
define('VI_ADMIN_ADMINS_FORM_SYBMIT_EDIT', 'Edit');
define('ALERT_ADMIN_ADMINS_TITLE', 'Add a Admin');
define('ALERT_ADMIN_ADMINS_SYBMIT_CANCEL', 'Cancel');
define('ALERT_ADMIN_ADMINS_SYBMIT_ADD_ADMIN', 'Add a Admin');
define('MODEL_ADMIN_ADMINS_ALERT_SUCCESS_EDIT', 'Admin data has been changed');
define('MODEL_ADMIN_ADMINS_ALERT_SUCCESS_ADD', 'added to the admins');

/*установка*/
define('VI_INSTALL_HEAD_TITLE', 'Installation ');
define('VI_INSTALL_CONNECT_DB_TEXT', 'Connecting the timer database');
define('VI_INSTALL_FORM_HOST', 'localhost');
define('VI_INSTALL_FORM_NAME', 'Name of the database');
define('VI_INSTALL_FORM_USER', 'User');
define('VI_INSTALL_FORM_PASS', 'Password');
define('VI_INSTALL_TEXT_STEAMAPI', 'You can get the API Key by clicking <a href="https://steamcommunity.com/dev" target="_blank">HERE</a>');
define('VI_INSTALL_FORM_STEAMAPI', 'Steam api key');
define('VI_INSTALL_ADD_ADMIN_TEXT', 'Administrator');
define('VI_INSTALL_FORM_ADMIN_LOGIN', 'Login');
define('VI_INSTALL_FORM_ADMIN_PASS', 'Password');
define('VI_INSTALL_FORM_ADMIN_STEAMID', 'SteamID');
define('VI_INSTALL_FORM_SYBMIT', 'Install');
define('VI_INSTALL_LANG_TEXT', 'Site language');
define('VI_INSTALL_LANG_SYBMIT', 'Language');
define('ALERT_INSTALL_ERROR_CONNECTION_BD', 'The connection to the database is not established!');
define('VI_INSTALL_CSSOLD_TITLE', 'When using the timer on the CS:S v34 version, the Steam API will be unavailable');
define('VI_INSTALL_SUCCESS_TITLE', 'Installation is complete');
define('VI_INSTALL_SUCCESS_CONTENT', 'Now you can use BhopStats, you can also go to the admin panel and add new styles');
define('VI_INSTALL_SUCCESS_SYBMIT_SITE', 'Go to the website');
define('VI_INSTALL_SUCCESS_SYBMIT_ADMIN_PANEL', 'Admin panel');

/*ситемный файл*/
define('LIB_SISTEM_A_SECOND_AGO', ' second ago');
define('LIB_SISTEM_SECONDS_AGO', ' seconds ago');
define('LIB_SISTEM_A_SECONDS_AGO', ' second ago');

define('LIB_SISTEM_A_MINUTE_AGO', ' minute ago');
define('LIB_SISTEM_MINUTES_AGO', ' minutes ago');
define('LIB_SISTEM_A_MINUTES_AGO', ' minutes ago');

define('LIB_SISTEM_AN_HOUR_AGO', ' hour ago');
define('LIB_SISTEM_HOURS_AGO', ' hours ago');
define('LIB_SISTEM_AN_HOURS_AGO', ' hours ago');

define('LIB_SISTEM_A_DAY_AGO', ' day ago');
define('LIB_SISTEM_DAYS_AGO', ' days ago');
define('LIB_SISTEM_A_DAYS_AGO', ' days ago');

define('LIB_SISTEM_SECOND', ' sec.  ');
define('LIB_SISTEM_MINUTE', ' min.  ');
define('LIB_SISTEM_HOURS', ' hr.  ');

define('LIB_SISTEM_TRACK_BASE', 'Main');
define('LIB_SISTEM_TRACK_BONUS', 'Bonus');

define('LIB_SISTEM_STATUS_STEAM_ONLI', 'Online');
define('LIB_SISTEM_STATUS_STEAM_OFF', 'Out of place');
define('LIB_SISTEM_STATUS_STEAM_NOT_IN_PLACE', 'Offline');

define('LIB_SISTEM_STATUS_VAC_NO', 'There is no VAC ban');
define('LIB_SISTEM_STATUS_VAC_YES', 'The player has a VAC ban');

define('LIB_SISTEM_THERE_ARE_NO_RECORDS', 'The player did not pass any cards');
?>