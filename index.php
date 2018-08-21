<?php 
session_start();

require_once("includes/config.php");

use Rain\Tpl;

$app = new \Slim\Slim();

$app->config('debug', true);

/**
 * Pages
 */

$app->get('/', function() { 

	$page = new GullAds\Page();

	$page->setTpl("index",array(
		"q"=>"",
		"loggeduser"=>""
	));	

});


/**
 * Users Logged in Pages
 * Need VerifyLogin() Method in Every Page
 */

//require_once("includes/dashboard.php");

/**
 * API's Requests
 */

/**
 * Debug tests
 */

$app->run();
 ?>
