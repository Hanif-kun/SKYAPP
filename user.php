<?php


 // database connection code // 
 
 $con = mysqli_connect('localhost', 'root','' ,'skyline_fitness');
 
 // get the post records //
 $email = $_POST['email'];
 $password = $_POST['password']; 
 $confirmpassword = $_POST['confirmpassword']; 
 
 // database insert SQL code 
 $sql = "INSERT INTO `user` (
 `email`,`password`, `confirmpassword`) VALUES ( '$email', 
 '$password', '$confirmpassword')";
 // insert in database
 $rs = mysqli_query($con, $sql);
 if($rs) { 
 echo "Contact Records Inserted";
 header('location:index.html');
 }  
 
 
 ?>
 