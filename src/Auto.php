<?php

class Auto implements DriveInterface
{
    protected $ps; //protected damit andere Klassen darauf zugreifen können

    public function __construct($ps)
    {
        $this->ps = $ps;
    }

    public function fahre($ziel)
    {
        return "Ich habe {$this->ps}PS. Und fahre zum Ziel: {$ziel}";
    }

    public function getPs()
    {
        return $this->ps;
    }

    public function setPs($ps)
    {
        $this->ps = $ps;
    }
}

//Achtung ohne php schließtag!