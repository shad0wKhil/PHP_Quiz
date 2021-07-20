<?php
session_start();


$int = (int)$_POST['radio'];

$_SESSION['achievedPoints'] = $_SESSION['achievedPoints'] + $int;

header('Location: question.php');