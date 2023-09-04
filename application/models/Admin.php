<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\models;

use application\core\Model;
use application\lib\SteamAPI;

class Admin extends Model
{
	public $error;
	public $success;

	public function loginValidate($post)
	{
		$STH = $this->db->row('SELECT * FROM `web`');
        $result = $this->db->fromBase64($STH[0]['admins']);

        foreach ($result as $key => $value) {
        	if ($value['name'] == $post['login']) {
        		if ($value['pass'] == $post['password']) {
        			$_SESSION['admin']['type']['login'] = $post['login'];
					return true;
        			break;
        		}
        	}
        }

		$this->error = MODEL_ADMIN_ALERT_AUTH_ERROR;
		return false;
	}

	public function steamValidate($post)
	{
		$STH = $this->db->row('SELECT * FROM `web`');
        $result = unserialize($STH[0]['admins']);

        foreach ($result as $key => $value) {
        	if (!empty($value['auth'])) {
				$steam = new SteamAPI($value['auth']);
				if ($value['auth'] == $post) {
					$_SESSION['admin']['type']['steam'] = $post;
					return true;
	        		break;
				}elseif($steam->getSteamID64() == $post){
					$_SESSION['admin']['type']['steam'] = $post;
					return true;
	        		break;
				}
			}
        }
	}

	public function check_session($value)
	{
		if (empty($_SESSION['admin']['type']['login'])) {
			if (empty($_SESSION['admin']['type']['steam'])) {
				return false;
			}else{
				return true;
			}
		}else{
			return true;
		}
	}


	public function DBsize()
	{
		$result = $this->db->row('SELECT round(((data_length + index_length) / 1024 / 1024), 2) `size` FROM information_schema.TABLES WHERE table_name = "playertimes"');

		return $result[0]['size'];
	}

	public function clearDB()
	{
		$this->db->row('DELETE FROM `playertimes`');
		$this->success = MODEL_ADMIN_ALERT_SUCCESS_CLEAR;
	}

	public function styleList()
	{
		$STH = $this->db->row('SELECT * FROM `web`');
        $result = $this->db->fromBase64($STH[0]['style']);

        return $result;
	}

	public function checkKey()
	{
		$config = require 'application/config/config.php';

		if (empty($config['steamapikey'])) {
			return false;
		}

		return true;
	}
}
 ?>