<?php
namespace App\Controleur;

class Vue_imc
{
    public function afficherFormulaire($imc = null)
    {
        echo '<h2>IMC</h2>';
        echo '<form method="post" action="index.php?action=calculerIMC">
                Poids (kg): <input type="text" name="poids"><br>
                Taille (m): <input type="text" name="taille"><br>
                <input type="submit" value="Calculer IMC">
              </form>';
        if ($imc !== null) {
            $this->afficherResultat($imc);
        }
        echo '<br><br><button onclick="window.location.href=\'index.php\'">Accueil</button>';
    }

    public function afficherResultat($imc)
    {
        if ($imc < 18.5) {
            echo "Votre IMC est : " . $imc . " (Maigreur)";
        } elseif ($imc >= 18.5 && $imc < 25) {
            echo "Votre IMC est : " . $imc . " (Normal)";
        } elseif ($imc >= 25 && $imc < 30) {
            echo "Votre IMC est : " . $imc . " (Surpoids)";
        } elseif ($imc >= 30 && $imc < 40) {
            echo "Votre IMC est : " . $imc . " (Obésité Morbide)";
        } elseif ($imc >= 40 && $imc < 50) {
            echo "Votre IMC est : " . $imc . " (Obésité Sévère)";
        } else {
            echo "Votre IMC est : " . $imc . " (Obésité Sévère)";
        }
    }
}