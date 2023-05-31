<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    $host='localhost';
    $user='root';
    $pass='';
    $dbname='reyaz';

    $conn=mysqli_connect($host,$user,$pass,$dbname);
    $sql="INSERT INTO userlogin(username,email,password) values('$username','$email','$password')";
    
    mysqli_query($conn,$sql);
}
?>


