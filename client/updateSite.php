<div class="container">
            <div class="d-flex justify-content-center"><h1>Játék nevének módosítása</div>
            <table class="table table-striped">
            <thead class="thead-dark sticky-top">
                <th>Id</th>
                <th>Név</th>
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
            tbl+=`<tr><td>${obj.id}</td><td contenteditable>${obj.name}</td><td class="btn btn-primary" id="${obj.id}" onclick="upd(this)">Átnevezés</td></tr>`
            document.querySelector("tbody").innerHTML=tbl
        }
    }

    function upd(obj){
    let name=obj.previousElementSibling.textContent
    fetch(`../server/updateGame.php?id=${obj.id}&name=${name}`)
    .then(response=>response.text())
    .then(data=>console.log(data))
    }

</script>