<?php

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\lib\SxGeo;
use application\lib\SteamAPI;
use application\models\User;
use application\lib\System;

class MainController extends Controller
{
	public function indexAction()
	{
		if (!empty($_POST)) {
			$url = 'search/'.$_POST['name'];
			$this->view->location($url);
		}
		$id = 1;
		if (!isset($this->route['page'])) {
			$page = 1;
		}else {
			$page = $this->route['page'] + 9;
		}
		$position = $id * $page;

		$SxGeo = new SxGeo('application/lib/SxGeo.dat', SXGEO_BATCH | SXGEO_MEMORY); 
		$system = new System;

		$pagination = new Pagination($this->route, $this->model->userCount());
		$vars = [
			'users' => $this->model->getUsers($this->route),
			'id' => $position,
			'statisticServer' => $this->model->statisticServer(),
			'system' => $system,
			'pagination' => $pagination->get(),
			'sxgeo' => $SxGeo,
		];
		
		$this->view->render(TITLE_PAGE_HAME, $vars);
	}

	public function lastrocordsAction()
	{
		$system = new System;
		$User = new User;

		$vars = [
			'statisticServer' => $this->model->statisticServer(),
			'system' => $system,
			'lastrecords' => $this->model->lastrecords(),
			'style' => $system->style(),
		];

		$this->view->render(LASTRECORDS,$vars);
	}

	public function searchAction()
	{
		$SxGeo = new SxGeo('application/lib/SxGeo.dat', SXGEO_BATCH | SXGEO_MEMORY); 
		$system = new System;
		
		$search = $this->route['value'];

		$vars = [
			'search' => rawurldecode($search),
			'user' => $this->model->search(rawurldecode($search)),
			'system' => $system,
			'statisticServer' => $this->model->statisticServer(),
			'sxgeo' => $SxGeo,
		];

		$this->view->render(TITLE_PAGE_SEARCH_PLAYERS,$vars);
	}
}