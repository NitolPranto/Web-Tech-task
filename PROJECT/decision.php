<!DOCTYPE html>
<html>
<head>
<style>
    * {
  box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}

.left {
position: relative;

}


.right {
    color: #f2f2f2;
position: relative;
bottom: 265px;
left: 637px;
height: 0%;
  width: 20%;
 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}




</style>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>

<a href="../view/homepage.php"><img src= "../resources/icon.jpg"></a>

<div class="topnav">
  
  
  <a href="../view/decision.php"><input type="submit" value="Login/Registration"></a>
  
  <a href="#">Technical</a>
  <a href="#">Madrasah</a>
  <a href="#">General</a>
  <a href="#">Content</a>
  <a><input type="text" value="Search"></a>
  
</div>

<body>

<form>
<table style= "width:100%">

<tr><th></th></tr>


<tr><th>
<p align = "left"><img src="../resources/admin.png"></p>
<tr><th>
<a href="adminlogin.php">Admin
</tr></th>
</tr></th>



    
    <tr><th><a href="headlogin.php">Head Teacher</tr></th>
    <tr><th><a href="login.php">Teacher</tr></th>
    </table>
</form>
<br>


</body>
</html>