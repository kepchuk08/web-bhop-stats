<?php

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\controllers;

use application\core\Controller;
use application\lib\Sistem;
use application\lib\Pagination;
use application\lib\SxGeo;
use application\models\User;

class MainController extends Controller
{
	public function indexAction(){
		$id = 1;
		if (!isset($this->route['page'])) {
			$page = 1;
		}else {
			$page = $this->route['page'] + 9;
		}
		$position = $id * $page;
		$SxGeo = new SxGeo('application/lib/SxGeo.dat', SXGEO_BATCH | SXGEO_MEMORY); 
		$sistem = new Sistem;

		$pagination = new Pagination($this->route, $this->model->userCount());
		$vars = [
			'users' => $this->model->getUsers($this->route),
			'id' => $position,
			'statisticServer' => $this->model->statisticServer(),
			'sistem' => $sistem,
			'pagination' => $pagination->get(),
			'sxgeo' => $SxGeo,
		];
		
		$this->view->render('главная страница', $vars);
	}

	public function lastrocordsAction(){
		$sistem = new Sistem;
		$User = new User;
		$vars = [
			'statisticServer' => $this->model->statisticServer(),
			'sistem' => $sistem,
			'lastrecords' => $this->model->lastrecords(),
			'style' => $User->style(),
			'track' => $User->track(),
		];

		$this->view->render('Поиск',$vars);


	}
}