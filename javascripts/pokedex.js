$(document).ready(function(){
    //API -> https://raw.githubusercontent.com/cesarjakub/WA_Project_Final/master/json/pokemons.json
    
    function getIDs(){
        $.ajax({
            url: `https://raw.githubusercontent.com/cesarjakub/WA_Project_Final/master/json/pokemons.json`,
            type: "GET",
            data: {
            },
            success: function (result) {
              console.log(result["pokemons"]);
            },
            error: function (error) {
                console.log(error);
            },
        });
    }
    getIDs();

});