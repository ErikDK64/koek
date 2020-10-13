<?php

namespace view;
use model\model;

class View
{
    private $model;
    private $content;

    public function __construct(Model $model){
        $this->model = $model;
        $this->content = 'Koekjes';
        echo '<h2>' .$this->content. '<h2>';
    }

    public function viewContent(){
        $this->content = $this->model->getContent();
        $koek = $this->model->getKoek();

        echo "<br>Artikel is :  ", $koek->getNaam();
        echo "<br>prijs per kilo is : $euro:  ", $koek->getPrijsperKilo();
    }

}