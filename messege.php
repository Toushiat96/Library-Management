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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sub = $_POST['subject'];
    $msg = $_POST['message'];
  
    

    $insert = "INSERT INTO help(name,email,subject,message) 
                      VALUES('$name','$email','$sub','$msg')";
    if (mysqli_query($con, $insert)) {


        echo "Message Send Successfull!";
    } else {
        echo 'Message Send Failed!!!';
    }
}
?>