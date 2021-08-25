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
	public function indexAction()
	{
		$mainModel = new Main;
		$SteamAPI = new SteamAPI($this->route['auth']);
		$sistem = new Sistem;

		$vars = [
			'data' => $this->model->getUser($this->route['auth']),
			'statisticServer' => $mainModel->statisticServer(),
			'steamapi' => $SteamAPI->GetPlayerInfo(),
			'steam'=> $SteamAPI,
			'vac'=> $SteamAPI->VacBan(),
			'userstatsmaps' => $this->model->statisticMaps($this->route['auth']),
			'styleRecord' => $this->model->styleRecord($this->route['auth']),
			'style' => $sistem->style(),
			'lastrecords' => $this->model->lastRecords($this->route['auth']),
			'nosteam' => $this->model->noSteam($this->route['auth']),
			'sistem' => $sistem,
			'test' => $SteamAPI->getSteam2RenderedID(),
		];
		
		$this->view->render('Пользователь',$vars);
	}

	public function allrecordsAction()
	{
		$mainModel = new Main;
		$sistem = new Sistem;
		$SteamAPI = new SteamAPI($this->route['auth']);

		$vars = [
			'nosteam' => $this->model->nosteam($this->route['auth']),
			'allrecords' => $this->model->allRecords($this->route['auth']),
			'statisticServer' => $mainModel->statisticServer(),
			'style' => $sistem->style(),
			'track' => $this->model->track(),
			'sistem' => $sistem,
			'steamapi' => $SteamAPI->GetPlayerInfo(),
			'steam'=> $SteamAPI,
			'vac'=> $SteamAPI->VacBan(),

		];

		$this->view->render('Все рекорды',$vars);
	}

	public function allstyleAction()
	{
		$mainModel = new Main;
		$sistem = new Sistem;
		$SteamAPI = new SteamAPI($this->route['auth']);
		
		$vars = [
			'nosteam' => $this->model->nosteam($this->route['auth']),
			'allrecords' => $this->model->allRecords($this->route['auth']),
			'statisticServer' => $mainModel->statisticServer(),
			'style' => $sistem->style(),
			'track' => $this->model->track(),
			'sistem' => $sistem,
			'steamapi' => $SteamAPI->GetPlayerInfo(),
			'steam'=> $SteamAPI,
			'vac'=> $SteamAPI->VacBan(),
		];

		$this->view->render('Все рекорды',$vars);
	}
}