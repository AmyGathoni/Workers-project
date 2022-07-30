<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .sign{
            background-color: #333;
            width: 37%;
            border: solid;
            text-align: center;
            position: relative;
            left: 440px;
            top: 220px;
            height: 300px;
            padding: 40px;

        }
        
        .container-form{
            background-color: #A6B98E;
            height: 220px;
        }
        input[type=text], input[type=password]{
            width: 180px;
        }
        input[placeholder=name], input[placeholder=password], input[placeholder=fullname]{
            background-color: black;
            color: #fff;
        }
        .login a{
            color: black;
        }
        button{
            width: 15%;
            cursor: pointer;
            padding: 5px 7px;
            font-size: 14px;
        }
        .btn:hover{
            color: #A18EB9;
        }
        .link{
            margin-top: 10px;
        }
        .link a:hover{
            color: white;
        }
        .link a{
            margin-left: 5px;
            color: black;
        }
    </style>
</head>
<body>
<?php
if (!isset($_SESSION['username'])) { ?>
<?php
if (isset($_GET['register_action'])) {
if ($_GET['register_action'] == "success") { ?>
You have SignedUp Successfully!
<?php }
}
?>
<form class="sign" method="post" action="SignAct.php">
    <div class="container-form">
        <h2>SignUp</h2>
    <div class="container">
<label>Username:</label><br>
<input type="text" name="username" placeholder="name"/><br>
<label>Password:</label><br>
<input type="password" name="password" placeholder="password"/><br>
<label>Full Name:</label><br>
<input type="text" name="name" placeholder="fullname"/><br>

<div class="link">
    <button type="submit" class="btn">SignUp</button>
<h3>You already have an account? Click here to<a href="login.php">Login</a></h3>
<?php }?>
</div>

</form>
</body>
</html>