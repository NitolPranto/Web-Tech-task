<?php include "control/results.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title> 3rd Lab Task </title>
</head>
 <body>
<h1>Registration</h1>
 <form  action ="<?php echo $_SERVER["PHP_SELF"];?> " method="post" enctype="multipart/form-data">
<table>
<tr>
<td>Name : </td>
 <td><input type="text" id="f" name="fname" ></td></tr> 
<tr>
<td>Email: </td>
 <td><input type="text" id="e" name="email"><?php echo $validateemail; ?></td></tr> 
 <tr> 
<td>User Name : </td> 
 <td><input type="text" id="l" name="Uname"> <?php echo $validatename;?></td>
 </tr>
 
<td>Password: </td>
<td><input type="password" id="p" name="pname"><?php echo $validatepass; ?></td></tr>
<td>Conform Password: </td>
<td><input type="password" id="c" name="cname"><?php echo $v1; ?></td></tr> 
 
 <tr>
 <?php echo $validateall; ?><br>
<td>Gender<td></tr>
<tr>
<td><input type="radio" id="male" name="gender" value="Male"> 
Male</td>
<td><input type="radio" id="female" name="gender" value="Female">
Female</td>
<td><input type="radio" id="other" name="gender" value="Other">
Other<?php echo $validateradio; ?></td> </tr>
<tr>
 <br></tr>
<tr> 
<td> Date Of Birth </td></tr>
<tr>
  <td><input type="date" id="day" name="date"></td>
    
 </tr>
 
 <tr>
 <td><input type="file" name="fileToUpload"></td>
 <br>
 <br>
 </tr>
<tr>
<td><input type="submit" value="Submit"></td>
<td><input type="reset" value="Reset"></td></tr>
</table>
</form>
</body> 

</html>