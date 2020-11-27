<?php

require './app/Database.php';

echo "Hello! Singleton!...";
echo "<br/>";
$cnx1=Database::getinstance();
var_dump($cnx1);
echo "<br/>";
$cnx2=Database::getinstance();
var_dump($cnx2);
echo "<br/>";
$cnx3=Database::getinstance();
var_dump($cnx3);

?>