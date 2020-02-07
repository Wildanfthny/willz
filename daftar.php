<?php include('db_con.php'); ?>
<!DOCTYPE html>
<html>
<head>
     <title> Sign Up - RM WILDAN JAYA </title>
<!-- bootstrap-3.3.7 -->
<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<!-- JQUERY -->
<script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>
<link href="style/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" language="javascript" src="style/style.js"></script>
</head>
<body>
		<h1>Sign Up New Account</h1>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$email	  		  = $_POST['email'];
			$password		  = $_POST['password'];
          		
			$cek = mysqli_query($database, "SELECT * FROM tb_login WHERE email='$email'") or die(mysqli_error($database));
			
			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($database, "INSERT INTO tb_login(email, password) VALUES('$email','$password')") or die(mysqli_error($database));
				
				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="login.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}
		}
		?>
		<form action="daftar.php" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="text" id="inputEmail" name="email" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">PASSWORD</label>
				<div class="col-sm-10">
					<input type="text" id="inputPassword" name="password" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<button type="submit" name="submit" class="btn btn-primary" value="SIMPAN">Sign Up</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>