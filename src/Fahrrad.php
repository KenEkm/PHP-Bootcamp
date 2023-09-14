<?php

class Fahrrad implements DriveInterface
{
    public function fahre($ziel)
    {
        return "Ich bin ein Fahrrad und fahre zum Ziel: {$ziel}";
    }
}