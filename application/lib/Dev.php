<?php

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

function debug($str) 
{
	echo "<pre>";
	var_dump($str);
	echo "</pre>";
	exit;
}