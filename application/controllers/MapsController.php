<?php

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\controllers;

use application\core\Controller;
use application\models\Main;
use application\models\User;
<<<<<<< Updated upstream
=======
use application\models\Admin;
>>>>>>> Stashed changes
use application\lib\Sistem;

class MapsController extends Controller
{
<<<<<<< Updated upstream
	public function indexAction(){
		$mainModel = new Main;
		$sistem = new Sistem;
=======
	public function indexAction()
	{
		$mainModel = new Main;
		$sistem = new Sistem;

>>>>>>> Stashed changes
		$vars = [
			'statisticServer' => $mainModel->statisticServer(),
			'maps' => $this->model->getMaps(),
			'sistem' => $sistem,
<<<<<<< Updated upstream
=======
			'style' => $sistem->style(),
>>>>>>> Stashed changes
		];

		$this->view->render('Карты',$vars);
	}

<<<<<<< Updated upstream
	public function mapinfoAction(){
		$mainModel = new Main;
		$userModel = new User;
		$Sistem = new Sistem;
=======
	public function mapinfoAction()
	{
		$mainModel = new Main;
		$userModel = new User;
		$sistem = new Sistem;
>>>>>>> Stashed changes

		$vars = [
			'mapname' => $this->route['map'],
			'statisticServer' => $mainModel->statisticServer(),
			'mapinfo' => $this->model->mapinfo($this->route['map']),
			'stylemapbase' => $this->model->stylemapbase($this->route['map']),
			'stylemapbonus' => $this->model->stylemapbonus($this->route['map']),
<<<<<<< Updated upstream
			'style' => $userModel->style(),
			'sistem' => $Sistem,
=======
			'style' => $sistem->style(),
			'sistem' => $sistem,
>>>>>>> Stashed changes
			'lastRecordsMap' => $this->model->lastRecordsMap($this->route['map']),
		];

		$this->view->render('Карта',$vars);
	}

<<<<<<< Updated upstream
	public function allracordsAction(){
		$mainModel = new Main;
		$userModel = new User;
		$Sistem = new Sistem;
=======
	public function allracordsAction()
	{
		$mainModel = new Main;
		$userModel = new User;
		$adminModel = new Admin;
		$sistem = new Sistem;

		$map = $this->route['map'];

>>>>>>> Stashed changes
		$vars = [
			'mapname' => $this->route['map'],
			'statisticServer' => $mainModel->statisticServer(),
			'mapinfo' => $this->model->mapinfo($this->route['map']),
<<<<<<< Updated upstream
			'style' => $userModel->style(),
			'track' => $userModel->track(),
			'sistem' => $Sistem,
			'records' => $this->model->allrecords($this->route['map']),
		];
		
=======
			'style' => $sistem->style(),
			'track' => $userModel->track(),
			'sistem' => $sistem,
			'flstyle' => $adminModel->styleList(),
		];

		if (!empty($_POST)) {
			if (!$this->model->mapValidate($_POST,$map)) {
	        	$this->view->message('error', $this->model->error);
			}
			$url = 'maps/'.$this->route['map'].'/allrecords&style='.$_POST['style'].'&track='.$_POST['track'];
			$this->view->location($url);
		}

		if (!empty($this->route['style'])) {
			$vars['records'] = $this->model->allrecordsfilter($this->route['map'], $this->route['style'], $this->route['track']);
		}else{
			$vars['records'] = $this->model->allrecords($this->route['map']);
		}

>>>>>>> Stashed changes
		$this->view->render('Все рекорды',$vars);
	}
}