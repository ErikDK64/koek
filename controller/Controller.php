<?php

namespace controller;
use model\model;
include_once ('model/model.php');
use view\view;
include_once ('view/view.php');

class Controller
{

    private $model;
    private $view;

    public function __construct()
    {

        $this->model= new model();
        $this->view = new view($this->model);
    }

    /**
     * @param model $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    public function updateModel($id, $naam, $prijs){
        $this->model->setKoek($id, $naam, $prijs);

    }

    public function unpdateView(){
        $this->view->viewContent();
    }

}