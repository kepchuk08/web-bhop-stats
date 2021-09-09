<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 * @translation freak_exe_uLow
 */

/*used on different pages*/
define('LASTRECORDS', 'Letzte Rekorde');
define('ERROR_STYLE_TITLE','Dieser Style fehlt in deiner Konfiguration');

/*site header*/
define('DEF_MENU_MAPS', 'Maps');
define('INFO_HED_ALL_RECORDS', 'Alle Rekorde');
define('INFO_HED_REC_BASE', 'Main Rekorde');
define('INFO_HED_REC_BONUS', 'Bonus Rekorde');
define('INFO_HED_ALL_MAPS', 'Total Maps');
define('HED_SEARCH_TITLE', '<em>Sync:</em><br><b>STEAM_x:x:xxxxx<br>[U:x:xxxxx]<br>Spielername<br>Steam Link</b>');
define('HED_SEARCH_placeholder', 'Suche nach einem Spieler');
define('HED_SEARCH_submit', 'Suche');
define('HED_LANG_SELECT', 'Sprache');

/*page title*/
define('TITLE_PAGE_HAME', 'Main Seite');
define('TITLE_PAGE_SEARCH_PLAYERS', 'Spielersuche');
define('TITLE_PAGE_PLAYER', 'Spieler');
define('TITLE_PAGE_PLAYER_ALLRECORDS', 'Alle Rekorde');
define('TITLE_PAGE_PLAYER_ALLRECORDS_STYLE', 'Alle Rekorde vom Style ');
define('TITLE_PAGE_MAPS', 'Alle Karten');
define('TITLE_PAGE_MAP', 'Karte ');
define('TITLE_PAGE_MAP_ALLRECORDS', 'Alle Rekorde auf der Karte ');

/*Hauptseite*/
define('VI_MAIN_INDEX_TOP_PLAYER', 'Top Spieler');

/*Top 100 Rekorde*/
define('VI_MAIN_LASTRECORDS_LAST_PLAYER', 'Die letzten 100 Rekorde');

/*Spielersuche*/
define('VI_MAIN_SEARCH_RESULT_TRUE', 'Suche nach Anfragen: ');
define('VI_MAIN_SEARCH_RESULT_FALSE', 'Spieler wurde nicht gefunden');

/*Spielerseite*/
define('VI_USER_INDEX_NOSTEAM_TEXT', 'Der Spieler spielt mit einer raubkopierten Version des Spiels');
define('VI_USER_INDEX_PROFILE', 'Profil');
define('VI_USER_INDEX_THERE_IS_NO_RECORD', 'Der Spieler hat keine Rekorde aufgestellt');
define('VI_USER_INDEX_ALLREC', 'Gesamte Rekorde');
define('VI_USER_INDEX_REC_BASE', 'Main Rekorde');
define('VI_USER_INDEX_REC_BONUS', 'Bonus Rekorde');
define('VI_USER_INDEX_ALLJUMPS', 'Sprünge');
define('VI_USER_INDEX_ALLSTREIF', 'Strafes');
define('VI_USER_INDEX_RECORDS_BY_STYLE', 'Style Rekorde');
define('VI_USER_INDEX_SYBMIT_ALLREC', 'Alle Rekorde');
define('VI_USER_ALLREC_TITLE_BACK', 'Zurück zu');
define('VI_USER_ALLRECSTYLE', 'Alle Style Rekorde');
define('VI_USER_STEAMAPI_ERROR_TITLE', 'SteamAPI Fehler!');
define('VI_USER_STEAMAPI_ERROR_CONTENT', 'Fehler beim Lesen des Steam-API-Schlüssels, stellen Sie sicher, dass der Steam-API-Schlüssel korrekt eingegeben wurde!!!');

/*Kartenseite*/
define('VI_MAP_TITLE', 'Alle Server Karten');
define('VI_MAP_INFO_TITLE', 'Info');
define('VI_MAP_ALLREC', 'Rekorde');
define('VI_MAP_REC_BASE', 'Main Rekorde');
define('VI_MAP_REC_BONUS', 'Bonus Rekorde');
define('VI_MAP_ALLJUMP', 'Sprünge');
define('VI_MAP_ALLSTREIF', 'Strafes');
define('VI_MAP_AVERAGE_SYNCHRONIZATION', 'Sync');
define('VI_MAP_TIER', 'Map Tier');
define('VI_MAP_TRACK_BASE', 'Main');
define('VI_MAP_TRACK_BONUS', 'Bonus');
define('VI_MAP_TOP_REC', 'Top Rekorde');
define('VI_MAP_MAPINFO_NO_REC_BONUS', 'Es gibt keinen Bonusrekord');
define('MODEL_MAP_ERROR_SEARCH', 'Es gibt keine Rekorde für diesen Style');

/*Fehler Seite 404*/
define('VI_404_TITLE', 'Seite nicht gefunden!');
define('VI_404_SUBMIT_BACK', 'Zurück zur Hauptseite');

/*Tabellen*/
define('VI_TABLE_NAME', 'Spieler');
define('VI_TABLE_COUNTRY', 'Land');
define('VI_TABLE_LAST_VISIT', 'Last visit');
define('VI_TABLE_LAST_MAP', 'Letzte Karte');
define('VI_TABLE_MAP', 'Karte');
define('VI_TABLE_DATA', 'Datum');
define('VI_TABLE_TIME', 'Zeit');
define('VI_TABLE_STYLE', 'Style');
define('VI_TABLE_JUMP', 'Sprünge');
define('VI_TABLE_STREIF', 'Strafes');
define('VI_TABLE_SINH', 'Sync');
define('VI_TABLE_TRACK', 'Track');
define('VI_TABLE_POINT', 'Punkte');
define('VI_TABLE_NUMBER_OF_RECORDS', 'Anzahl der Rekorde');
define('VI_TABLE_POPULAR_STYLE', 'Beliebte Styles');
define('VI_MAIN_INDEX_MORE_DETAILED', 'Mehr lesen');

/*Admin*/
/*Seitenbezeichnung*/
define('TITLE_PAGE_ADMIN_AUTH', 'Anmeldung im Adminbereich');
define('TITLE_PAGE_ADMIN_STYLE', 'Style Einstellungen');
define('TITLE_PAGE_ADMIN_DB', 'Datenbank Einrichten');
define('TITLE_PAGE_ADMIN_ADMINS', 'Konfiguration der Administratoren');

/*Bestätigung*/
define('VI_ADMIN_LOGO_TEXT_AUTH', 'Admin panel');
define('VI_ADMIN_FORM_LOGIN', 'Einloggen');
define('VI_ADMIN_FORM_PASS', 'Passwort');
define('VI_ADMIN_SYBMIT_ENTER', 'Anmelden');
define('VI_ADMIN_SYBMIT_STEAM', 'Anmelden mit Steam');
define('VI_ADMIN_ALERT_AUTH_TITLE', 'Login Fehler!');
define('VI_ADMIN_ALERT_AUTH_TEXT', 'Du bist kein Administrator!');
define('MODEL_ADMIN_ALERT_AUTH_ERROR', 'Login oder Passwort ist falsch');

/*Menüs und Überschriften*/
define('VI_ADMIN_HED_INDEX_LOGO_TEXT', 'Admin panel');
define('VI_ADMIN_HED_INDEX_MENU_BACK_SAIT', 'Zur Hauptseite wechseln');
define('VI_ADMIN_HED_INDEX_MENU_LOGOUT', 'Abmelden');
define('VI_ADMIN_HED_INDEX_MENU_STYLE', 'Style');
define('VI_ADMIN_HED_INDEX_MENU_DB', 'Datenbank');
define('VI_ADMIN_HED_INDEX_MENU_ADMINS', 'Administratoren');

/*Style-Einstellungen*/
define('VI_ADMIN_INDEX_TITLE_PAGE', 'Styles');
define('VI_ADMIN_INDEX_TABLE_NAME', 'Name');
define('VI_ADMIN_INDEX_SUBMIT_EDIT', 'Bearbeiten');
define('VI_ADMIN_INDEX_SUBMIT_ADD_STYLE', 'Style hinzufügen');
define('VI_ADMIN_INDEX_SUBMIT_CLOUS', 'Schließen');
define('MODEL_ADMIN_ALERT_SUCCESS_STYLE_EDIT', 'Der Name des Style wurde geändert in ');
define('MODEL_ADMIN_ALERT_SUCCESS_STYLE_ADD', 'Ein neuer Style wurde hinzugefügt ');

/*Datenbankanpassungen*/
define('VI_ADMIN_DB_TITLE_PAGE', 'Datenbanken');
define('VI_ADMIN_DB_MENU_TIMER', 'Timer Datenbank');
define('VI_ADMIN_DB_FORM_HOST', 'Host');
define('VI_ADMIN_DB_FORM_NAME', 'Datenbank Name');
define('VI_ADMIN_DB_FORM_USER', 'Benutzer');
define('VI_ADMIN_DB_FORM_PASS', 'Passwort');
define('VI_ADMIN_DB_FORM_SIZE', 'Datenbankgröße');
define('VI_ADMIN_DB_FORM_SYBMIT_CLEAR', 'Rekorde löschen');
define('ALERT_ADMIN_DB_TITLE', 'Rekorde löschen');
define('ALERT_ADMIN_DB_CONTENT', 'Wenn Sie die Tables von der DB löschen, können die Daten nicht wiederhergestellt werden, und alle Punkte der Spieler werden zurückgesetzt!!!');
define('ALERT_ADMIN_DB_CANCEL', 'Abbrechen');
define('ALERT_ADMIN_DB_YES_CLEAR', 'Ja, die DB-Tabellen löschen');
define('MODEL_ADMIN_ALERT_SUCCESS_CLEAR', 'Alle Rekorde wurden gelöscht!');

/*Administratoreinstellung*/
define('VI_ADMIN_ADMINS_TITLE_PAGE', 'Administratoren');
define('VI_ADMIN_ADMINS_MENU_ADD_ADMIN', 'Admin hinzufügen');
define('VI_ADMIN_ADMINS_FORM_LOGIN', 'Benutzername');
define('VI_ADMIN_ADMINS_FORM_PASS', 'Passwort');
define('VI_ADMIN_ADMINS_FORM_STEAMID', 'SteamID');
define('VI_ADMIN_ADMINS_FORM_SYBMIT_DELETE', 'Löschen');
define('VI_ADMIN_ADMINS_FORM_SYBMIT_EDIT', 'Bearbeiten');
define('ALERT_ADMIN_ADMINS_TITLE', 'Admin hinzufügen');
define('ALERT_ADMIN_ADMINS_SYBMIT_CANCEL', 'Abbrechen');
define('ALERT_ADMIN_ADMINS_SYBMIT_ADD_ADMIN', 'Admin hinzufügen');
define('MODEL_ADMIN_ADMINS_ALERT_SUCCESS_EDIT', 'Admin-Daten wurden geändert');
define('MODEL_ADMIN_ADMINS_ALERT_SUCCESS_ADD', 'Zu den Admins hinzugefügt');

/*Installation*/
define('VI_INSTALL_HEAD_TITLE', 'Installation ');
define('VI_INSTALL_CONNECT_DB_TEXT', 'Verbindung mit der Timer-Datenbank');
define('VI_INSTALL_FORM_HOST', 'Lokalhost');
define('VI_INSTALL_FORM_NAME', 'Name der Datenbank');
define('VI_INSTALL_FORM_USER', 'Benutzer');
define('VI_INSTALL_FORM_PASS', 'Passwort');
define('VI_INSTALL_TEXT_STEAMAPI', 'API-Schlüssel<a href="https://steamcommunity.com/dev" target="_blank">HERE</a>');
define('VI_INSTALL_FORM_STEAMAPI', 'Steam api key');
define('VI_INSTALL_ADD_ADMIN_TEXT', 'Administrator');
define('VI_INSTALL_FORM_ADMIN_LOGIN', 'Anmelden');
define('VI_INSTALL_FORM_ADMIN_PASS', 'Passwort');
define('VI_INSTALL_FORM_ADMIN_STEAMID', 'SteamID');
define('VI_INSTALL_FORM_SYBMIT', 'Installieren');
define('VI_INSTALL_LANG_TEXT', 'Sprachen');
define('VI_INSTALL_LANG_SYBMIT', 'Sprache');
define('ALERT_INSTALL_ERROR_CONNECTION_BD', 'Die Verbindung zur Datenbank wurde nicht hergestellt!');
define('VI_INSTALL_CSSOLD_TITLE', 'Wenn Sie den Timer auf CS:S v34 verwenden, ist die Steam API nicht verfügbar');
define('VI_INSTALL_SUCCESS_TITLE', 'Installation abgeschlossen');
define('VI_INSTALL_SUCCESS_CONTENT', 'Jetzt können Sie BhopStats genießen, so können Sie in das Admin-Panel gehen und neue Stile hinzufügen');
define('VI_INSTALL_SUCCESS_SYBMIT_SITE', 'Gehe zur Website');
define('VI_INSTALL_SUCCESS_SYBMIT_ADMIN_PANEL', 'Admin-Panel');

/*System Datei*/
define('LIB_SISTEM_A_SECOND_AGO', ' Sekunde zuvor');
define('LIB_SISTEM_SECONDS_AGO', ' Sekunden zuvor');
define('LIB_SISTEM_A_SECONDS_AGO', ' Sekunde zuvor');

define('LIB_SISTEM_A_MINUTE_AGO', ' Minute zuvor');
define('LIB_SISTEM_MINUTES_AGO', ' Minuten zuvor');
define('LIB_SISTEM_A_MINUTES_AGO', ' Minute zuvor');

define('LIB_SISTEM_AN_HOUR_AGO', ' Stunde zuvor');
define('LIB_SISTEM_HOURS_AGO', ' Stunden zuvor');
define('LIB_SISTEM_AN_HOURS_AGO', ' Stunden zuvor');

define('LIB_SISTEM_A_DAY_AGO', ' Tag zuvor');
define('LIB_SISTEM_DAYS_AGO', ' Tage zuvor');
define('LIB_SISTEM_A_DAYS_AGO', ' Tage zuvor');

define('LIB_SISTEM_SECOND', ' sek.  ');
define('LIB_SISTEM_MINUTE', ' min.  ');
define('LIB_SISTEM_HOURS', ' std.  ');

define('LIB_SISTEM_TRACK_BASE', 'Main');
define('LIB_SISTEM_TRACK_BONUS', 'Bonus');

define('LIB_SISTEM_STATUS_STEAM_ONLI', 'Online');
define('LIB_SISTEM_STATUS_STEAM_OFF', 'Abwesend');
define('LIB_SISTEM_STATUS_STEAM_NOT_IN_PLACE', 'Offline');

define('LIB_SISTEM_STATUS_VAC_NO', 'Der Spieler hat kein VAC-Ban');
define('LIB_SISTEM_STATUS_VAC_YES', 'Der Spieler hat ein VAC-Ban');

define('LIB_SISTEM_THERE_ARE_NO_RECORDS', 'Der Spieler hat noch keine Rekorde gemacht');
?>