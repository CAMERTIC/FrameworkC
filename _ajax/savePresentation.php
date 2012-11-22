<?php
session_start();
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once '../config.php';
require_once '../lib/library.php';
require_once '../camertic/classes/bd.class.php';
require_once '../lib/classes/entity.class.php';
require_once '../lib/classes/premiumAutocar.class.php';
require_once '../lib/classes/mdr.class.php';
GLOBAL $app;
$C = new CamerticConfig;
$app = new premiumAutocar;
if(!$app->checkSession()) {
	header('location:login.php');
	die();
}
//var_dump($_GET);
$autocar = new mdr;
$autocar->saveRecord($_GET, array('_'));
?>