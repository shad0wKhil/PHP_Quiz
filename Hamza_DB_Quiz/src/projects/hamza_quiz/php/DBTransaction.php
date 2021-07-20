<?php

if (strpos($_SERVER['HTTP_HOST'], 'localhost:') !== false) {
    // DB runs in local Docker container: localhost
    define('DB_HOST', getenv('DB_HOST'));
    define('DB_NAME', getenv('DB_NAME'));
    define('DB_USER', getenv('DB_USER'));
    define('DB_PASSWORD', getenv('DB_PASSWORD'));
}
else {
    define('DB_HOST', 'ipiluwig.mysql.db.internal');
    define('DB_NAME', 'ipiluwig_ha');
    define('DB_USER', 'ipiluwig_10');
    define('DB_PASSWORD', 'Opport2021');
}

//question and answer
$connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
$query  = $connection->query("SELECT * from questions");
$questions = $query->fetchAll(PDO::FETCH_ASSOC);
$query  = $connection->query("SELECT * from answers");
$answers = $query->fetchAll(PDO::FETCH_ASSOC);

//FUNCTIONS
function qchris_data() {
    return array(
        'introduction' => qchris_introductionData(),
        'report' => qchris_reportData()
    );
}

//RESULTS
function qchris_introductionData() {
    return array(
        'title' => "Best Quiz ever",
        'description' => "Have fun",
        'imageURL2' => "../images/Useless-Logo.png",
    );
}

function qchris_reportData() {
    return array(
        'title' => "Congratulations",
    );
}
