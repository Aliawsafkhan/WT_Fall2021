<?php
class db{
    $dbhost= "localhost";
    $dbuser= "root";
    $dbpass ="";
    $db="employee";
    $conn = new mysql($dbhost , $dbuser , $dbpass , $db) or die( "Connection failed: %s\n". $conn -> error);
    return $conn;
}

function CheakUser()