<?php
/**
 * Created by PhpStorm.
 * User: osindi
 * Date: 6/16/19
 * Time: 9:45 AM
 */

session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'assignment_one');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from userregistration where name ='$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
}else{
    $reg = "insert into userregistration(name, password) values ('$name','$pass')";

    mysqli_query($con,$reg);
    echo "Registration Successful";

}



?>