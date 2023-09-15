<?php

class SportWagen extends Auto
{
    public function __construct($ps)
    {
        parent::__construct($ps + 500); //überschreibt parent constuctor
    }
}

//Achtung ohne php schließtag!