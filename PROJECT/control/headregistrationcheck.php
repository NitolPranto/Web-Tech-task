<?php
$error="";
    $isinserted="";
    $validatename="";
    $validateusername="";
    $validatepassword="";
    $validateemail="";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $name=$_POST["name"];
      $uname=$_POST["username"];
      $email=$_POST["email"];
      $pass=$_POST["password"];
      $conpassword=$_POST["conpassword"];

      if(empty($name) || strlen($name)<3|| empty($uname) || strlen($uname)<3||
      empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)||
      empty($pass) || empty($conpassword) || $pass!==$conpassword || strlen($pass) < 6)
      
      
      {
        $validateusername = "You must enter a valid username";
        $validatename = "You must enter valid name";
        $validateemail = "You must enter valid email";
        $validatepassword = "You must enter valid password";
      }
      

      else{

        $servername="localhost";
$username="root";
$password="";
$dbname="projectdb";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("Connection failed:".$conn->connect_error);}

$sql="INSERT INTO headTeacher (huname,hname,hemail,hpass) values('$uname','$name', '$email', '$pass')";
$res= $conn->query($sql);
if($res)
{
    $isinserted="You have successfully registered!";
}
else
{
    echo"error".$conn->error;
}
$conn->close();
    $validateusername="";
    $validatename="";
    $validatepassword="";
    $validateemail="";
}
}

?>