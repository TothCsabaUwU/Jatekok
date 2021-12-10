<?php
require_once "db.php";
$target=isset($_GET["id"]) ? $_GET["id"] : null;
$sql="delete from games where id='{$target}'";
$stmt=$db->exec($sql);
if($stmt){
    echo "sikeres törlés";
}else{
    echo "Sikertelen";
}
?>