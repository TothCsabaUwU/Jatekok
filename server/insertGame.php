<?php
require_once "db.php";
$name=$_GET["name"];
$dev=$_GET["developer"];
$gen=$_GET["genre"];
$rel=$_GET["releaseDate"];
$sql="INSERT INTO `games` VALUES (null,'{$name}','{$dev}','{$gen}','{$rel}')";
$stmt=$db->exec($sql);
echo $stmt;
?>