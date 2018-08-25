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

$app->get('/dentista-anuncie-seu-consultorio/como-funciona', function() { 

	$page = new GullAds\Page();

	$page->setTpl("anuncie-como-funciona",array(
		"q"=>"",
		"loggeduser"=>""
	));	

});

$app->get('/dentista-anuncie-seu-consultorio/como-fazer-minha-pagina', function() { 

	$page = new GullAds\Page();

	$page->setTpl("anuncie-como-fazer",array(
		"q"=>"",
		"loggeduser"=>""
	));	

});

$app->get('/dentista-anuncie-seu-consultorio/perguntas-frequentes', function() { 

	$page = new GullAds\Page();

	$page->setTpl("anuncie-perguntas-frequentes",array(
		"q"=>"",
		"loggeduser"=>""
	));	

});

$app->get('/dentista-anuncie-seu-consultorio/como-impulsionar', function() { 

	$page = new GullAds\Page();

	$page->setTpl("anuncie-como-impulsionar",array(
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

$app->get('/carrinho/autenticacao', function() { 

	$page = new GullAds\Page();

	$page->setTpl("carrinho-autenticacao",array(
		"q"=>"",
		"loggeduser"=>""
	));	

});

$app->get('/carrinho/pagamento', function() { 

	$page = new GullAds\Page();

	$page->setTpl("carrinho-pagamento",array(
		"q"=>"",
		"loggeduser"=>""
	));	

});

$app->get('/carrinho/confirmacao', function() { 

	$page = new GullAds\Page();

	$page->setTpl("carrinho-confirmacao",array(
		"q"=>"",
		"loggeduser"=>""
	));	

});

$app->get('/central-do-anuncio', function() { 

	$page = new GullAds\Page();

	$page->setTpl("central",array(
		"page"=>"perfil",
		"loggeduser"=>""
	));	

});

$app->get('/central-do-anuncio/profissionais', function() { 

	$page = new GullAds\Page();

	$page->setTpl("central-profissionais",array(
		"page"=>"profissionais",
		"loggeduser"=>""
	));	

});

$app->get('/central-do-anuncio/profissional', function() { 

	$page = new GullAds\Page();

	$page->setTpl("central-profissionais-form",array(
		"page"=>"profissionais",
		"loggeduser"=>""
	));	

});

$app->get('/central-do-anuncio/profissional/:id', function($id) { 

	$page = new GullAds\Page();

	$page->setTpl("central-profissionais-form",array(
		"page"=>"profissionais",
		"loggeduser"=>""
	));	

});

$app->get('/central-do-anuncio/profissional/:id/excluir', function($id) { 

	$page = new GullAds\Page();

	$page->setTpl("central-profissionais-form",array(
		"page"=>"profissionais",
		"loggeduser"=>""
	));	

});

$app->get('/central-do-anuncio/fotos', function() { 

	$page = new GullAds\Page();

	$page->setTpl("central-fotos",array(
		"page"=>"fotos",
		"loggeduser"=>""
	));	

});

$app->get('/central-do-anuncio/popup', function() { 

	$page = new GullAds\Page();

	$page->setTpl("central-popup",array(
		"page"=>"popup",
		"loggeduser"=>""
	));	

});

$app->get('/central-do-anuncio/material', function() { 

	$page = new GullAds\Page();

	$page->setTpl("central-material",array(
		"page"=>"material",
		"loggeduser"=>""
	));	

});

$app->get('/central-do-anuncio/plano', function() { 

	$page = new GullAds\Page();

	$page->setTpl("central-plano",array(
		"page"=>"plano",
		"loggeduser"=>""
	));	

});

$app->get('/central-do-anuncio/plano/alterar-cobranca', function() { 

	$page = new GullAds\Page();

	$page->setTpl("central-plano-alterar-cobranca",array(
		"page"=>"plano",
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
