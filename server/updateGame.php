<?php
require_once "db.php";
$target=isset($_GET["id"]) ? $_GET["id"] : null;
$newtext=isset($_GET["name"]) ? $_GET["name"] : null;
$sql="UPDATE `games` SET `name`='{$newtext}' WHERE id=${target}";
$stmt=$db->exec($sql);
if($stmt){
    echo "Sikeres módosítás";
}else{
    echo "Sikertelen";
}
?>