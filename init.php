<?php defined('SYSPATH') OR die('No direct access allowed.');

// require redbean
$sep = DIRECTORY_SEPARATOR;
require_once(dirname(__FILE__).$sep.'vendor'.$sep.'redbean'.$sep.'RedBean'.$sep.'redbean.inc'.EXT);

// kickstart it
$cfg = Kohana::$config->load('redbean');
$db = $cfg->get('database');
$toolbox = RedBean_Setup::kickstart($db['dsn'], $db['username'], $db['password'], $cfg->get('frozen'));

// TODO determine if this is the best way to start things up. for now, it works.
Redbean_Facade::configureFacadeWithToolbox($toolbox);
