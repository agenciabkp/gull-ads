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

$app->get('/como-funciona', function() { 

	$page = new GullAds\Page();

	$page->setTpl("como-funciona",array(
		"q"=>"",
		"loggeduser"=>""
	));	

});

$app->get('/catalogo', function() { 

	$page = new GullAds\Page();

	$page->setTpl("catalogo",array(
		"q"=>"",
		"loggeduser"=>""
	));	

});

$app->get('/anuncio/:id/:alias', function($id,$alias) { 

	$page = new GullAds\Page();

	$page->setTpl("anuncio",array(
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
