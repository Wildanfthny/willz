<?php
	include "db_con.php";
	if(ISSET($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$data = mysqli_query($database, "SELECT * FROM tb_login WHERE email='$email' AND password='$password'")or die(mysqli_error($database));

$cek = mysqli_num_rows($data);
	if($cek > 0)
	{
 	session_start();
 	$_SESSION['email'] = $email;
 	echo "<script language=\"javascript\">alert(\"welcome \");document.location.href='index.php';</script>";
	}else{
 	echo "<script language=\"javascript\">alert(\"Invalid nisn or password\");document.location.href='login.php';</script>";
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>LOGIN - RM WILDAN JAYA</title>
<!-- bootstrap-3.3.7 -->
<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<!-- JQUERY -->
<script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>
<link href="style/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" language="javascript" src="style/style.js"></script>
</head>
<body>
<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  name="login">Sign in</button>
                <a href="daftar.php" class="btn btn-lg btn-warning btn-block">Sign Up</a>
            </form>
        </div>
</div>
</body>
</html>