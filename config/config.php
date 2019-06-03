<?php
	define("DB_HOST", "localhost");
	define("DB_USR", "root");
	define("DB_PASS", "1234");
	define("DB_DB", "crowdfunding");
	//define(DB_TYPE, "mysql");

	$template_config = 
    array(
        'template_dir' => 'vistas/',
        'compile_dir' => 'libs/smarty/templates_c/',
        'cache_dir' => 'libs/smarty/cache/',
        'config_dir' => 'libs/smarty/configs/',
        );
    define ("URL_BASE","/phpLuna/");
    ini_set("display_errors", 0);
    error_reporting(E_ALL& ~E_NOTICE);
?>