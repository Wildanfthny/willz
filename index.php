<?php 
	include 'db_con.php';
 ?>
<?php 
session_start();
if(ISSET($_SESSION['email'])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<title>RM WILDAN JAYA</title>
<!-- bootstrap-3.3.7 -->
<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<!-- JQUERY -->
<script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>
</head>
<body>
<div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="">Katalog </a>
				<a class="navbar-brand" href="">Input Data</a>
				<a class="navbar-brand" href="">Edit Data</a>
				<a class="navbar-brand" href="">Orderan</a>
				<a class="navbar-brand pull-right" href="logout.php?destroy"> <span class="glyphicon glyphicon-off"></span> Logout </a>
				<a class="navbar-brand pull-right" href="#"><span class="glyphicon glyphicon-user"></span> <?=$_SESSION['email'];?> </a> 
            </div>
	</div>
</div>

</body>
</html>
<?php 
}else{
	echo "<script language=\"javascript\">alert(\"Please login\");document.location.href='login.php';</script>";	
}
?>