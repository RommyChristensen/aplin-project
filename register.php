<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
	<?php
		include("koneksi.php");
		$nama="";
		$email="";
		$password="";
		$confirm="";
		$username="";
		
		if(isset($_POST['btnRegis'])){
			$nama=$_POST['tbNama'];
			$email=$_POST['tbEmail'];
			$username=$_POST['tbUsername'];
			$confirm=$_POST['tbConfirm'];
			$password=$_POST['tbPassword'];
			
			if($nama!="" && $email!="" && $username!="" && $confirm!="" && $password!=""){
				$query = mysqli_query($koneksi,"select * from user"); 
				
				$ada=false;
				while($row = mysqli_fetch_array($query)) {
					if($row['Username'] == $username)
					{
						$ada=true; 
					}
				}
				$jum = mysqli_num_rows($query);
				
				if($ada==true){
					echo "<script>alert('Username has existed');</script>";
				}
				else{
					//cek email harus mengandung @ dan .com
					$lengkap = false;
					if (strpos($email, '@') !== false && strpos($email, '.com') !== false) {
						$lengkap=true;
					}
					if($lengkap==true){
						//cek password sama confirm harus sama
						$sama = false;
						if($password==$confirm){
							$sama=true;
						}
						if($sama==true){
							$jum+=1;
							mysqli_query($koneksi, "insert into user values (".$jum.", '".$nama."','".$email."','".$username."','".$password."')");
							echo "<script>alert('Register Success');</script>";
							$_POST['tbNama']="";
							$_POST['tbPassword']="";
							$_POST['tbConfirm']="";
							$_POST['tbUsername']="";
							$_POST['tbEmail']="";
						}
						else{
							echo "<script>alert('Both password and confirm must be identical');</script>";
						}
					}
					else{
						echo "<script>alert('Email must be contained with @ and .com');</script>";
					}
				}
			}
			else{
				echo "<script>alert('All Field must be filled');</script>";
			}
		}
	?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="cardmedia.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    body{
		height:100vh;
	}
	.isi{
		margin:auto;
		width:50%;
		height:79.5vh;
	}
	.turun{
		position:relative;
		top:0vh;
	}
	.register-box-body{
		height:52vh;
	}
  </style>
	
</head>
<body class="skin-blue layout-top-nav">
	<div class='turun'>
		<div class="register-page">
			<div class="register-logo">
				<br>
				<b>Register</b>
			</div>
			
			<div class='isi'>
				<div class="register-box-body">
					<form action='register.php' method='post'>
						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Full name" name='tbNama'>
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Email" name='tbEmail'>
							<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Username" name='tbUsername'>
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="password" class="form-control" placeholder="Password" name='tbPassword'>
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="password" class="form-control" placeholder="Confirm Password" name='tbConfirm'>
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
						<div class="col-xs-4" style='float:left;'>
							<a href='login.php'>Already have an account ?</a>
						</div>
						<div class="col-xs-4" style='float:right;'>
						  <input type="submit" class="btn btn-primary btn-block btn-flat" name='btnRegis' value='Register'>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>