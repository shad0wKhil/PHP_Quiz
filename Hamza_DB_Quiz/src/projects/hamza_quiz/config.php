<?php
//Start session
session_start();

//Opport
$incPaths = $_SERVER['DOCUMENT_ROOT'] . '/php';
$incPaths .= PATH_SEPARATOR;

//Opport
$incPaths .= $_SERVER['DOCUMENT_ROOT'] . '/projects/hamza_quiz/php';
set_include_path($incPaths);

//includes require for all pages
include 'auth.php';

//tracing
define('TRACE_DB_ACCESS', false);

define('DB_HOST', getenv('DB_HOST'));
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));

$connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);

$query  = $connection->query("SELECT * from questions");
$questions = $query->fetchAll(PDO::FETCH_ASSOC);

    
 