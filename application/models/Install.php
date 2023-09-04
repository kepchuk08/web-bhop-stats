<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\models;
use application\core\Model;

use PDO;

class Install
{
    public $success;
    public $error;

    public function installForm($post)
    {
        

        if ((isset($_SERVER['REQUEST_SCHEME']) AND $_SERVER['REQUEST_SCHEME'] === 'https') OR (isset($_SERVER['HTTPS']) AND $_SERVER['HTTPS'] === 'on')){
            $protocol = 'https';
        }else{
            $protocol = 'http';
        }

        $url = $protocol.'://'.$_SERVER['SERVER_NAME'].'/admin';

        if (empty($post['oldcss'])) {
            $steamapikey = $post['steamapikey'];
            $cssold = 0;
        }else{
            $steamapikey = '';
            $cssold = 1;
        }


        if (!$dbh = new PDO('mysql:host='.$post['host'].';dbname='.$post['bd-name'], $post['bd-user'], $post['bd-password'])) {
            $this->error = ALERT_INSTALL_ERROR_CONNECTION_BD;
            return false;
        }else{
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $File = '<?php
    /**
     * @author kepchuk <support@game-lab.su>
     * @link https://steamcommunity.com/id/kepchuk/
     */
    
    return [
        "host" => "'.$post["host"].'",
        "dbname" => "'.$post["bd-name"].'",
        "user" => "'.$post["bd-user"].'",
        "password" => "'.$post["bd-password"].'",
        "oldcss" => '.$cssold.',
        "language" => "'.$post["getlanguage"].'",
        "steamapikey" => "'.$steamapikey.'",
        "domainname" => "'.$url.'",
        "logoutpage" => "'.$url.'",
        "loginpage" => "'.$url.'"
    ];
?>
';

            $dbh->exec("CREATE TABLE `web` (`id` int UNSIGNED AUTO_INCREMENT PRIMARY KEY, `style` text, `admins` text)");

            $admin[1] = [
                'name' => $post['admin-login'],
                'pass' => $post['admin-password'],
                'auth' => $post['admin-steamid']
            ];

            $params = [
                'admin' => base64_encode(serialize($admin))
            ];

            $STH = $dbh->prepare('INSERT INTO `web` (`admins`) VALUES (:admin)');
            $STH->execute(['admin' => base64_encode(serialize($admin))]);

            if (!file_exists('application/config/config.php')){
                $fIn = fopen('application/config/config.php', 'w+');
            }
            fwrite($fIn, $File);
            fclose($fIn);
            return true;
        }







    }
}