<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\models;

use application\core\Model;
use application\lib\SteamAPI;
class Main extends Model
{
	
	public function getUsers($route)
	{
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		$result = $this->db->row('SELECT * FROM users ORDER BY points DESC LIMIT :start, :max', $params);

		return $result;
	}


	public function statisticServer(){
		$Maps = $this->db->column("SELECT COUNT(DISTINCT map) FROM mapzones");
		$TrackBonus = $this->db->column("SELECT COUNT(*) FROM playertimes WHERE track = 1");
		$TrackBase = $this->db->column("SELECT COUNT(*) FROM playertimes WHERE track = 0");
		$Records = $this->db->column("SELECT COUNT(*) FROM playertimes");

		$resultArray = array(
			'Maps'=>$Maps,
			'TrackBonus'=>$TrackBonus,
			'TrackBase'=>$TrackBase,
			'Records'=>$Records,
		);

		return $resultArray;
	}

	public function getMaps(){
		$result = $this->db->column("SELECT COUNT(DISTINCT map) FROM mapzones");

		return $result;
	}
	public function getTrackBonus(){
		$result = $this->db->column("SELECT COUNT(*) FROM playertimes WHERE track = 1");

		return $result;
	}
	public function getTrackBase(){
		$result = $this->db->column("SELECT COUNT(*) FROM playertimes WHERE track = 0");

		return $result;
	}
	public function getRecords(){
		$result = $this->db->column("SELECT COUNT(*) FROM playertimes");

		return $result;
	}

	public function userCount() {
		return $this->db->column('SELECT COUNT(auth) FROM users');
	}

	public function lastrecords(){
		$result = $this->db->row("SELECT `auth`,`map`,`time`,`jumps`,`style`,`date`,`strafes`,`sync`,`points`,`track` FROM playertimes ORDER BY `date` DESC LIMIT 100");

		return $result;
	}

	



}


 ?>