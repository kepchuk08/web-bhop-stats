<?php

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\controllers;

use application\core\Controller;
use application\models\Main;
use application\models\User;
use application\lib\Sistem;

class MapsController extends Controller
{
	public function indexAction(){
		$mainModel = new Main;
		$sistem = new Sistem;
		$vars = [
			'statisticServer' => $mainModel->statisticServer(),
			'maps' => $this->model->getMaps(),
			'sistem' => $sistem,
		];

		$this->view->render('Карты',$vars);
	}

	public function mapinfoAction(){
		$mainModel = new Main;
		$userModel = new User;
		$Sistem = new Sistem;

		$vars = [
			'mapname' => $this->route['map'],
			'statisticServer' => $mainModel->statisticServer(),
			'mapinfo' => $this->model->mapinfo($this->route['map']),
			'stylemapbase' => $this->model->stylemapbase($this->route['map']),
			'stylemapbonus' => $this->model->stylemapbonus($this->route['map']),
			'style' => $userModel->style(),
			'sistem' => $Sistem,
			'lastRecordsMap' => $this->model->lastRecordsMap($this->route['map']),
		];

		$this->view->render('Карта',$vars);
	}

	public function allracordsAction(){
		$mainModel = new Main;
		$userModel = new User;
		$Sistem = new Sistem;
		$vars = [
			'mapname' => $this->route['map'],
			'statisticServer' => $mainModel->statisticServer(),
			'mapinfo' => $this->model->mapinfo($this->route['map']),
			'style' => $userModel->style(),
			'track' => $userModel->track(),
			'sistem' => $Sistem,
			'records' => $this->model->allrecords($this->route['map']),
		];
		
		$this->view->render('Все рекорды',$vars);
	}
}