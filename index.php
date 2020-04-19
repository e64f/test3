<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("classes/View.php");
include_once("classes/Model.php");
include_once("classes/Controller.php");

if (!isset($_SESSION['auth'])) $_SESSION['auth'] = 0;
if (!isset($_REQUEST['mod'])) $_REQUEST['mod'] = 'main';

$controller = new Controller();

switch ($_REQUEST['mod']) {
    case 'main':
        $controller->actionTasks();
        break;
    case 'auth':
        $controller->actionAuth();
        break;
    case 'fadd-task':
        $controller->actionFaddTask();
        break;
    case 'add-task':
        $controller->actionAddTask();
        break;
    case 'fedit-task':
        $controller->actionFeditTask();
        break;
    case 'edit-task':
        $controller->actionEditTask();
        break;
    default:
        $controller->action404();
        break;

}






?>