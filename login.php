<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
        
        .login{
        	background-color: #333;
        	width: 37%;
        	border: solid;
            text-align: center;
            position: relative;
            left: 440px;
            top: 220px;
            height: 400px;
            padding: 50px;

        }
        .profile{
        	height:5rem;
            width:5rem;
            border-radius: 50%;
            object-fit: cover;
            border: black solid;
            background-color: white;
        }
        .container-form{
        	background-color: #A6B98E;
            height: 280px;
        }
        input[type=text], input[type=password]{
        	width: 180px;
        }
        input[placeholder=name], input[placeholder=password]{
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
        .link input[name=remember]{
        	margin-left: 10px;
        }
        .link a:hover{
        	color: white;
        }
        .link a{
        	margin-left: 5px;
        }
        .container2{
        	background-color: grey;
        	height: 50px;
        	margin-top: 10px;
        }
        .container2 a{
        	margin-left: 100px;
        }
        .container2 a:hover{
        	color: white;
        }

	</style>
</head>
<body>
<?php if(!isset($_SESSION['username'])){ ?>
<form class="login" method="post" action="loginAct.php">
	<div class="container-form">
		<div class="img">
		<img src="" class="profile">
		<h2>Login</h2>
	</div>
	<div class="container">
		<label>Username:</label><br>
<input type="text" name="username" placeholder="name" /><br>
<label>Password:</label><br>
<input type="password" name="password" placeholder="password" /><br>

<div class="link">
	<button type="submit" class="btn">Login</button>
    <label><input type="checkbox" name="remember"> Remember me</label>
	<h3>Don't have an account?Register here<a href="signup.php">SignUp</a></h3>
<?php } else if (isset($_SESSION['username'])) { ?>
<?php echo $_SESSION['username'] ?>
<a href="logout.php">Logout</a>
<?php }
?>
	</div>
	</div>
	<div class="container2">
    <button type="button" class="btn">Cancel</button>
    <a href="#">Forgot password?</a>
  </div>
	</div>
	
</form>
</body>
</html>