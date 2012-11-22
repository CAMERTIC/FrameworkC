<?php
session_start();
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once '../config.php';
require_once '../lib/library.php';
require_once '../camertic/classes/bd.class.php';
require_once '../lib/classes/entity.class.php';
require_once '../lib/classes/premiumAutocar.class.php';
require_once '../lib/classes/mdr_flotte.class.php';
GLOBAL $app;
$C = new CamerticConfig;
$app = new premiumAutocar;
if(!$app->checkSession()) {
	header('location:login.php');
	die();
}
//var_dump($_GET);
$autocar = new mdr_flotte;
$res = $autocar->getFlotteAutocaristeLast();
echo '<div id="'.$res[0]->flotte_id.'" class="equipement" style="margin:10px 0;border:1px solid #ccc; padding-bottom:5px">';
echo '<img style="float:left;margin:5px" height="80" src="'.$res[0]->image.'" border="0" />';
		echo 'Marque : ' . $res[0]->marque . '<br />';
		echo 'Modele : ' . $res[0]->modele . '<br />';
		echo 'Quantite : ' . $res[0]->quantite . '<br />';
		echo 'Nombre de places : ' . $res[0]->places . '<br />';
		echo 'Equipement : ' . $res[0]->equipement . '<br />';
echo '</div>';
?>