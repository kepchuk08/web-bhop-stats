<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\core;

use application\lib\Db;

abstract class Model
{

	public $db;

	public function __construct(){
		$this->db = new Db;
	}
}