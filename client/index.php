<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Kedvenc Játékok</title>
</head>
<body>
    
<div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Főoldal</a></li>
                <li class="nav-item"><a href="index.php?program=browseSite.php" class="nav-link">Játékok listája</a></li>
                <li class="nav-item"><a href="index.php?program=insertSite.php" class="nav-link">Új elem</a></li>
                <li class="nav-item"><a href="index.php?program=updateSite.php" class="nav-link">Módosítás</a></li>
                <li class="nav-item"><a href="index.php?program=deleteSite.php" class="nav-link">Törlés</a></li>
            </ul>
        </nav>
    </div>

    <div class="container ">
        <?php
            if(isset($_GET["program"])){
                include $_GET["program"];
            }else{
                include "mainSite.php";
            }
        ?>
    </div>

    <script>
    
    for(let obj of document.links){
    if(obj.href==document.URL){
        obj.style.color="green"
        }
    }
    </script>

</body>
</html>