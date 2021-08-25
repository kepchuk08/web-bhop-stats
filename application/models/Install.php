<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\models;

use PDO;

class Install
{
    public $success;
    public $error;

    public function installForm($post)
    {
        if (!file_exists('application/config/config.json')){
            $fIn = fopen('application/config/config.json', 'w+');
        }

        $json_file = 'application/config/config.json';
        $json = json_decode(file_get_contents($json_file),TRUE);

        if ((isset($_SERVER['REQUEST_SCHEME']) AND $_SERVER['REQUEST_SCHEME'] === 'https') OR (isset($_SERVER['HTTPS']) AND $_SERVER['HTTPS'] === 'on')){
        $protocol = 'https';
        }
        else{
            $protocol = 'http';
        }
        $url = $protocol.'://'.$_SERVER['SERVER_NAME'].'/admin';

        try {
            $dbh = new PDO('mysql:host='.$post['host'].';dbname='.$post['bd-name'], $post['bd-user'], $post['bd-password']);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $jsonFile = [
                'db' => [
                    ['id' => 1,
                    'host' => $post['host'],
                    'dbname' => $post['bd-name'],
                    'user' => $post['bd-user'],
                    'password' => $post['bd-password']]
                ],
                'steamapikey' => $post['steamapikey'],
                'domainname' => $url,
                'logoutpage' => $url,
                'loginpage' => $url,
                'style' => [
                    ["id" => 0,"name" => "Normal"],
                    ["id" => 1,"name" => "Sideways"],
                    ["id" => 2,"name" => "W-Only"],
                    ["id" => 3,"name" => "Scroll"],
                    ["id" => 4,"name" => "400 Velocity"],
                    ["id" => 5,"name" => "Half-Sideways"],
                    ["id" => 6,"name" => "D-Only"],
                    ["id" => 7,"name" => "Segmented"],
                    ["id" => 8,"name" => "Low Gravity"],
                    ["id" => 9,"name" => "Slow Motion"]
                ],
                'admins' => [
                    ["id" => 0,
                    "login" => $post['admin-login'],
                    "pass" => $post['admin-password'],
                    "steamid" => $post['admin-steamid']]
                ]
            ];
            file_put_contents($json_file, json_encode($jsonFile));
            $this->success = 'файл создан!';
            return true;
        } catch (\Throwable $e) {
            $this->error = 'Содинение с база данных не установленно!';
            return false;
        }
    }
}