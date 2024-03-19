<?php 
require_once "config.php";
if (!isset($_SESSION["UserId"])){

    header("Location:index.php");
exit;
}
else

{
echo "<br><br>"."welcome man this is  your dachboard Mr. ".$_SESSION["UserId"]."<br><br>"."click on logout tp ruturn to the home page"."<br><br>";
?> <a href="logout.php">Log Out <?php echo $_SESSION["UserId"]; ?></a>
<?php

}
?>