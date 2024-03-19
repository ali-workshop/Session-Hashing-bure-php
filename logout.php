<?php 
require_once "config.php";
// header ("Location:index.php");
?>
<a href="index.php">GOOD BYE<?php $_SESSION["UserId"];?></a>

<?php 
session_unset();
session_destroy();?>