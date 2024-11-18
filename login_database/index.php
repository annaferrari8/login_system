<?php
session_start(); 
$_SESSION;

include ("connection.php");
include ("function.php");

$user_data = check_login ($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    
</head>
<body>
    <style>
        body { 
            background-image: url ('https://images.unsplash.com/photo-1439066290691-510066268af5?q=80&w=1973&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
        }
    </style>

    <h1>We are so happy to see you</h1>
<break>
<p>Welcome, <i><?php echo $user_data ['user_name']; ?> </i>to the login system you have been dreaming about! </p>


<button><a href="logout.php">Logout</a> </button>

<style>
body{
        background-color: #d3d3d3; 
        font-family: arial; 
        text-align: center;
    }
button {
    
    padding: 15px; 
    width: 15%; 
    background-color: #white; 
    border: 1px solid black;
    margin-top: 15px;
    cursor: pointer;
}
a {
    text-decoration: none;
    font-size: 15px;
}
</style>
</body>
</html>