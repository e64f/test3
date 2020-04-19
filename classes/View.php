<?php
class View
{
    private $smarty;
	//public $template_view; // здесь можно указать общий вид по умолчанию.

    function __construct() {
        require_once('lib/smarty/libs/Smarty.class.php');

        $this->smarty = new Smarty();
        $this->smarty->template_dir = 'templates/';
        $this->smarty->compile_dir = 'lib/smarty/templates_c/';
        $this->smarty->config_dir = 'lib/smarty/configs/';
        $this->smarty->cache_dir = 'lib/smarty/cache/';

        $this->smarty->debugging = true;
    }

    public function generateHtml($content = null)
    {
        $this->smarty->assign('session', $_SESSION);
        $this->smarty->assign('mod', $_REQUEST['mod']);
        $this->smarty->assign('content', $content);
        echo $this->smarty->fetch('index.tpl');
    }
	
	public function generateTasks($tasks = null, $nav)
	{
        $this->smarty->assign('tasks', $tasks);
        $this->smarty->assign('nav', $nav);
        if (isset($_REQUEST['mess'])) $this->smarty->assign('mess', $_REQUEST['mess']);
        $this->smarty->assign('auth', $_SESSION['auth']);
        $content = $this->smarty->fetch("tasks.tpl");
        return $this->generateHtml($content);

	}

    public function generateAddTaskForm($data = '', $errorsText = '')
    {
        $this->smarty->assign('data', $data);
        $this->smarty->assign('errorsText', $errorsText);

        $content = $this->smarty->fetch("add-task-form.tpl");
        return $this->generateHtml($content);

    }

    public function generateEditTaskForm($task) {
        $this->smarty->assign('task', $task);

        $content = $this->smarty->fetch("edit-task-form.tpl");
        return $this->generateHtml($content);
    }

    public function generateAuthForm() {
        $content = $this->smarty->fetch("auth-form.tpl");
        return $this->generateHtml($content);
    }

    public function generateNeedAuth() {
        $content = $this->smarty->fetch("need-auth.tpl");
        return $this->generateHtml($content);
    }



    public function generate404() {
        $content = $this->smarty->fetch("404.tpl");
        return $this->generateHtml($content);
    }
}