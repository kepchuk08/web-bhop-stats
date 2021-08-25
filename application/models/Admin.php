<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\models;

use application\core\Model;
use application\lib\Json;
use application\lib\SteamAPI;

class Admin extends Model
{
	public $error;
	public $success;

	public function loginValidate($post)
	{
		$json = new Json;
		$result = $json->getJson();
		$countAdmins = count($result['admins']);
		for ($id = 0; $id < $countAdmins; $id++) {
			if ($result['admins'][$id]['login'] == $post['login']) {
				if ($result['admins'][$id]['pass'] == $post['password']) {
					$_SESSION['admin']['type']['login'] = $post['login'];
					return true;
        			break;
				}
    		}
		}
		$this->error = 'Логин или пароль указан неверно';
		return false;
	}

	public function steamValidate($post)
	{
		$json = new Json;

		$result = $json->getJson();
		$countAdmins = count($result['admins']);
		for ($id = 0; $id < $countAdmins; $id++) {
			if (!empty($result['admins'][$id]['steamid'])) {
				$steam = new SteamAPI($result['admins'][$id]['steamid']);
				if ($result['admins'][$id]['steamid'] == $post) {
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

	public function styleList()
	{
		$json = new Json;
		$result = $json->getJson();

		$resultArray = [
			'count' => count($result['style']),
			'arraystyle' => $result['style'],
		];

		return $resultArray;
	}

	public function editStyle($post)
	{
		$json_file = 'application/config/config.json';
		$json = json_decode(file_get_contents($json_file),TRUE);
		$countStyle = count($json['style']);
		for ($id = 0; $id < $countStyle; $id++) {
			if ($json['style'][$id]['id'] == $post['id-style']) {
				$json['style'][$id]['name'] = $post['name-style'];
				file_put_contents($json_file, json_encode($json));
				$this->success = 'Название стиля изменено на '.$style;
				return true;
		        break;
		    }
		}
	}
	public function addStyle($post)
	{
		$json_file = 'application/config/config.json';
		$json = json_decode(file_get_contents($json_file),TRUE);
		$idStyle = count($json['style']);
		$addStyle = [
				'id' => (int)$idStyle,
				'name' => $post['add-styleName'],	
		];
		array_push($json['style'], $addStyle);
		file_put_contents($json_file, json_encode($json));
		$this->success = 'Стиль '.$style.' добавлен';

		return true;
	}

	public function getAdmins()
	{
		$json = new Json;
		$result = $json->getJson();

		$resultArray = [
			'count' => count($result['admins']),
			'arrayadmin' => $result['admins'],
		];

		return $resultArray;
	}

	public function addAdmin($post)
	{
		$json_file = 'application/config/config.json';
		$json = json_decode(file_get_contents($json_file),TRUE);
		$adminId = count($json['admins']);
		$addAdmin = [
				'id' => (int)$adminId,
				'login' => $post['addAdmin-nik'],
				'pass' => $post['addAdmin-pass'],
				'steamid' => $post['addAdmin-steam'],	
		];
		array_push($json['admins'], $addAdmin);
		file_put_contents($json_file, json_encode($json));
		$this->success = $post['addAdmin-nik'].' добавлен в администраторы';

		return true;
	}

	public function editAdmin($post)
	{
		$json_file = 'application/config/config.json';
		$json = json_decode(file_get_contents($json_file),TRUE);
		$countAdmin = count($json['admins']);
		$adminId = $post['admin-Id'];
		for ($id = 0; $id < $countAdmin; $id++) {
			if ($json['admins'][$id]['id'] == $post['admin-Id']) {
				$json['admins'][$id]['login'] = $post['admin-Login'];
				$json['admins'][$id]['pass'] = $post['admin-Pass'];
				$json['admins'][$id]['steamid'] = $post['admin-Steam'];
				file_put_contents($json_file, json_encode($json));
				$this->success = 'Данные администратора '.$post['admin-Login'].' изменены';
				return true;
		        break;
		    }
		}
	}

	public function deleteAdmin($adminId)
	{
		$json_file = 'application/config/config.json';
		$json = json_decode(file_get_contents($json_file),TRUE);
		foreach($json['admins'] as $key => $val){
			if ($key = $adminId) {
		    	unset($json['admins'][$key]);			
				file_put_contents($json_file, json_encode($json));
		    	break;
			}    
		}
	}

	public function getDB()
	{
		$json = new Json;
		$result = $json->getJson();

		$resultArray = [
			'count' => count($result['db']),
			'arraydb' => $result['db'],
		];

		return $resultArray;
	}

	public function DBsize()
	{
		$result = $this->db->row('SELECT round(((data_length + index_length) / 1024 / 1024), 2) `size` FROM information_schema.TABLES WHERE table_name = "playertimes"');

		return $result[0]['size'];
	}

	public function clearDB()
	{
		$this->db->row('DELETE FROM `playertimes`');
		$this->success = 'Все рекорды удалены!';
	}
}
 ?>