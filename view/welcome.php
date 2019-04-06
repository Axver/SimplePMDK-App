<?php
session_start();
if(isset($_SESSION['username']))
{
	if($_SESSION['jenis_user']=='admin')
	{
		header("Location:../view/admin/admin.php");
	}
	else if($_SESSION['jenis_user']=='siswa')
	{
		header("Location:../view/siswa/siswa.php");
	}
	else if($_SESSION['jenis_user']=='sekolah')
	{
		header("Location:../view/sekolah/sekolah.php");
	}
	else{
		session_destroy();
	}
}


?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title>PMDK Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css.css">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://steemitimages.com/640x0/https://images2.weku.io/DQmUDHUbgYemyuKa63Jf39Hsz3gDh3rdwDyrFQnKb2uqmUA/logopmdk.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action='../controller/login.php' method='POST'>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								
							</div>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
					<input type="submit" name="button" class="btn login_btn" value='Login'>
				</div>
					</form>
				</div>
				
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						
					</div>
					<div class="d-flex justify-content-center links">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
