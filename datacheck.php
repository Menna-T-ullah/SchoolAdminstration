<?php
session_start();
$host='localhost';
$user='root';
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
if($data===false){
    die("Connection failed");
}
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $sql="insert into admission(name,email,phone,message) values('$name','$email','$phone','$message')";
    $result=mysqli_query($data,$sql);
    if($result){
        $_SESSION['message']="Submitted Successfully ";
        header('location:index.php');
    }
    else{
        echo "failed to submit";
    }
}
?>