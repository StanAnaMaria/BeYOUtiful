<?php

@include 'config.php';

if(isset($_POST['submit'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $pass=md5($_POST['password']);

    $select =" SELECT * FROM customer WHERE email = '$email' && passoword = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0)
    {
        $row=mysqli_fetch_array($result);
        
    }else{
        $error[]='incorrect email or password!';
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<style>
    *{margin: 0;
  padding: 0;
  font-family:'Times New Roman', Times, serif;
    }

    .form-container{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
    background: #ffcc99;
  }

  .form-container form{
    padding: 20px;
    border-radius:5px;
    box-shadow:0 5px 10px rgba(0,0,0,.1);
    background:#fff;
    text-align:center;
    width:500px;
  }

  .form-container form h3{
    font-size:30px;
    text-transform:uppercase;
    margin-bottom:10px;
    color:black;
  }

  .form-container form input{
    width:95%;
    padding:10px 15px;
    font-size:17px;
    margin:8px 0;
    background:#eee;
    border-radius:5px;
  }

  .form-container form .form-btn{
    background:#ffcc99;
    text-transform:capitalize;  /*fiecare cuvant cu litera mare*/
    font-size:20px;
    cursor:pointer;
  }

  .form-container form .form-btn:hover{
    background:#ffb366;
    color:white;
  }

  .form-container form p{
    margin-top:10px;
    font-size:20px;
    color:black;
  }

  .form-container form p a{
    color:#ffcc99;
  }

  .form-container form .error-msg{
    margin:10px 0;
    display:block;
    background:red;
    color:#fff;
    border-radius:5px;
    font-size:20px;
    padding:10px;
  }

</style>
<body>

    
<div class="form-container">

    <form action="" method="post">
        <h3>login now</h3>
        <?php
        if(isset($error))
        {
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="email" name="email" required placeholder="enter your email">
        <input type="password" name="password" required placeholder="enter your password">
        <input type="submit" name="submit" value="Login now" class="form-btn">
        <p>Don't have an account? <a href="register_form.php">  Register now</a></p>
    </form>
</div>
</body>
</html>