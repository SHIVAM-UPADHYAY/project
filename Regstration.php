<?php
session_start();

$con=mysql_connect('localhost','root','123456');
mysqli_select_db($con,'userregstration');
$name = $_POST['user'];
$pass = $_POST['password'];
$s="select * from usertable where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num == 1){
    echo"username Already Taken";
}
else{
    $reg="insert into usertable(name, password) values ('$name' , $'pass')";
    mysqli_query($con, $reg);
    echo"Registration Successful";
}


?>