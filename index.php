<?php

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

require 'application/lib/Dev.php';

use application\core\Router;

spl_autoload_register(function ($class){
  $path = str_replace('\\', '/', $class.'.php');
  if (file_exists($path)) {
    require $path;
  }
});

$router = new Router;
$router->run();