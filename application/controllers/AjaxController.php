<?php

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\controllers;

use application\core\Controller;

class AjaxController extends Controller
{
    public function ajaxAction()
    {
        if (!empty($_POST['selectlang'])) {
            $this->model->selectlang($_POST);
        } 
        
        $this->view->render('AJAX');
    }
}