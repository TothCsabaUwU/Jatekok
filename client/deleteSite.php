<div class="container">
            <div class="d-flex justify-content-center"><h1>Játék törlése</div>
            <table class="table table-striped">
            <thead class="thead-dark sticky-top">
                <th>Id</th>
                <th>Név</th>
                <th>Fejlesztő</th>
                <th>Műfaj</th>
                <th>Kiadási dátum</th>
                <th>&nbsp;</th>
            </div>
            <tbody>

            </tbody>
        </table>
</div>

<script>


fetch("../server/readAll.php")
    .then(response=>response.json())
    .then(data=>render(data))

    function render(data){
        let tbl=""
        for(obj of data){
            tbl+=`<tr><td>${obj.id}</td><td>${obj.name}</td><td>${obj.developer}</td><td>${obj.genrename}</td><td>${obj.releaseDate}</td>
            <td class="btn btn-danger" id="${obj.id}" onclick="del(this)">Törlés</td></tr>`
            document.querySelector("tbody").innerHTML=tbl
        }
    }

    function del(obj){
        fetch(`../server/deleteGame.php?id=${obj.id}`)
    .then(response=>response.text())

    fetch("../server/readAll.php")
    .then(response=>response.json())
    .then(data=>render(data))

    }

</script>