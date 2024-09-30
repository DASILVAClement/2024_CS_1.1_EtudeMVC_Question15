<?php

require_once 'src/Controleur/imcControleur.php';
require_once 'src/Vue/Vue_imc.php';
require_once 'src/Controleur/distanceOrageControleur.php';
require_once 'src/Vue/Vue_distance_orage.php';

$action = $_GET['action'] ?? null;

switch ($action) {
    case 'calculerIMC':
        $poids = $_POST['poids'];
        $taille = $_POST['taille'];
        $controleur = new imcControleur();
        $imc = $controleur->calculerIMC($poids, $taille);
        $vue = new Vue_imc();
        $vue->afficherFormulaire($imc);
        break;

    case 'calculerDistanceOrage':
        $temps = $_POST['temps'];
        $controleur = new distanceOrageControleur();
        $distance = $controleur->calculerDistance($temps);
        $vue = new Vue_distance_orage();
        $vue->afficherFormulaire($distance);
        break;

    default:
        echo '<h1>Bienvenue</h1>';
        echo '<p>Veuillez choisir une option :</p>';
        echo '<button style="display:block; margin-bottom:10px;" onclick="window.location.href=\'index.php?action=afficherFormulaireIMC\'">Calculer IMC</button>';
        echo '<button style="display:block;" onclick="window.location.href=\'index.php?action=afficherFormulaireDistanceOrage\'">Calculer Distance Orage</button>';
        break;

    case 'afficherFormulaireIMC':
        $vueIMC = new Vue_imc();
        $vueIMC->afficherFormulaire();
        break;

    case 'afficherFormulaireDistanceOrage':
        $vueDistanceOrage = new Vue_distance_orage();
        $vueDistanceOrage->afficherFormulaire();
        break;
}