<?php
error_reporting(E_ALL);
ini_set('display errors', 1);

$dbuser = 'root';
$dbpswd = 'root';;
$dbhost = 'localhost';
$dbname = 'movies';


$db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8', $dbuser, $dbpswd);

// Recuperer des données
// $req = $db-> query('Select * from movies');
// $results = $req->fetchAll();

// foreach ($results as $result) {
//     echo $result['name'] . " " . $result['release_year'] . " " . $result['running_time'] . "<br>" ;
// }
?>