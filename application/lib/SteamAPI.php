<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\lib;

class SteamAPI
{ 
	public $key; 

	/**
	 * Конвертируем в steam64
	 */
	public function steamid64($key) 
	{
			$key = '[U:1:'.$key.']';
			if (preg_match('/^\[U:[0-9]:([0-9]+)\]$/', $key, $matches)) {
		    	$key = '7656'.(1197960265728 + $matches[1]);
		  	}else{
		    	$key = '7656'.(((substr($key, 10)) * 2) + 1197960265728 + (substr($key, 8, 1)));
		  	}
		
		return $key;
	}


	public function GetPlayerInfo($key)
	{
		$key_account = self::steamid64($key);
		$config = require 'application/config/db.php';
	  	$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$config['steamkey']."&steamids=".$key_account."&format=json";
	  	$data = file_get_contents($url);
	  	$information = json_decode($data, true);
	  	if (empty($information['response']['players'][0])) {
	  		return false;
	  	}
	  	return $information['response']['players'][0];
	}

	public function userStatus($key) {
		switch ($key) {
		    case '1':
		      echo '<p class="user-online"><i class="fas fa-battery-full"></i> В сети</p>';
		      break;
		    case '3':
		      echo '<p class="user-away"><i class="fas fa-battery-half"></i> Нет на месте</p>';
		      break;
		    default:
		      echo '<p class="user-offline"><i class="fas fa-battery-empty"></i> Не в сети</p>';
		      break;
		}
	}

	public function VacBan($key) {
		$key_account = self::steamid64($key);
		$config = require 'application/config/db.php';
	  	$url = "http://api.steampowered.com/ISteamUser/GetPlayerBans/v1/?key=".$config['steamkey']."&steamids=".$key_account."&format=json";
	  	$data = file_get_contents($url);
	  	$information = json_decode($data, true);
	  	if (empty($information['response']['players'][0])) {
	  		return false;
	  	}
	  	return $information['players'][0]['VACBanned'];
	}

	public function VacBanInfo ($key) {
		if ($key = true) {
			echo '<p class="vac-false"><i class="fas fa-thumbs-up"></i> VAC бан отсутствует</p>';
		}else{
			echo '<p class="vac-true"><i class="fas fa-thumbs-down"></i> У игрока VAC бан</p>';
		}
	}


}



 ?>