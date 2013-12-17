<?php
require_once '../app/vendor/autoload.php';
require_once 'bootstrap.php';

$app = new \Slim\Slim(array(
	'templates.path' => './',
    'log.enabled' => true,
	'log.writer' => new \Slim\Extras\Log\DateTimeFileWriter(array( 'path' => '../logs', 'name_format' => 'Y-m-d' ) )
));

$app->get('/', function() use($app, $dm) 
{
	$app->render('main.html');
});

$app->get('/branches', function() use($app, $dm) {
	render_json(array(
		array(
			"id" 	=> 1234,
			"name" 	=> "master-IE-224"
		),
		array(
			"id" 	=> 1235,
			"name" 	=> "master-IE-225"
		)
	));
});

$app->run();
