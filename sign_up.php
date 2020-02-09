<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$db='library';
	$Library=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$Library){
		echo "Database Connection Error!!!";
	}  
	if (!empty($_POST)) {
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    

    $insert = "INSERT INTO info(email,password) 
                      VALUES('$email','$pass')";
    if (mysqli_query($Library, $insert)) {


        echo "User created successfully";
    } else {
        echo 'User Created Failed!!!';
    }
}
?>


<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Sign Up</title>
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
			<div class="signup">
				<h1>Sign Up</h1>
				<p>It's Free And Always Will Be</p>
				<fieldset>
					<legend>Personal Info </legend>
					
					<form Method="POST" id="register-form">
                    
                         <label for="">Name:</label>
					    <input type="text" name="name" placeholder="name"><br><br>
					    <label for="">Email:</label>
					    <input type="text" name="email" placeholder="email"><br><br>
					    <label for="">Password:</label>
					    <input type="password" name="pass" placeholder="password"><br><br>
					    <input type="submit" name="submit" >
					    <a href="sign_in.php">Sign in </a>

					</form>
					
					
					
					
				</fieldset><br><br>
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
		<script src="js/bootstrap.min.js" type="text/javascript"> </script>
		<script src="js/jquery-2.2.3.min.js" type="text/javascript"> </script>
		<script type="text/javascript" src="js/form-validator.js"></script>
		<script>
		$(function () {
			$("#register-form").validate({
				
				rules:
					email: {
						required: true,
						email: true
					},
					pass: {
						required: true,
						minlength: 6,
						
					}
				},
				// Specify the validation error messages
				messages: {
					
					email:{
						required: "Please enter a valid email address",
						email:"Write valid email"
					},
					pass: {
						required: "Please enter Your Passsword",
						minlength: "minimum 6 character needed",
						
					}
				},
				submitHandler: function (form) {
					form.submit();
				}
			});
		});
	</script>
	</body>
</html>