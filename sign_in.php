<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$db='library';
	$con=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$con){
		echo "Database Connection Error!!!";
	}  
	
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Sign In</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="library">
			<div class="container hadder">
				<div class="row">
					<div class="col-md-3 logo">
						<img src="image/logo.png" alt="logo" />
					</div>
					<div class="col-md-4 col-md-offset-2">
						<h2>Library Opening Hour</h2>
						<h4>Saturday-Tusday: 9:00am-9:00pm</h4>
						<h4>Friday: 10:00am-5:00pm</h4>
					</div>
					<div class="col-md-3 src">
						<div class="form-group">
							<label for="">SEARCH HARE</label>
							<div class="input-group">
								<input type="text" placeholder="Search Here" class="form-control" />
								<span class="input-group-addon">
								<i class="glyphicon glyphicon-search"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<ul class="dropdown">
						<li><a href="index.php">Home</a></li>
						
						<li><a href="#">All My Account</a>
							<ul>
								<li><a href="sign_in.php">Login</a></li>
							
								<li><a href="sign_up.php">Sign Up</a></li>
								
							</ul>
						
						</li>
					</ul>
				</div>
			</div>
			<div class="login">
				<fieldset>
					<legend>Login to your account</legend>


					 <?php
                            if(!empty($_POST)){
                                $id=$_POST['email'];
                                $pass= $_POST['password'];
                                $sel="SELECT * FROM info WHERE email='$id' AND password='$pass'";
                                $qry= mysqli_query($con, $sel);
                                $resu=mysqli_fetch_array($qry);
                                if($resu){
                                    header('Location:support.php');
                                }else{
                                    echo "ID and Password Incorrect!";
                                }
                            }
                        ?>
					<form action="" method="post">
						<label for="">Email:</label>
						<input type="text" name="email" placeholder="Enter your email" /><br /><br />
						<label for="">Password</label>
						<input type="password" name="password" placeholder="Enter your password" /><br /><br />
						<input type="submit" value="LOG IN">
					</form>
				</fieldset>
			</div>
			<div class="container fmenu">
				<div class="row fmenu1">
					<ul>
						
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						
					</ul>
				</div>
			</div>
		</div>
		<script> src="js/bootstrap.min.js" type="text/javascript"</script>
		<script> src="js/jquery-2.2.3.min.js" type="text/javascript"</script>
	</body>
</html>