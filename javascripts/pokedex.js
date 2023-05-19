$(document).ready(function () {

  let currentCards = 20;
  let page = 0;


  function card(img, name, id) {
    let text = `<div class="karticka card m-3 mb-4" style="width: 18rem;">
            <img src="${img}" class="card-img-top" alt="${name}">
                <div class="card-body">
                   <h5 class="card-title">Name: ${name}</h5>
                    <p class="card-text">Rank: ${id}</p>
                </div>
            </div>`;
    return text;
  }

  function getIDFromAPI(id) {
    $.ajax({
      url: `https://pokeapi.co/api/v2/pokemon/${id}`,
      type: "GET",
      data: {
        id,
      },
      success: function (result) {
        $(".cardTable").append(
          card(result.sprites.front_default, result.name, result.id)
        );
      },
      error: function (error) {
        console.log(error);
      },
    });
  }


  function printCards(){
    for (let i = page; i < currentCards; i++) {
      getIDFromAPI(i+1);
    }
  }

  printCards();

  $(".loadMoreBtn").on("click", function(){
    currentCards+=20;
    page+=20;
    printCards();
    if(currentCards > 900){
      $(".loadMoreBtn").addClass("disabled");
    }
  });

  



});
