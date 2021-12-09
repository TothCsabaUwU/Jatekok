<?php
require_once "db.php";
$target=isset($_GET["name"]) ? $_GET["name"] : null;
if(!$target==null){
    $sql="select games.id, games.name, developer, genres.name as 'genrename', releaseDate from games inner join genres on genre=genres.id WHERE genres.name='{$target}'"; 
}
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>