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

        if (!file_exists('application/config/config.php')) {
        	if ($country != 'ru') {
				$this->lang = 'en';
			}else{
				$this->lang = 'ru';
			}

		}else{
			$config = require 'application/config/config.php';
			if (!isset($_COOKIE['lang'])) {
				$this->lang = $config['language'];
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