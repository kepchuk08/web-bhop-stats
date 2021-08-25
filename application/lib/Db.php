<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\lib;
use PDO;
use application\lib\Json;

class Db
{
	
	protected $db;

	public function __construct()
	{
		$json = new Json;
		$result = $json->getJson();
		$this->db = new PDO('mysql:host='.$result['db'][0]['host'].';dbname='.$result['db'][0]['dbname'].'', $result['db'][0]['user'], $result['db'][0]['password']);
	}

	public function query($sql, $params = [])
	{
		$stmt = $this->db->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				if (is_int($val)) {
					$type = PDO::PARAM_INT;
				} else {
					$type = PDO::PARAM_STR;
				}
				$stmt->bindValue(':'.$key, $val, $type);
			}
		}
		$stmt->execute();

		return $stmt;
	}

	/**
	 * Возвращаем список столбцов
	 */
	public function row($sql, $params = [])
	{
		$result = $this->query($sql, $params);

		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	/**
	 * Возвращаем столбец
	 */
	public function column($sql, $params = [])
	{
		$result = $this->query($sql, $params);
		
		return $result->fetchColumn();
	}
}