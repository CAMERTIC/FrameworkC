<?php
// inclusion du fichier de configuration
require_once 'config.php';

$C = new CamerticConfig;

//creer la table entite du fichier sql avant de mettre cette ligne
// ensuite creer la classe dans le dossier lib/classes au format nom.class.php
$entite = new entite;

// obtenir tous les champs de la table
$champs = $entite->getAllFields();

// Affiche tous les champs de ma table
echo '<pre>';
print_r($champs);
echo '</pre>';

// fait une insertion
$record = array('nom' => 'Patient',
				'prenom' => 'Test',
				'numero' => '99124243',
				);
$entite->saveRecord($record);

// fait un update ///// Ne marche que s'il y a un enregistrement de cet identifiant, dans mon cas mon identifiant c id
/*$record = array('nom' => 'Patient',
				'prenom' => 'Test',
				'numero' => '99124243',
				'id' => '1', // ajout de lidentifiant dans les variables
				);*/
//$entite->saveRecord($record);

// effacer un enregistrement avec la valeur de l'identifiant de la table

// $entite->delRecord(1);

?>