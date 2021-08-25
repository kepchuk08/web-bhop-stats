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


	public function statisticServer()
	{
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

<<<<<<< Updated upstream
	public function userCount() {
=======
	public function userCount() 
	{
>>>>>>> Stashed changes
		return $this->db->column('SELECT COUNT(auth) FROM users');
	}

	public function lastrecords()
	{
		$result = $this->db->row("SELECT `auth`,`map`,`time`,`jumps`,`style`,`date`,`strafes`,`sync`,`points`,`track` FROM playertimes ORDER BY `date` DESC LIMIT 100");

		return $result;
	}

<<<<<<< Updated upstream
	public function search($id){
		$SteamAPI = new SteamAPI;
=======
	public function search($id)
	{
		
>>>>>>> Stashed changes
		if (preg_match('/^STEAM_[0-1]:([0-1]):([0-9]+)$/', $id)) {
			$parts = explode(':', $id);
			$a = $parts[2] * 2 + $parts[1];
			$params = [
				'auth' => $a,
			];
			$result = $this->db->row("SELECT * FROM users WHERE auth = :auth", $params);

			return $result;

		}elseif(preg_match('/^\[U:1:([0-9]+)\]$/', $id)){
			$parts = explode(':', $id);
			$a = $parts[2];
			$params = [
				'auth' => $a,
			];
			$result = $this->db->row("SELECT * FROM users WHERE auth = :auth", $params);

			return $result;

		}elseif(preg_match('/^(?:https?:\/\/)?(?:www.)?steamcommunity.com\/id\/([a-zA-Z0-9_-]{2,})\/*$/', $id, $matches)){
			$valid = $SteamAPI->ConvertVanityURL($matches[1]);
			if ($valid["success"] == 1) {
<<<<<<< Updated upstream
				$steam = $SteamAPI->st64to32($valid["steamid"]);
=======
				$SteamAPI = new SteamAPI($matches[1]);
				$steam = $SteamAPI->getSteam2RenderedID();
>>>>>>> Stashed changes
				$parts = explode(':', $steam);
				$a = $parts[2] * 2 + $parts[1];
				$params = [
					'auth' => $a,
				];
				$result = $this->db->row("SELECT * FROM users WHERE auth = :auth", $params);
			}

			return $result;

		}elseif(preg_match('/^(?:https?:\/\/)?(?:www.)?steamcommunity.com\/profiles\/([0-9]+)\/*$/', $id, $matches)){
<<<<<<< Updated upstream
			$steam = $SteamAPI->st64to32($matches[1]);
=======
			$SteamAPI = new SteamAPI($matches[1]);
			$steam = $SteamAPI->getSteam2RenderedID();
>>>>>>> Stashed changes
			$parts = explode(':', $steam);
				$a = $parts[2] * 2 + $parts[1];
			$params = [
				'auth' => $a,
			];
			$result = $this->db->row("SELECT * FROM users WHERE auth = :auth", $params);

			return $result;

		}else{
			if (!preg_match('/[%20]+/', $id)) {
				$params = [
					'name' => $id,
				];
				$result = $this->db->row("SELECT * FROM users WHERE name = :name", $params);
			}else{
				$id = preg_replace('/[%20]+/', ' ', $id);
				$id = rawurldecode($id);
				$params = [
					'name' => $id,
				];
				$result = $this->db->row("SELECT * FROM users WHERE name LIKE :name", $params);
			}
<<<<<<< Updated upstream
			
			

			return $result;

=======

			return $result;
>>>>>>> Stashed changes
		}
	}
}


 ?>