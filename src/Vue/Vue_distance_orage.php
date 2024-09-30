<?php
namespace App\Vue;

class Vue_distance_orage
{
    public function afficherFormulaire($distance = null)
    {
        echo '<h2>Distance Orage</h2>';
        echo '<form method="post" action="index.php?action=calculerDistanceOrage">
                Temps (secondes): <input type="text" name="temps"><br>
                <input type="submit" value="Calculer Distance">
              </form>';
        if ($distance !== null) {
            $this->afficherResultat($distance);
        }
        echo '<br><br><button onclick="window.location.href=\'index.php\'">Accueil</button>';
    }

    public function afficherResultat($distance)
    {
        echo "La distance de l'orage est de : " . $distance . " mètres";
    }
}