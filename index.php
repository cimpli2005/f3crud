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

## DB Setup
$cfg = Config::instance();
if ($cfg->ACTIVE_DB)
    $f3->set('DB', Storage::instance()->get($cfg->ACTIVE_DB));
else {
    $f3->error(500,'Sorry, but there is no active DB setup.');
}

$f3->set('CONFIG', $cfg);
$f3->set('FLASH', \Flash::instance());

$tmpl = \Template::instance();
$tmpl->extend('image','\Template\Tags\Image::render');
$tmpl->extend('pagebrowser','\Pagination::renderTag');
// Handles all <form> data
$tmpl->extend('input','\Template\Tags\Input::render');
$tmpl->extend('select','\Template\Tags\Select::render');
\Assets::instance();

$f3->config('app/routes.ini');

///////////////
//  backend  //
///////////////

if (\Controller\Auth::isLoggedIn()) {
	$f3->config('app/routes_admin.ini');
}

$f3->run();