<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 1);
require __DIR__ . '/vendor/autoload.php';

// configurar APP_ID e SECRET
define('APP_ID', '260082904447654');
define('APP_SECRET', '4260eb6714baab88b38409da84abe63b');
define('APP_VERSION', 'v2.8');

$fb = new Facebook\Facebook([
  'app_id' => APP_ID,
  'app_secret' => APP_SECRET,
  'default_graph_version' => APP_VERSION,
  ]);

$helper = $fb->getRedirectLoginHelper();


if(!isset($_SESSION['accessToken']) || $_SESSION['accessToken'] == null){

	$permissions = ['email']; // Optional permissions
	$loginUrl = $helper->getLoginUrl('http://localhost/fb/fb-callback.php', $permissions);

	echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

}else{
	die('logado!');
}