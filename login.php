<?php
$u=$_POST['user'];
$p=$_POST['pass'];


$con=mysqli_connect('localhost','root','','loginsys');
if(!$con){
    echo"Connection not found";
    die($con);
}

$rec=mysqli_query($con,"select * from user where username='$u' and password='$p'");
 $b=false;
while ($row=mysqli_fetch_array($rec)){
    $b=true;
}
if ($b){
   header("location:dashboard.html");
}
else{ 
    echo  "<script>";
    echo   "alert('Wrong Password');";
    echo  "window.location='login.html';";
    echo  "</script>";
}



?>