<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\models;

use application\core\Model;

class Maps extends Model
{

	public $error;

	public function getMaps()
	{
		$result = $this->db->row("SELECT map, COUNT(map) AS count_map_rec, SUM(jumps) AS jumps, SUM(strafes) AS strafes FROM playertimes GROUP BY map ORDER BY count_map_rec DESC");

		return $result;
	}

	public function mapinfo($map)
	{
		$params = [
			'map' => $map,
		];
		$AllRecords = $this->db->column("SELECT COUNT(map) FROM playertimes WHERE map = :map", $params);
		$BaseRecords = $this->db->column("SELECT COUNT(map) FROM playertimes WHERE map = :map AND track = 0", $params);
		$BonusRecords = $AllRecords - $BaseRecords;
		$AllJumps = $this->db->column("SELECT SUM(jumps) FROM playertimes WHERE map = :map", $params);
		$AllStrafes = $this->db->column("SELECT SUM(strafes) FROM playertimes WHERE map = :map", $params);
		$AllSync = $this->db->column("SELECT SUM(sync) FROM playertimes WHERE map = :map", $params);
		$MapsTier = $this->db->column("SELECT tier FROM maptiers WHERE map = :map", $params);
		$Sync = $AllSync/$AllRecords;

		$resultArray = array(
			'AllRecords'=>$AllRecords,
			'BaseRecords'=>$BaseRecords,
			'BonusRecords'=>$BonusRecords,
			'AllJumps'=>$AllJumps,
			'AllStrafes'=>$AllStrafes,
			'AllSync'=> round($Sync),
			'MapsTier'=>$MapsTier,
		);

		return $resultArray;
	}

	public function stylemapbase($map)
	{
		$params = [
			'map' => $map,
		];
		$result = $this->db->row("SELECT style, COUNT(style) AS count_style FROM playertimes WHERE map = :map AND track = 0 GROUP BY style ORDER BY count_style DESC", $params);

		return $result;
	}

	public function stylemapbonus($map)
	{
		$params = [
			'map' => $map,
		];
		$result = $this->db->row("SELECT `style`, COUNT(style) AS `count_style` FROM `playertimes` WHERE `map` = :map AND `track` not like '0' GROUP BY style ORDER BY count_style DESC", $params);
		

		return $result;
	}

	public function lastRecordsMap($map)
	{
		$params = [
			'map' => $map,
		];
		$result = $this->db->row("SELECT * FROM playertimes WHERE `map` = :map ORDER BY `date` DESC LIMIT 10", $params);

		return $result;
	}

	public function allrecords($map, $style = '', $track = '')
	{
		$params = [
			'map' => $map,
		];
		$result = $this->db->row("SELECT * FROM playertimes WHERE `map` = :map ORDER BY `date` DESC", $params);
		
		return $result;
	}

	public function allrecordsfilter($map, $style, $track)
	{
		$params = [
			'style' => $style,
			'track' => $track,
			'map' => $map,
		];
		$result = $this->db->row("SELECT * FROM playertimes WHERE `map` = :map AND `style` = :style AND `track` = :track ORDER BY `date` DESC", $params);
		
		
		return $result;
	}

	public function mapValidate($key,$map)
	{
		$params = [
			'style' => $key['style'],
			'track' => $key['track'],
			'map' => $map,
		];
		$result = $this->db->row("SELECT * FROM playertimes WHERE `map` = :map AND `style` = :style AND `track` = :track ORDER BY `date`", $params);
		if (empty($result)) {
			$this->error = MODEL_MAP_ERROR_SEARCH;
			return false;
		}else{
			return true;
		}
		
	}
}

 ?>