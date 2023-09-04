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

        if (!empty($_POST['load_style'])) {
            $this->model->load_style();
        }

        if (!empty($_POST['add_style'])) {
            $this->model->addStyle($_POST);
        }

        if (!empty($_POST['delete_style'])) {
            $this->model->deleteStyle($_POST);
        }

        if (!empty($_POST['add_admin'])) {
             $this->model->addAdmin($_POST);
        }

        if (!empty($_POST['load_admin'])) {
            $this->model->load_admin();
        }

        if (!empty($_POST['edit_admin'])) {
            $this->model->edit_admin($_POST);
        }

        if (!empty($_POST['delete_admin'])) {
            $this->model->delete_admin($_POST);
        }

        if (!empty($_POST['load_allrecords'])) {
            $this->model->load_allrecords($_POST);
        }

        if (!empty($_POST['allrecords_search'])) {
            $this->model->allrecords_search($_POST);
        }

        if (!empty($_POST['delete_record'])) {
            $this->model->delete_record($_POST);
        }
        
        $this->view->render('AJAX');
    }
}