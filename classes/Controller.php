<?php
class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->model = new Model();
        $this->view = new View();
	}
	
	public function actionTasks() {
	    if ( isset($_REQUEST['page']) ) {
            $currentPage = $_REQUEST['page'];
        } else {
            $currentPage = 1;
        }

        if (
            isset($_REQUEST['by']) and
            in_array($_REQUEST['by'], array('user', 'email', 'isdone')) and
            isset($_REQUEST['order']) and
            in_array($_REQUEST['order'], array('asc', 'desc'))
        ) {
            $nav['order'] = '&by='.$_REQUEST['by'].'&order='.$_REQUEST['order'];
            $sort['by'] = $_REQUEST['by'];
            $sort['order'] = $_REQUEST['order'];

        } else {
            $nav['order'] = '';
            $sort['by'] = 'id';
            $sort['order'] = 'asc';
        }

        $data = $this->model->getData($currentPage, $sort);
        $nav['currentPage'] = $currentPage;
        $nav['total'] = $data['total'];
        $nav['maxPages'] = ceil($nav['total'] / 3);


        $mod = $this->view->generateTasks($data['tasks'], $nav);
        echo $mod;
	}

    public function actionAuth() {
	    $mess = "";
	    if ( isset($_REQUEST['login']) and isset($_REQUEST['passw']) ) {
            if ( $this->model->config['login'] == $_REQUEST['login'] and $this->model->config['passw'] == $_REQUEST['passw']) {
                $_SESSION['auth'] = 1;
                header("Location: /");
            }
            else
            {
                $mess = "Auth error.";

            }
        }

        $this->view->generateAuthForm($mess);
    }

    public function actionExit() {
        $_SESSION['auth'] = 0;
        header("Location: /");
    }

    public function actionFaddTask() {
        $this->view->generateAddTaskForm();
    }

    public function actionAddTask() {
	    $errorsText = $this->checkAddTask();
	    if ( $errorsText == '' ) {
            $this->model->saveTask($_REQUEST);
            header("Location: /index.php?mess=save");
        }
	    else
        {
            $data = $_REQUEST;
            $this->view->generateAddTaskForm($data, $errorsText);
        }

    }

    private function checkAddTask() {
        $errorsText = '';

        if ( !filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL) ) {
            $errorsText .= "Bad email. <br>";
        }
        if ( strlen($_REQUEST['user']) <= 3 ) {
            $errorsText .= "Bad user, it must be more 3 symbols. <br>";
        }
        if ( strlen($_REQUEST['task']) <= 3 ) {
            $errorsText .= "Bad task, it must be more 3 symbols. <br>";
        }
        return $errorsText;
    }

    public function actionFeditTask() {
        if ($_SESSION['auth'] == 1) {
            $task = $this->model->getTask($_REQUEST['id']);
            $this->view->generateEditTaskForm($task[0]);
        } else {
            $this->view->generateNeedAuth();
        }

    }

    public function actionEditTask() {
	    if ($_SESSION['auth'] == 1) {
            $this->model->updateTask($_REQUEST);
            header("Location: /index.php?mess=save");
        } else {
            $this->view->generateNeedAuth();
        }
    }


    public function action404() {
        $this->view->generate404();
    }

}