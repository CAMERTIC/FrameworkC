<?php
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'config.php';
GLOBAL $app;
$C = new CamerticConfig;
$app = new premiumAutocar;
if(!$app->checkSession()) {
	header('location:login.php');
	die();
}
$autocar = new mdr;
$autocariste = $autocar->getRecord($_SESSION['fiche_id']);
var_dump($autocariste);die;
?>