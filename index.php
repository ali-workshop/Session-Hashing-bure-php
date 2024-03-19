<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Signup and Login FORM</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="register/Login" class="Button3"></td>
    </tr>
  </table>
</form>
<?php
require_once "config.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
#chech if the fields not empty agaian for more validation...:)
  if (isset($_POST["Submit"])){
$username=$_POST["Username"];
$password=$_POST["Password"];
$options=[
"cost"=>12

];
// instead of the database in this version
$logins=[
"ali"=>password_hash("ali123",PASSWORD_BCRYPT,$options),
"rita"=>password_hash("rita123",PASSWORD_BCRYPT,$options)
];
if (isset($logins[$username])&& password_verify($password,$logins[$username])){
  $_SESSION["UserId"]=$username;
  header("Location:dashboard.php");
exit;
}
else 
{
  header("Location:index.php");
}
}

}

if(isset($_SESSION["UserId"])){
  header("Location: dashboard.php");
  }
?>