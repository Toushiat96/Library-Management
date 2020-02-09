<?php
    $dbhost='localhost';
    $dbuser='root';
    $dbpass='';
    $db='library';
    $con=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
    if(!$con){
        echo "Database Connection Error!!!";
    }  
    if (!empty($_POST)) {
   
    $email = $_POST['email'];
    $sub = $_POST['sub'];
    $msg = $_POST['message'];
  
    

    $insert = "INSERT INTO help(email,subject,message) 
                      VALUES('$email','$sub','$msg')";
    if (mysqli_query($con, $insert)) {


        echo "Message Send Successfull!";
    } else {
        echo 'Message Send Failed!!!';
    }
}
?>


        <!doctype html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title>GET HELP</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="style.css">
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
                            
                            <li><a href="#">About Us</a>
                                <ul>
                                    <li><a href="mission.php">Library Mission</a></li>

                                    <li><a href="program.php">Programe & Event</a></li>
                                </ul>
                            </li>
                            <li><a href="collection.php">Collection</a></li>

                            <li><a href="lockers.php">Lockers</a></li>

                            <li><a href="get_help.php">Get Help</a></li>
                           <li><a href="index.php">LogOut</a>
							
						
						</li>
                        </ul>
                    </div>
                </div>
                <div class="help">
                <form method="POST" id="helpp">
                    <h1>মতামত দিন</h1>
                    <input class="con1" type="" name="name"  placeholder="Name*">
                    <input class="con2" type="" name="email" placeholder="E-mail*">
                    <input class="con3" type="" name="sub" placeholder="Subject*">
                    <input class="con4" type="" name="message" placeholder="Message*"><br>
                    <input type="submit" name="submit" >
                </form>
                </div>
                <div class="container fmenu">
                    <div class="row fmenu1">
                        <ul>

                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>



                        </ul>
                    </div>
                </div>
            </div>

            <script src="js/bootstrap.min.js" type="text/javascript"> </script>
        <script src="js/jquery-2.2.3.min.js" type="text/javascript"> </script>
            <script type="text/javascript" src="js/form-validator.js"></script>
        <script>
        $(function () {
            $("#helpp").validate({
                
                rules: {
                    name: {
                        required:true,
                        minlength:5,
                    },
                    
                    email: {
                        required: true,
                        email: true
                    },
                    sub: {
                        required: true,
                        
                        
                    },
                    message: "required",
                },
                // Specify the validation error messages
                messages: {
                    name: {
                        required:"Please Enter Your Name",
                        minlength:"Minimum 5 character Needed!",
                    },
                    email:{
                        required: "Please enter a valid email address",
                        email:"Write valid email"
                    },
                    sub: {
                        required: "Enter subject",
                        
                        
                    },
                    message: "enter message",
                },
                submitHandler: function (form) {
                    form.submit();
                }
            });
        });
    </script>
        </body>

        </html>
