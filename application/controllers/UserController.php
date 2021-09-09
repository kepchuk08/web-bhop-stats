<?php

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\controllers;

use application\core\Controller;
use application\models\Main;
use application\lib\SteamAPI;
use application\lib\Sistem;
use application\lib\Json;

class UserController extends Controller
{
	public function indexAction()
	{

		$mainModel = new Main;
		$json = new Json;
		$sistem = new Sistem;

		$result = $json->getJson();

		$vars = [
			'data' => $this->model->getUser($this->route['auth']),
			'statisticServer' => $mainModel->statisticServer(),
			'userstatsmaps' => $this->model->statisticMaps($this->route['auth']),
			'styleRecord' => $this->model->styleRecord($this->route['auth']),
			'style' => $sistem->style(),
			'lastrecords' => $this->model->lastRecords($this->route['auth']),
			'sistem' => $sistem,
		];

		if (empty($result['oldcss'])) {
			$SteamAPI = new SteamAPI($this->route['auth']);
			$vars['steamapi'] = $SteamAPI->GetPlayerInfo();
			$vars['vac'] = $SteamAPI->VacBan();
			$name = $SteamAPI->GetPlayerInfo();
			if (empty($name['personaname'])) {
				$this->view->render(TITLE_PAGE_PLAYER.$this->model->noSteam($this->route['auth']),$vars);
			}else{
				$this->view->render(TITLE_PAGE_PLAYER.$name['personaname'],$vars);
			}
		}else{
			$vars['nosteam'] = $this->model->noSteam($this->route['auth']);
			$this->view->render(TITLE_PAGE_PLAYER.$this->model->noSteam($this->route['auth']),$vars);
		}

	}

	public function allrecordsAction()
	{
		$mainModel = new Main;
		$json = new Json;
		$sistem = new Sistem;

		$result = $json->getJson();

		$vars = [
			'nosteam' => $this->model->nosteam($this->route['auth']),
			'allrecords' => $this->model->allRecords($this->route['auth']),
			'statisticServer' => $mainModel->statisticServer(),
			'sistem' => $sistem,
		];

		if (empty($result['oldcss'])) {
			$SteamAPI = new SteamAPI($this->route['auth']);
			$vars['steamapi'] = $SteamAPI->GetPlayerInfo();
			$vars['vac'] = $SteamAPI->VacBan();
			$name = $SteamAPI->GetPlayerInfo();
			if (empty($name['personaname'])) {
				$this->view->render(TITLE_PAGE_PLAYER.$this->model->noSteam($this->route['auth']),$vars);
			}else{
				$this->view->render(TITLE_PAGE_PLAYER.$name['personaname'],$vars);
			}
		}else{
			$vars['nosteam'] = $this->model->noSteam($this->route['auth']);
			$this->view->render(TITLE_PAGE_PLAYER.$this->model->noSteam($this->route['auth']),$vars);
		}
	}

	public function allstyleAction()
	{
		$mainModel = new Main;
		$json = new Json;
		$sistem = new Sistem;

		$result = $json->getJson();

		$vars = [
			'nosteam' => $this->model->nosteam($this->route['auth']),
			'allrecords' => $this->model->allRecords($this->route['auth']),
			'statisticServer' => $mainModel->statisticServer(),
			'sistem' => $sistem,
		];

		if (empty($sistem->style()[$this->route['style']])) {
			$title = 'error style';
		}else{
			$title = $sistem->style()[$this->route['style']]['name'];
		}

		if (empty($result['oldcss'])) {
			$SteamAPI = new SteamAPI($this->route['auth']);
			$vars['steamapi'] = $SteamAPI->GetPlayerInfo();
			$vars['vac'] = $SteamAPI->VacBan();
			$name = $SteamAPI->GetPlayerInfo();
			if (empty($name['personaname'])) {
				$this->view->render(TITLE_PAGE_PLAYER.$this->model->noSteam($this->route['auth']),$vars);
			}else{
				$this->view->render(TITLE_PAGE_PLAYER.$name['personaname'],$vars);
			}
		}else{
			$vars['nosteam'] = $this->model->noSteam($this->route['auth']);
			$this->view->render(TITLE_PAGE_PLAYER.$this->model->noSteam($this->route['auth']),$vars);
		}
	}
}