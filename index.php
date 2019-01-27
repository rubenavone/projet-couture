<?php 
/* if(isset($_GET['title'])){
    $titre = $_GET['title'];
    echo 'titre'.$titre;
} */

$location = $_GET['loc']; // Définis notre emplacement de page 

$searchTitle = $_GET['loc']; // definis le titre H1 a gauche de la barre de recherche 

$title = $_GET['loc']; // definis le titre globale de nos pages

//$titleLevel = $_GET['loc']; // definis dans la page tuto niveau , le titre du menu 

switch($location){
    case 'home': 
         $content = 'home.php';
         $title = 'Acceuil';
        break;
    case 'creation':
        $content = 'creation.php';
        $title = 'Création';
        break;
    case 'tuto-niveau':
        $content = 'tuto-niveau.php';
        $title = 'Tutoriel par niveau';
        break;
    case 'tuto-type':
        $content = 'tuto-type.php';
        $title = 'tutoriel par genre';
        break;
    default :
        $content = '404.php';
        $title = '404 la page n\'est pas trouvé';
        break;
    }
   include 'template.php';



?>