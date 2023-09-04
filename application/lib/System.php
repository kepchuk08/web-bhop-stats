<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\lib;
use application\lib\Db;
use application\models\User;

class System 
{ 

	public $db;

	public function __construct()
	{
		$this->db = new Db;
	}

	public function get_month($i, $type = 1) {
		if($type == 1) {
			$months = [
				1  => LIB_SISTEM_TIME_JANUARY,
	            2  => LIB_SISTEM_TIME_FEBRUARY,
	            3  => LIB_SISTEM_TIME_MARCH,
	            4  => LIB_SISTEM_TIME_APRIL,
	            5  => LIB_SISTEM_TIME_MAY,
	            6  => LIB_SISTEM_TIME_JUNE,
	            7  => LIB_SISTEM_TIME_JULY,
	            8  => LIB_SISTEM_TIME_AUGUST,
	            9  => LIB_SISTEM_TIME_SEPTEMBER,
	            10 => LIB_SISTEM_TIME_OCTOBER,
	            11 => LIB_SISTEM_TIME_NEVEMBER,
	            12 => LIB_SISTEM_TIME_DECEMBER
	        ];
		} else {
			$months = [1 => '01', 2 => '02', 3 => '03', 4 => '04', 5 => '05', 6 => '06', 7 => '07', 8 => '08', 9 => '09', 10 => '10', 11 => '11', 12 => '12'];
		}
		return $months[$i];
	}

	public function expand_date($date, $type = 1) {
		$time = $date;
		$month = $this->get_month(date('n', $time), 1);
		$day = date('j', $time);
		$year = date('Y', $time);
		$hour = date('H', $time);
		$min = date('i', $time);

		if($type == 0) {
			return "$hour:$min";
		}
		if($type == 1) {
			return "$day $month $year г, $hour:$min";
		}
		if($type == 2) {
			return "$day $month $year г";
		}
		if($type == 3) {
			return "$day $month $year";
		}

		if($type == 4) {
			return "$day $month в $hour:$min";
		}

		$yesterday = strtotime('yesterday');

		if($type == 5) {
			$dif = time() - $time;
			if($dif < 59) {
				if($dif < 15) {
					return LIB_SISTEM_TIME_JUST;
				} else {
					return $dif . LIB_SISTEM_TIME_SEC_BACK;
				}
			} elseif($dif / 60 > 1 and $dif / 60 < 59) {
				return round($dif / 60) . LIB_SISTEM_TIME_MIN_AGO;
			} elseif($dif / 3600 > 1 and $dif / 3600 < 23) {
				return round($dif / 3600) . LIB_SISTEM_TIME_HPUR_AGO;
			} elseif($time > $yesterday && $time < ($yesterday + 24 * 3600)) {
				return LIB_SISTEM_TIME_YESTARDAY . "$hour:$min";
			} else {
				return "$day $month $year г, $hour:$min";
			}
		}

		return $date;
	}

	//последняя карта на которой играл игрок
	public function lastMap($auth)
	{
		$params = [
			'auth' => $auth,
		];
		$result = $this->db->row('SELECT `map` FROM `playertimes` WHERE `auth` = :auth ORDER BY `date` DESC LIMIT 1', $params);
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
		$result = $this->db->row("SELECT * FROM `web`");
		$style = $this->db->fromBase64($result[0]['style']);

		return $style;
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

	public function statusv34()
	{
		$config = require 'application/config/config.php';

		return $config['oldcss'];
	}
}

?>