<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\lib;

class SteamAPI
{ 
	public $key; 
	public $id;

	public function getSteamID64($id) {
	    if (preg_match('/^STEAM_/', $id)) {
	        $parts = explode(':', $id);
	        return bcadd(bcadd(bcmul($parts[2], '2'), '76561197960265728'), $parts[1]);
	    } elseif (is_numeric($id) && strlen($id) < 16) {
	        return bcadd($id, '76561197960265728');
	    } else {
	        return $id;
	    }
	}
	
	public function ConvertVanityURL($url)
	{
		$config = require 'application/config/db.php';
	  	$url = "http://api.steampowered.com/ISteamUser/ResolveVanityURL/v0001/?key=".$config['steamkey']."&vanityurl=".$url."&format=json";
	  	$data = file_get_contents($url);
	  	$information = json_decode($data, true);
	  	return $information["response"];
	}

	/**
	 * Получаем из стим 64 => стим 32
	 */
	public static function st64to32($steamid64)
    {
        $pattern = "/^(7656119)([0-9]{10})$/";
        if (preg_match($pattern, $steamid64, $match)) {
            $const1 = 7960265728;
            $const2 = "STEAM_0:";
            $steam32 = '';
            if ($const1 <= $match[2]) {
                $a = ($match[2] - $const1) % 2;
                $b = ($match[2] - $const1 - $a) / 2;
                $steam32 = $const2 . $a . ':' . $b;
            }
            return $steam32;
        }
        return false;
    }

	/**
	 * Получаем из стим 3 => стим 64
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

	/**
	 * Получаем из стим 32 => стим 3
	 */
	public static function st32to3($steamid32)
    {
        if (preg_match('/^STEAM_0\:1\:(.*)$/', $steamid32, $res)) {
 
            $st = '[U:1:';
            $st .= $res[1] * 2 + 1;
            $st .= ']';
            return $st;
        }
        return false;
    }


    public static function st32to64($key)
    {
        if (preg_match('/^STEAM_1\:*\:(.*)$/', $key, $res)) {
            list(, $m1, $m2) = explode(':', $key, 3);
            list($steam_cid,) = explode('.', bcadd((((int)$m2 * 2) + $m1), '76561197960265728'), 2);
            return $steam_cid;
        }
        return false;
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