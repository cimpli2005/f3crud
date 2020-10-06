<?php
require 'vendor/autoload.php';
$f3 = \Base::instance();

// load config file
$f3->config('app/config.ini');

// preflight system check
$preErr = Setup::instance()->preflight();
if (!empty($preErr)) {
	header('Content-Type: text;');
	die(implode("\n",$preErr));
}

/*
$f3->set('CONFIG', $cfg);
$f3->set('FLASH', \Flash::instance());

\Assets::instance();
*/
$f3->config('app/routes.ini');

$f3->run();