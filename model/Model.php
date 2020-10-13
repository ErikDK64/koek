<?php


namespace model;
use model\Koek;
include_once ('model/Koek.php');


class Model
{
    private $content;
    private $koek;

    public function __construct(){
        $this->content = "welkom bij de bakker";
        $this-> koek = new Koek('1', 'Bosche bol',15.0);
    }

    public function getKoek()
    {
        return $this->koek;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setKoek($id, $naam,$prijs)
    {
        $this->koek =new Koek($id, $naam, $prijs);
    }


}