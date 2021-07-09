<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\lib;
use application\lib\Db;
use application\models\User;

class Sistem
{ 

	public $db;

	public function __construct(){
		$this->db = new Db;
	}

	//делаем датам читаемый вид
	public function corectDate($date) {
		$corectDate = date('d.n.y, H:i', $date);

		return $corectDate;
	}

	//последняя карта на которой играл игрок
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

	//получаем ник игрока
	public function userName($auth){
		$params = [
			'auth' => $auth,
		];
		$result = $this->db->row("SELECT `name` FROM users WHERE `auth` = :auth", $params);

		return $result[0]['name'];
	}

	//высчитываем какой стиль чаще всего играется на карте
	public function popularStyle($map){
		$user = new User;
		$style = $user->style();
		$params = [
			'map' => $map,
		];
		$result = $this->db->row("SELECT COUNT(style) AS count_style, style FROM playertimes WHERE map = :map GROUP BY style ORDER BY count_style DESC", $params);
		$max = max($result);

		return $style[$max['style']];
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
		$result = $this->db->row("SELECT * FROM playertimes WHERE `map` = :map AND `style` = :style AND `track` = 1 ORDER BY `time` DESC LIMIT 1", $params);

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
			$text_min = $minutes.' мин.  ';
		}

		if ($hours == 0) {
			$text_hour = NULL;
		}else{
			$text_sec = $hours.' час.  ';
		}

		if ($sec == 0) {
			$text_sec = NULL;
		}else{
			$text_sec = $sec.' сек.  ';
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
}
?>