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
            $this->view->messageInstall('install', VI_INSTALL_SUCCESS_TITLE,VI_INSTALL_SUCCESS_CONTENT,VI_INSTALL_SUCCESS_SYBMIT_SITE,VI_INSTALL_SUCCESS_SYBMIT_ADMIN_PANEL);
        }   
        
        $this->view->render(VI_INSTALL_HEAD_TITLE.' Bhop Stats');
    }
}