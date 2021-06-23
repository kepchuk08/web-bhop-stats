<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\lib;
use application\lib\Db;

class Sistem
{ 

	public $db;

	public function __construct(){
		$this->db = new Db;
	}


	public function corectDate($date) {
		$corectDate = date('d.n.y, H:i', $date);

		return $corectDate;
	}

	public function lastMap($auth)
	{
		$params = [
			'auth' => $auth,
		];
		$result = $this->db->row('SELECT `map` FROM playertimes WHERE `auth` = :auth ORDER BY `date` DESC LIMIT 1', $params);
		if (!isset($result[0]['map'])) {
			$error = 'Игрок не прошел ни одной карты';
			return $error;
		}else {
			return $result[0]['map'];
		}
		


	}

	public function userName($auth){
		$params = [
			'auth' => $auth,
		];
		$result = $this->db->row("SELECT `name` FROM users WHERE `auth` = :auth", $params);

		return $result[0]['name'];
	}

}



 ?>