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

class UserController extends Controller
{
	public function indexAction(){
		$mainModel = new Main;
		$SteamAPI = new SteamAPI;
		$sistem = new Sistem;
		$vars = [
			'data' => $this->model->getUser($this->route['auth']),
			'statisticServer' => $mainModel->statisticServer(),
			'steamapi' => $SteamAPI->GetPlayerInfo($this->route['auth']),
			'steam'=> $SteamAPI,
			'vac'=> $SteamAPI->VacBan($this->route['auth']),
			'userstatsmaps' => $this->model->statisticMaps($this->route['auth']),
			'styleRecord' => $this->model->styleRecord($this->route['auth']),
			'style' => $this->model->style(),
			'lastrecords' => $this->model->lastRecords($this->route['auth']),
			'nosteam' => $this->model->noSteam($this->route['auth']),
			'sistem' => $sistem,
		];
		
		$this->view->render('Пользователь',$vars);
	}

	public function allrecordsAction(){
		$mainModel = new Main;
		$sistem = new Sistem;
		$SteamAPI = new SteamAPI;
		$vars = [
			'nosteam' => $this->model->nosteam($this->route['auth']),
			'allrecords' => $this->model->allRecords($this->route['auth']),
			'statisticServer' => $mainModel->statisticServer(),
			'style' => $this->model->style(),
			'track' => $this->model->track(),
			'sistem' => $sistem,
			'steamapi' => $SteamAPI->GetPlayerInfo($this->route['auth']),
			'steam'=> $SteamAPI,
			'vac'=> $SteamAPI->VacBan($this->route['auth']),

		];

		$this->view->render('Все рекорды',$vars);
	}

	public function allstyleAction(){
		$mainModel = new Main;
		$sistem = new Sistem;
		$SteamAPI = new SteamAPI;
		$vars = [
			'nosteam' => $this->model->nosteam($this->route['auth']),
			'allrecords' => $this->model->allRecords($this->route['auth']),
			'statisticServer' => $mainModel->statisticServer(),
			'style' => $this->model->style(),
			'track' => $this->model->track(),
			'sistem' => $sistem,
			'steamapi' => $SteamAPI->GetPlayerInfo($this->route['auth']),
			'steam'=> $SteamAPI,
			'vac'=> $SteamAPI->VacBan($this->route['auth']),

		];

		$this->view->render('Все рекорды',$vars);
	}
}