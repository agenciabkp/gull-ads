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

$app->get('/dentista-anuncie-seu-consultorio', function() { 

	$page = new GullAds\Page();

	$page->setTpl("anuncie",array(
		"q"=>"",
		"loggeduser"=>""
	));	

});

$app->get('/termos-e-privacidade', function() { 

	$page = new GullAds\Page();

	$page->setTpl("politica",array(
		"q"=>"",
		"loggeduser"=>""
	));	

});

$app->get('/auth', function() { 

	$page = new GullAds\Page();

	$page->setTpl("autenticacao",array(
		"q"=>"",
		"loggeduser"=>""
	));	

});

$app->get('/quem-somos', function() { 

	$page = new GullAds\Page();

	$page->setTpl("quem-somos",array(
		"q"=>"",
		"loggeduser"=>""
	));	

});

$app->get('/contato', function() { 

	$page = new GullAds\Page();

	$page->setTpl("contato",array(
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
