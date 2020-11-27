<?php

require './app/Database.php';

echo "Hello! Singleton!...";
echo "<br/>";
var_dump(Database::getinstance());
echo "<br/>";
var_dump(Database::getinstance());
echo "<br/>";
var_dump(Database::getinstance());

?>