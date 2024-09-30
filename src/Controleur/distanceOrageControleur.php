<?php
namespace App\Controleur;

class distanceOrageControleur
{
    public function calculerDistance($temps)
    {
        $vitesseSon = 343; // Vitesse du son en m/s
        $distance = $temps * $vitesseSon;
        return $distance;
    }
}