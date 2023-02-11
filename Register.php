<?php

#html data _post(html ekn post ekak geeddi yatin underscoe ekak danawa)
$u=$_POST['user'];
$p=$_POST['pass'];

#connection create (host and sqli username, pasword , databse name)
$con=mysqli_connect('localhost','root','','loginsys');

if(!$con){
   echo "disconnected";
  die($con);
  
}
#sql ekata data insert karaanwa
$rec=mysqli_query($con,"insert into user values('$u','$p')");
if($rec){
    header("location:login.html");
}
else{
  echo  "<script>";
  echo   "alert('Wrong Password');";
   echo  "</script>";
}
?>