<div class="container">
            <div class="d-flex justify-content-center"><h1>Játékok</div>
            <select id="gameSelect">Műfajon belüli keresés</select>
            <table class="table table-striped">
            <thead class="thead-dark sticky-top">
                <th>Id</th>
                <th>Név</th>
                <th>Fejlesztő</th>
                <th>Műfaj</th>
                <th>Kiadási dátum</th>
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
            tbl+=`<tr><td>${obj.id}</td><td>${obj.name}</td><td>${obj.developer}</td><td>${obj.genrename}</td><td>${obj.releaseDate}</td></tr>`
            document.querySelector("tbody").innerHTML=tbl
        }
    }

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

    document.querySelector("select").addEventListener("change", renderFilter)

    function renderFilter(e){
    fetch(`../server/readFilter.php?name=${e.target.value}`)
        .then(response=>response.json())
        .then(data=>render(data))
    }

</script>