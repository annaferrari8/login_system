<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login_db";

if (! $con= mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname)) 

{
    die ("Something went wrong! Failed connection"); 
}