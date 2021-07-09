<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\models;

use application\core\Model;
use application\lib\SteamAPI;


class User extends Model
{
	
	public function getUser($auth)
	{
		
		$params = [
			'auth' => $auth,
		];
		$result = $this->db->row("SELECT * FROM playertimes WHERE auth = :auth", $params);

		return $result;
	}

	public function noSteam($auth)
	{
		
		$params = [
			'auth' => $auth,
		];
		$result = $this->db->row("SELECT `name` FROM users WHERE auth = :auth", $params);
		
		return $result[0]['name'];
	}

	public function statisticMaps($auth){
		$params = [
			'auth' => $auth,
		];
		$bonus = $this->db->column("SELECT COUNT(*) FROM playertimes WHERE track = 1 AND auth = :auth", $params);
		$base = $this->db->column("SELECT COUNT(*) FROM playertimes WHERE track = 0 AND auth = :auth", $params);
		$maps = $this->db->column("SELECT COUNT(*) FROM playertimes WHERE auth = :auth", $params);
		$jumps = $this->db->column("SELECT SUM(jumps) AS jumps FROM playertimes WHERE auth = :auth", $params);
		$strafes = $this->db->column("SELECT SUM(strafes) AS strafes FROM playertimes WHERE auth= :auth", $params);
		$resultArray = array(
			'bonus'=>$bonus,
			'base'=>$base,
			'maps'=>$maps,
			'jumps'=>$jumps,
			'strafes'=>$strafes,
		);

		return $resultArray;
	}

	public function styleRecord($auth) {
		$params = [
			'auth' => $auth,
		];
		$result = $this->db->row("SELECT style, COUNT(style) AS count_style FROM playertimes WHERE auth = :auth GROUP BY style ORDER BY count_style DESC", $params);

		return $result;
	}

	public function style() {
		$style = [
				0 => 'Prespeed', //0
			];

		return $style;
	}

	public function track(){
		$track = [
			0 => 'Основа',
			1 => 'Бонус'
		];

		return $track;
	}

	public function lastRecords($auth) {
		$params = [
			'auth' => $auth,
			'limit' => 5,
		];
		$result = $this->db->row("SELECT `map`,`time`,`points` FROM playertimes WHERE `auth` = :auth ORDER BY `date` DESC LIMIT :limit", $params);

		return $result;
	}

	public function allRecords($auth) {
		$params = [
			'auth' => $auth,
		];

		$result = $this->db->row("SELECT `map`,`time`,`jumps`,`style`,`date`,`strafes`,`sync`,`points`,`track` FROM playertimes WHERE `auth` = :auth ORDER BY `date` DESC", $params);

		return $result;

	}
	public function recordsStyle($auth, $style) {
		$params = [
			'auth' => $auth,
			'style' => $style,
		];
		$result = $this->db->row("SELECT `map`,`time`,`jumps`,`date`,`strafes`,`sync`,`points`,`track` FROM playertimes WHERE `auth` = :auth AND `style` = :style ORDER BY `date` DESC", $params);

		return $result;

	}

}

 ?>