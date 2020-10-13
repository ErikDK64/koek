<?php


use model\Model;
include_once("model/Model.php");
use view\View;
include_once ("view/View.php");
use controller\Controller;
include_once ("controller/Controller.php");


$controller = new Controller();
$controller->unpdateView();

$controller->updateModel(2,"kletskoek",15);
$controller->unpdateView();

$controller->updateModel(3,mariakoekje,16);
$controller->unpdateView();

?>