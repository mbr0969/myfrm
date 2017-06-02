<?php
require 'rb.php';
require '../vendor/libs/functions.php';
$db = require '../config/config_db.php';
$options = [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE =>\PDO::FETCH_ASSOC];
R::setup($db['dsn'],$db['user'],$db['pass'], $options);
R::fancyDebug(true);
//var_dump(R::testConnection());
R::ext('xdispense', function( $type ){
    return R::getRedBean()->dispense( $type );
});
//$page = R::xdispense('bl_page');
//$page->title = 'Старница 3';
//$page->text = 'Станнциа 3 хахахаха';
//$id = R::store($page);
//var_dump($id, true);
//Select
//$page = R::load('bl_page', 4);
//debug($page);
//echo $page->title;

//Update
//$page = R::load('bl_page', 4);
//$page->title = 'Странца-4';
//R::store($page);
//$page = R::load('bl_page', 4);
//echo $page->title;

//Delete
//$page = R::load('bl_page', 3);
//R::trash($page);
//Очистка таблицы
//R::wipe('bl_page');

$page = R::findAll('bl_page');
debug($page);