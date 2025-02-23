<?php

function login_db(){

    $server = "localhost";
    $user = "root";
    $pw = "";
    $database = "hfh_db";

    $mysqli = new mysqli($server, $user, $pw, $database);


    if ($mysqli->connect_errno) {
        error_log('Connection error: ' . $mysqli->connect_errno)."<br/>";
 
    }


    return $mysqli;
}

login_db();
?>