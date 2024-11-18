<?php
session_start();
include ("connection.php");
include ("function.php");

if ($_SERVER ["REQUEST_METHOD"] == "POST")
{
    //if something was poster
    $user_name = $_POST ["user_name"];
    $password = $_POST ["password"];

    if (!empty ($user_name) && !empty ($password) && !is_numeric ($user_name))
{

    //read from database 
    $query = "select * from users where user_name = '$user_name' limit 1"; 
    $result = mysqli_query ($con, $query);

    if($result)
    {
        if ($result && mysqli_num_rows ($result)>0)
         {
            $user_data = mysqli_fetch_assoc ($result);
            
            if($user_data ['password'] === $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header ("Location: index.php");
                die; 
            }
         }
    }
}
else 
  {
    echo "Username and password cannot be empty";
  }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
</head>
<body>
    <h1>Login Page</h1>
<div id="box">
    <form method="post">
        <div>Insert username and password</div>
        <input id="text" type="text" name="user_name"> <br>
        <input id="text" type="password" name="password"> <br>
        <input id="button" type="submit" value="Login"> <br>

       <p>Don't have an account? <a href="signup.php"> Signup!</a></p> <br>
    </form>

</div>

<!--I know it is not okay to insert a style tag into the HTML and that it is better to have a separate stylesheet, I am joining the two only because the front-end work in this project is brief-->
<style>
    body{
        background-color: #d3d3d3; 
        font-family: arial; 
        text-align: center;
    }
   #text {
    margin: 5px 10px;
    width: 30%; 
    height: 30px; 
    align-items: center;
    border: 2px solid #a8a8a8; 
    border-radius: 5px;
   }
   #box {
    width: 100%;
    padding: 20px;
   }
   #button {
    padding: 15px; 
    width: 15%; 
    background-color: #white; 
    border: 1px solid black;
    margin-top: 15px;
    cursor: pointer;
   }

@media  (max-width: 600px) {
    h1 {
        font-size: 25px;
    }
    #text {
        width: 150px;
    }
    #button {
        width: 100px;
    }
}
</style>

</body>
</html>