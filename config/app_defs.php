﻿<?php
/*----------------------------------------------------------------------
 * app_defs.php
 *
 * Copyright 2015 2016 2017 2018 by John Gambini
 *
 ----------------------------------------------------------------------*/
define('APP_NAME','Manin A. Bocss');
define('SITE_NAME', 'http://' . $_SERVER['HTTP_HOST']);
define('DATABASE', 'workbench_1');
define('THEME','utere-verbis');
define('SUBSITE_NAME', '/notes');
define('WORKBENCH_FOLDER', SITE_NAME . SUBSITE_NAME . '/vendor/workbench/core');
//define('WORKBENCH_FOLDER', SITE_NAME . '/workbench');

define('WEBAPP', SITE_NAME . SUBSITE_NAME);
define( 'THEMEDIR', SUBSITE_NAME . '/themes');
define('CONTENTDIR', SITE_NAME . SUBSITE_NAME . '/wb-content/' . DATABASE );
define('PDFDIR', SITE_NAME . '/pdf');

//for retrieving code from file system's point of view
define('WEBROOT', $_SERVER["DOCUMENT_ROOT"]);
define('SUBSITE_DIR', WEBROOT . "\\notes");
define('SOURCEDIR', ABSDIR . "\\themes");
define('WORKBENCH_DIR', SUBSITE_DIR . "\\vendor\\workbench\\core" );
//define('WORKBENCH_DIR', WEBROOT . "\\workbench" );

//pdo connection information
define('DB_HOST','127.0.0.1');
define('DB_USER','root');
define('DB_PASSWORD', '');
define('DB_CHARSET','utf8');
define('INCLUDE_SQL_IN_ERROR_MESSAGE', true );

// for php-gettext
define('LOCALE_DIR', WORKBENCH_DIR .'/locale');
define('DEFAULT_LOCALE', 'en_US');


define('DEBUG_VERBOSE', true);
?>
