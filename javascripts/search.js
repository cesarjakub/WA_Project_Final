$(document).ready(function(){
    // API -> https://pokeapi.co/api/v2/pokemon/ditto

    function card(img, name, rank){
        let text = `
        <div class="card m-3 mb-4" style="width: 18rem;">
        <img src="${img}" class="card-img-top" alt="${name}">
            <div class="card-body">
                <h5 class="card-title">Name> ${name}</h5>
                <p class="card-text">Rank> ${rank}</p>
                <button type="button" class="btn btn-primary"><img src="../src/svg/star.svg" alt="star"></button>
            </div>
        </div>`;
        return text;
    }

    function getIDFromAPI(id){
        $.ajax({
            url: `https://pokeapi.co/api/v2/pokemon/${id}`,
            type: "GET",
            data: {
              id,
            },
            success: function (result) {
              console.log(result);
            },
            error: function (error) {
                console.log(error);
            },
        });
    }

    function getSearchInput(){
        let val = $(".searchInput").val();
        return val.toLowerCase();
    }

    $(".buttonInput").on("click", function(){
        console.log(getIDFromAPI(getSearchInput()));
    });

});