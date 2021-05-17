<?php
include('../control/adminlogincheck.php');

if(isset($_SESSION['username'])){
header("location: ../view/adminprofile.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<fieldset>
<form action="" method="post">
<table style= "width:100%">
<tr>
<th><Legend>Login Here</Legend></th>
</tr>
<tr><th>
    <input type="text" name="username" placeholder="Enter your Username" ></tr></th>
    <tr><th>
    <input type="password" name="password" placeholder="Enter your password" ></tr></th>

    <tr><th><input name="submit" type="submit" value="LOGIN"></tr></th>
    <tr><th><?php echo $error; ?></tr></th>
    <tr><th>Or Register as Admin?</tr></th>
    <tr><th><a href="../view/adminregister.php">Register Here</tr></th>
    </table>
</fieldset>
</form>
<br>


</body>
</html>