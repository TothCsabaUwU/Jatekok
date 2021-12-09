<div class="container">
    <div class="d-flex justify-content-center"><h1>Új játék bevitele</h1></div>
    <form class="form-inline">
        <input type="text" name="" id="name" class="form-control" placeholder="Játék neve">
        <input type="text" name="" id="dev" class="form-control" placeholder="Fejlesztő neve">
        <select id="gen">Műfaj</select>
        <input type="date" name="" id="rel" class="form-control" placeholder="Kiadási dátum">
        <input type="button" value="Mentés" class="btn btn-primary" onclick="insert()">
    </form>
</div>

<script>

    let gen

    fetch("../server/readGenre.php")
    .then(response=>response.json())
    .then(data=>fillSelect(data))

    function fillSelect(data){
    let sel=""
        for(obj of data){
            sel+=`<option>${obj.name}</option>`
        }
        document.querySelector("select").innerHTML=sel;
    }



    function insert(){
        let name=document.getElementById("name").value
        let dev=document.getElementById("dev").value
        let rel=document.getElementById("rel").value
        let gen=document.getElementById("gen").selectedIndex.id
        fetch(`../server/insertGame.php?name=${name}&developer=${dev}&genre=${gen}&releaseDate=${rel}`)
        .then(response=>response.text())
        .then(data=>console.log(data? "sikeres":"hiba"))


    }

</script>