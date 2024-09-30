<?php

class imcControleur
{
    public function calculerIMC($poids, $taille)
    {
        if ($taille > 0) {
            $imc = $poids / ($taille * $taille);
            return $imc;
        } else {
            throw new Exception("La taille doit être supérieure à zéro.");
        }
    }
}