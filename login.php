
<?php

$email = $_POST['email']; 
 $password = $_POST['password'];
 
$con = mysqli_connect('localhost', 'root','' ,'skyline_fitness');


if($con === false){
die("connection failed". mysqli_connect_error());
}

$sql = ("select * from user where email='$email'&&password='$password'");
$result = mysqli_query($con,$sql);



$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);


if ($count==1){
	
echo "login successful";
header('location:category.html');
    

}
else
{
	echo"not successful ";
	header('location:login3.php.html');
}

 mysqli_close($con);

 
 
?>
 



