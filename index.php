<?php

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

require 'application/lib/Dev.php';

use application\core\Router;

if (!file_exists('application/config/config.json')) {
  if ($_SERVER['REQUEST_URI'] != '/install') {
    header('Location: /install');
    exit;
  }
}

spl_autoload_register(function ($class){
  $path = str_replace('\\', '/', $class.'.php');
  if (file_exists($path)) {
    require $path;
  }
});

session_start();


$router = new Router;
$router->run();