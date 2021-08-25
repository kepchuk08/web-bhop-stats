<?php

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\controllers;

use application\core\Controller;

class InstallController extends Controller
{
    public function __construct($route) 
    {
        parent::__construct($route);
        $this->view->layout = 'install';
    }

    public function indexAction()
    {
        if (file_exists('application/config/config.json')){
            $this->view->redirect('');
        }
        
        if (!empty($_POST)) {
            if (!$this->model->installForm($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            $this->view->message('install', $this->model->success);
        }   
        
        $this->view->render('Установка Bhop Stats');
    }
}