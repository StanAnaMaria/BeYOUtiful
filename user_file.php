<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Perfect Style</title>
</head>
<style>
*{
    font-family:'Times New Roman', Times, serif;
    margin:0;
    padding:0;
    text-decoration:none;
}
    .container{
        min-width: 100vh;
        display:flex;
        align-items:center;
        justify-content:center;
        padding-top:20px;
        padding-bottom:60px;
        background-color:#ffcc99;
    }

    .content{
        text-align:center;
        padding: 20px;
        border-radius:5px;
        box-shadow:0 5px 10px rgba(0,0,0,.1);
        background:#fff;
        text-align:center;
        width:500px;
    }

    .btn{
        background:#ffcc99;
        font-size:20px;
        cursor:pointer;
        text-decoration:none;
        display:inline-block;
        padding:10px 30px;
        color:black;
        text-transform:capitalize;
    }

    .btn:hover{
    background:#ffb366;
    color:white;
    text-decoration:none;
  }
</style>
<body>

<div class="container">
    <div>
        <div class="content">
            <h1>Hi, <span><?php echo $_SESSION['name']?></span></h1>
            <h2>Welcome to our site!<span></span></h2>
            <a href="http://localhost/BeYOUtiful/home.html" class="btn">HOME</a>
            <a href="logout.php" class="btn">LOGOUT</a>
        </div>
    </div>
</div>

</body>
</html>