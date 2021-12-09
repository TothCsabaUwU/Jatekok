<?php
require_once "db.php";
$sql="select games.id, games.name, developer, genres.name as 'genrename', releaseDate from games inner join genres on genre=genres.id";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>