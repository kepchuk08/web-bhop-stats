<?php

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\controllers;

use application\core\Controller;
use application\lib\Json;
use application\lib\Sistem;
use application\lib\LightOpenID;

class AdminController extends Controller
{

	public function __construct($route) 
	{
		parent::__construct($route);
		$this->view->layout = 'admin';
	}

	public function authAction()
	{
		if (isset($this->route)){ 
			try {
				$json = new Json;
				$result = $json->getJson();
				$openid = new LightOpenID($result['domainname']);
				
				if(!$openid->mode) {
	                    $openid->identity = 'https://steamcommunity.com/openid';
	                    header('Location: ' . $openid->authUrl());
	                } elseif ($openid->mode == 'cancel') {
	                    echo 'User ';
	                } else {
	                    if($openid->validate()) { 
	                        $id = $openid->identity;
	                        $ptn = "/^https?:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
	                        preg_match($ptn, $id, $matches);
	                        
	                        $steamid64 = $matches[1];
	                        if (!$this->model->steamValidate($steamid64)) {
	                        	$this->view->redirect('admin/login?steamauth=error');
							}
							$this->view->redirect('admin');
	                    }
	                }
			} catch(ErrorException $e) {
				echo $e->getMessage();
			}
		}
	}

	public function loginAction()
	{
		if (!empty($_POST)) {
			if (!$this->model->loginValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			$this->view->location('admin');
		}

		$this->view->render(TITLE_PAGE_ADMIN_AUTH);
	}

	public function logoutAction() 
	{
		unset($_SESSION['admin']['type']['login']);
		unset($_SESSION['admin']['type']['steam']);

		$this->view->redirect('admin/login');
	}

	public function indexAction()
	{
		if (!$this->model->check_session($_SESSION)) {
			$this->view->redirect('admin/login');
		}

		if (!empty($_POST)) {
			if (!empty($_POST['name-style'])) {
				if (!$this->model->editStyle($_POST)) {
					$this->view->message('error', $this->model->error);
				}
				$this->view->message('success', $this->model->success);
			}
			if (!empty($_POST['add-styleId'])) {
				if (!$this->model->addStyle($_POST)) {
					$this->view->message('error', $this->model->error);
				}
				$this->view->message('success', $this->model->success);
			}
		}	
		
		$vars = [
			'style' => $this->model->styleList(),
		];

		$this->view->render(TITLE_PAGE_ADMIN_STYLE, $vars);
	}

	public function databaseAction() 
	{
		if (!$this->model->check_session($_SESSION)) {
			$this->view->redirect('admin/login');
		}
		
		if (!empty($_POST)) {
			$this->model->clearDB();
			$this->view->message('success',$this->model->success);
		}

		$vars = [
			'db' => $this->model->getDB(),
			'size' => $this->model->DBsize(),
		];
		
		$this->view->render(TITLE_PAGE_ADMIN_DB, $vars);
	}

	public function adminsAction() 
	{
		if (!$this->model->check_session($_SESSION)) {
			$this->view->redirect('admin/login');
		}

		if (!empty($_POST)) {
			if (!empty($_POST['add'])) {
				if (!$this->model->addAdmin($_POST)) {
					$this->view->message('error', 'ошибка');
				}
				$this->view->message('success', $this->model->success);
			}
			if (!empty($_POST['edit'])) {
				if (!$this->model->editAdmin($_POST)) {
					$this->view->message('error', 'ошибка');
				}
				$this->view->message('success', $this->model->success);
			}
		}

		$vars = [
			'admins' => $this->model->getAdmins(),
		];
		
		$this->view->render(TITLE_PAGE_ADMIN_ADMINS, $vars);
	}

	public function deleteAction() 
	{
		if (!$this->model->check_session($_SESSION)) {
			$this->view->redirect('admin/login');
		}

		$this->model->deleteAdmin($this->route['adminid']);
		$this->view->redirect('admin/admins');
	}
}