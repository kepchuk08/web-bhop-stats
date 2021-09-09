<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\lib;
use application\lib\Db;
use application\models\User;
use application\lib\Json;

class Sistem
{ 

	public $db;
	public $json;

	public function __construct()
	{
		$this->db = new Db;
		$json = new Json;
		$this->json  = $json->getJson();
	}

	//делаем датам читаемый вид
	public function corectDate($date) 
	{
		$dateTitle = date('d.n.y, H:i', $date);
		$time = time();
		$difference = $time - $date;
		$corectDate = floor($difference / (60 * 60 * 24));

		if ($corectDate == 0) {
			$corectDate = floor($difference / (60 * 60));
			if ($corectDate == 0) {
				$corectDate = floor($difference / 60);
				if ($corectDate == 0) {
					$corectDate = $difference;
					if ($corectDate == 1) {
						$text = $corectDate.LIB_SISTEM_A_SECOND_AGO;
					}elseif($corectDate > 1 AND $corectDate < 5){
						$text = $corectDate.LIB_SISTEM_SECONDS_AGO;
					}else{
						$text = $corectDate.LIB_SISTEM_A_SECONDS_AGO;
					}
				}
				if ($corectDate == 1) {
					$text = $corectDate.LIB_SISTEM_A_MINUTE_AGO;
				}elseif($corectDate > 1 AND $corectDate < 5){
					$text = $corectDate.LIB_SISTEM_MINUTES_AGO;
				}else{
					$text = $corectDate.LIB_SISTEM_A_MINUTES_AGO;
				}
			}
			if ($corectDate == 1) {
				$text = $corectDate.LIB_SISTEM_AN_HOUR_AGO;
			}elseif($corectDate > 1 AND $corectDate < 5){
				$text = $corectDate.LIB_SISTEM_HOURS_AGO;
			}else{
				$text = $corectDate.LIB_SISTEM_AN_HOURS_AGO;
			}
		}elseif($corectDate == 1){
			$text = $corectDate.LIB_SISTEM_A_DAY_AGO;
		}elseif($corectDate > 1 AND $corectDate < 5){
			$text = $corectDate.LIB_SISTEM_DAYS_AGO;
		}else{
			$text = $corectDate.LIB_SISTEM_A_DAYS_AGO;
		}
		$resultArray = [
			'title' => $dateTitle,
			'datediff' => $text,

		];

		return $resultArray;
	}

	//последняя карта на которой играл игрок
	public function lastMap($auth)
	{
		$params = [
			'auth' => $auth,
		];
		$result = $this->db->row('SELECT `map` FROM playertimes WHERE `auth` = :auth ORDER BY `date` DESC LIMIT 1', $params);
		if (!isset($result[0]['map'])) {
			$error = LIB_SISTEM_THERE_ARE_NO_RECORDS;
			return $error;
		}else {
			return $result[0]['map'];
		}
	}

	//получаем ник игрока
	public function userName($auth)
	{
		$params = [
			'auth' => $auth,
		];
		$result = $this->db->row("SELECT `name` FROM users WHERE `auth` = :auth", $params);

		return $result[0]['name'];
	}

	//высчитываем какой стиль чаще всего играется на карте
	public function popularStyle($map)
	{
		$user = new User;

		$params = [
			'map' => $map,
		];
		$result = $this->db->row("SELECT COUNT(style) AS count_style, style FROM playertimes WHERE map = :map GROUP BY style ORDER BY count_style DESC", $params);
		$max = max($result);

		return $max['style'];
	}

	//выводим топ игроков на карте по стилю на пути основа
	public function toprecbase($map, $style)
	{
		$params = [
			'map' => $map,
			'style' => $style,
		];
		$result = $this->db->row("SELECT * FROM playertimes WHERE `map` = :map AND `style` = :style AND `track` = 0 ORDER BY `time` DESC LIMIT 1", $params);

		return $result[0];
	}

	//выводим топ игроков на карте по стилю на пути бонус
	public function toprecbonus($map, $style)
	{
		$params = [
			'map' => $map,
			'style' => $style,
		];
		$result = $this->db->row("SELECT * FROM playertimes WHERE `map` = :map AND `style` = :style AND `track` not like '0' ORDER BY `time` DESC LIMIT 1", $params);

		return $result[0];
	}


	//приводим пройденное время в порядок
	function secToStr($secs)
	{
		$minutes = floor($secs / 60); // минуты
		$hours = floor($minutes / 60); // часы
		$minutes = $minutes - ($hours * 60); // оставшиеся минуты
		$sec = $secs - ((($hours * 60) + $minutes) * 60); //оставшиеся секунды

		if ($minutes == 0) {
			$text_min = NULL;
		}else{
			$text_min = $minutes.LIB_SISTEM_MINUTE;
		}

		if ($hours == 0) {
			$text_hour = NULL;
		}else{
			$text_sec = $hours.LIB_SISTEM_HOURS;
		}

		if ($sec == 0) {
			$text_sec = NULL;
		}else{
			$text_sec = $sec.LIB_SISTEM_SECOND;
		}
		
		if (empty($text_hour)) {
			$result = $text_min.''.$text_sec;
		}elseif(empty($text_hour) || empty($text_min)){
			$result = $text_sec;
		}else{
			$result = $text_hour.''.$text_min.''.$text_sec;
		}

		return $result;
	}

	//Получаем именна стилей
	public function style()
	{
		return $this->json['style'];
	}

	//Получаем именна путей проождения
	public function track($id)
	{
		if ($id == 0) {
			$track = LIB_SISTEM_TRACK_BASE;
		}else{
			$track = LIB_SISTEM_TRACK_BONUS;
		}

		return $track;
	}

	//статус стима игрока
	public function userStatus($key) {
		switch ($key) {
		    case '1':
		      echo '<p class="user-online"><i class="fas fa-battery-full"></i> '.LIB_SISTEM_STATUS_STEAM_ONLI.'</p>';
		      break;
		    case '3':
		      echo '<p class="user-away"><i class="fas fa-battery-half"></i> '.LIB_SISTEM_STATUS_STEAM_NOT_IN_PLACE.'</p>';
		      break;
		    default:
		      echo '<p class="user-offline"><i class="fas fa-battery-empty"></i> '.LIB_SISTEM_STATUS_STEAM_OFF.'</p>';
		      break;
		}
	}

	//Vac статус
	public function VacBanInfo ($key) {
		if ($key = true) {
			echo '<p class="vac-false"><i class="fas fa-thumbs-up"></i> '.LIB_SISTEM_STATUS_VAC_NO.'</p>';
		}else{
			echo '<p class="vac-true"><i class="fas fa-thumbs-down"></i> '.LIB_SISTEM_STATUS_VAC_YES.'</p>';
		}
	}
}

?>