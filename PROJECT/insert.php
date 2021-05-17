<?php
$servername="localhost";
$username="root";
$password="";
$dbname="projectdb";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("Connection failed:".$conn->connect_error);}
$tname= "alice";
$temail= "alice@gmail.com";
$tpass=1234;
$sql="INSERT INTO teacher(tname,temail,tpass) values('$tname','$temail',$tpass)";
$res= $conn->query($sql);
if($res)
{
    echo"new record insered";
}
else
{
    echo"error".$conn->error;
}
$conn->close();
?>