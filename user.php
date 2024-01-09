<?php


 // database connection code // 
 
 $con = mysqli_connect('localhost', 'root','' ,'skyline_fitness');
 
 // get the post records //
 $email = $_POST['email'];
 $password = $_POST['password']; 
 $confirmpassword = $_POST['confirmpassword']; 
 $id = $_POST['id']; 
 
 // database insert SQL code 
 $sql = "INSERT INTO `user` (
 `id`,`email`,`password`, `confirmpassword`) VALUES ('$id','$email', 
 '$password', '$confirmpassword')";
 // insert in database
 $rs = mysqli_query($con, $sql);
 if($rs) { 
 echo "Contact Records Inserted";
 header('location:index.html');
 }  
 
 
 ?>
 