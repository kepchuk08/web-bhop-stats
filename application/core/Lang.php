<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\core;
use application\lib\SxGeo;


class Lang {

	public $lang;

	public function __construct() {
		$SxGeo = new SxGeo('application/lib/SxGeo.dat', SXGEO_BATCH | SXGEO_MEMORY); 
		$country = mb_strtolower($SxGeo->getCountry($_SERVER['REMOTE_ADDR']));

        if (!file_exists('application/config/config.json')) {
        	if ($country != 'ru') {
				$this->lang = 'en';
			}else{
				$this->lang = 'ru';
			}

		}else{
			$json_file = 'application/config/config.json';
			$json = json_decode(file_get_contents($json_file),TRUE);

			if (!isset($_COOKIE['lang'])) {
				$this->lang = $json['language'];
			}else{
				$this->lang = $_COOKIE['lang'];
			}
		}
    }

    public function loadingLang()
    {
    	require 'application/lang/'.$this->lang.'.php';
    }
}



?>