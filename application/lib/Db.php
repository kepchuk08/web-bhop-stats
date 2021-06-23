<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\lib;
use PDO;

class Db
{
	
	protected $db;


	public function __construct()
	{
		$result = require 'application/config/db.php';
		$this->db = new PDO('mysql:host='.$result['host'].';dbname='.$result['dbname'].'', $result['user'], $result['password']);

	}




	public function query($sql, $params = []){
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
	public function row($sql, $params = []){
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	/**
	 * Возвращаем столбец
	 */
	public function column($sql, $params = []){
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
	}

	



}