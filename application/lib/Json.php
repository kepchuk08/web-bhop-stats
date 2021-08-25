<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\lib;

class Json
{
	protected $json;

	public function __construct()
	{
		$json = 'application/config/config.json';
		if (!file_exists($json)) {
			$this->json = false;
		}
		$data = file_get_contents($json);
		$this->json = json_decode($data, true);
	}

	public function getJson()
	{
		return $this->json;
	}
}
?>