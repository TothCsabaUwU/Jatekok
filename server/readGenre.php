<?php
require_once "db.php";
$sql="SELECT * FROM `genres`";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>