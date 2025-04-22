<?php

function create_connection(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "seezonedb";
    
    return new mysqli($host,$username,$password,$database);
}