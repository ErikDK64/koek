<?php

namespace model;
use model\model;
include_once('model/model.php');

class Koek
{
    private $id;
    private $naam;
    private $prijsPerKilo;

    public function __construct($id, $naam, $prijs)
    {
        $this->id = $id;
        $this->naam = $naam;
        $this->prijsPerKilo = $prijs;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    public function getNaam()
    {
        return $this->naam;
    }

    public function getPrijsPerKilo()
    {
        return $this->prijsPerKilo;
    }


    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    public function setPrijsPerKilo($prijsPerKilo)
    {
        $this->prijsPerKilo = $prijsPerKilo;
    }

    public function setId($id)
    {
        $this->id = $id;
    }




}