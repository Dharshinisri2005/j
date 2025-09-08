<?php
$conn=new sqli("localhost","root","testdb");
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
$result=$conn->query($sql);
if($result && $result->num_rows>0){
    echo"logged in";
}?>