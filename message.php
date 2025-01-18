<?php
 
 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "sbiedutech";

 $con = mysqli_connect($server, $username, $password, $dbname);


 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

 $sql = "INSERT INTO `contact`(`Name`, `Email`, `Subject`, `Message`) VALUES ('[$name]','[$email]','[$subject]','[$message]')";

 $results = mysqli_query($con, $sql);

 if($results)
 {
    echo("Out Team will connect you shortly. thanks!!");
 }

 else{
    echo("Seems error!!");
 }
?>