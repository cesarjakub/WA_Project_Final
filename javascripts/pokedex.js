$(document).ready(function(){
    //API -> https://raw.githubusercontent.com/cesarjakub/WA_Project_Final/master/json/pokemons.json
    let pokemonsPole = [];

    function getIDs(){
        $.ajax({
            url: "https://raw.githubusercontent.com/cesarjakub/WA_Project_Final/master/json/pokemons.json",
            dataType: "json",
            success: function (data) {
                console.log(data);
                pokemonsPole.push(data);
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
    console.log(pokemonsPole);
    getIDs();

});