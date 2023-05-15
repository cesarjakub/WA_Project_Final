$(document).ready(function(){
    // API -> https://pokeapi.co/api/v2/pokemon/ditto


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