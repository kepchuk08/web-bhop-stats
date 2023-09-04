<?php

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\controllers;

use application\core\Controller;
use application\models\Main;
use application\lib\SteamAPI;
use application\lib\System;

class UserController extends Controller
{
	public function indexAction()
	{

		$mainModel = new Main;
		$system = new System;

		$vars = [
			'data' => $this->model->getUser($this->route['auth']),
			'statisticServer' => $mainModel->statisticServer(),
			'userstatsmaps' => $this->model->statisticMaps($this->route['auth']),
			'styleRecord' => $this->model->styleRecord($this->route['auth']),
			'style' => $system->style(),
			'lastrecords' => $this->model->lastRecords($this->route['auth']),
			'system' => $system,
		];

		if ($system->statusv34() == 0) {
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
		$system = new System;

		$vars = [
			'nosteam' => $this->model->nosteam($this->route['auth']),
			'allrecords' => $this->model->allRecords($this->route['auth']),
			'statisticServer' => $mainModel->statisticServer(),
			'system' => $system,
		];

		if ($system->statusv34() == 0) {
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
		$system = new System;

		$vars = [
			'nosteam' => $this->model->nosteam($this->route['auth']),
			'allrecords' => $this->model->allRecords($this->route['auth']),
			'statisticServer' => $mainModel->statisticServer(),
			'system' => $system,
		];

		$style = $system->style();

		if (empty($style[$this->route['style']])) {
			$title = 'error style';
		}else{
			$title = $style[$this->route['style']];
		}

		if ($system->statusv34() == 0) {
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