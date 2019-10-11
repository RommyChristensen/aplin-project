<?php session_start(); ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
	<?php
		include("koneksi.php");
		$password="";
		$username="";
		
		if(isset($_POST['btnLogin'])){
			$username=$_POST['tbUsername'];
			$password=$_POST['tbPassword'];
			
			if($username!="" && $password!=""){
				if($username == "admin" && $password == "admin"){
					$_SESSION['userdata']['Username'] = "admin";
					header("Location: admin/index.php");
				}
				$query = mysqli_query($koneksi,"select * from user"); 
				
				$ada=false;
				$id=-1;
				$passSesungguhnya="";
				$user;
				while($row = mysqli_fetch_array($query)) {
					if($row['Username'] == $username)
					{
						$ada=true;
						$id=$row['Id'];
						$passSesungguhnya=$row['Password'];
						$user = $row;
					}
				}
				if($ada==true){
					if($passSesungguhnya == md5($password)){
						$_SESSION['userdata'] = $user;
						header("Location: dashboard.php");
					}
					else{
						echo "<script>alert('You typed the wrong password');</script>";
					}
				}
				else{
					echo "<script>alert('Username has not been registered');</script>";
				}
			}
			else{
				echo "<script>alert('All Field must be filled');</script>";
			}
		}
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
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
		body {
			height: 100vh;
		}

		.back{
			position: absolute;
			width: 100vw;
			height: 100vh;
			background-image: url('bg1.png');
			background-size: contain;
			filter: blur(5px);
			transform: scale(1.1);
		}

		.isi {
			display: table-cell;
			margin: 0 auto;
			vertical-align: middle;
			horizontal-align: center;
			width: 55vh;
			height: 79.5vh;
		}

		.turun {
			position: relative;
			top: 0vh;
		}

		.register-page{
			margin: auto;
			display: table;
		}

		.register-box-body {
			height: 40vh;
		}

		.register-page{
			background-color: transparent;
		}
	</style>

</head>

<body class="skin-blue">
	<div class="back">

	</div>
	<div class='turun'>
		<div class="register-page">
			<div class='isi'>
				<div class="register-logo" style="color: white;">
					<br>
					<b>Login</b>
				</div>
				<div class="register-box-body">
					<form action='login.php' method='post'>
						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Username" name='tbUsername'>
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="password" class="form-control" placeholder="Password" name='tbPassword'>
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
						<div class="col-xs-6" style='float:left;'>
							<a href='register.php'>Haven't got any account ?</a>
						</div>
						<div class="col-xs-6" style='float:right;'>
							<input type="submit" class="btn btn-primary btn-block btn-flat" name='btnLogin'
								value='Login'>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>