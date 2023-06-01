<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="shortcut icon" href="../src/img/icon.JPG" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">
    <script src="../javascripts/pokedex.js" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokeši</title>
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md">
                <div class="container-fluid">
                    <img src="../src/img/icon.JPG" alt="Logo" width="35" height="35" class="d-inline-block align-text-top">
                    <a class="navbar-brand" href="index.html">Pokemon Library</a>
                
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                        <ul class="nav nav-underline">
                            <li class="nav-item">
                                <a class="nav-link text-black" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-black" href="Pokedex.php">Pokédex</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="SearchPokemon.php">Search</a>
                            </li>
                            <?php
                                session_start();
                                if(!isset($_SESSION["user"])){
                                    echo "<li class='nav-item'>
                                    <a class='nav-link text-black' href='login_reg/login.php'>Login</a>
                                    </li>";
                                    if(!isset($_SESSION["user"]) || $_SESSION["user"] !== true){
                                        header("Location: ../index.php");
                                    }
                                }else{
                                    echo "<li class='nav-item'>
                                        <a class='nav-link text-black' href='../login_reg/logout.php'>LogOut</a>
                                        </li>";
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="m-3">
        <div class="container rounded bg-body-tertiary">
            <div class="maintext d-flex flex-wrap justify-content-center border-bottom"> 
                <h2 class="m-3 ">Pokédex</h2>
            </div>
            <div class="cardstable">
                <div class="cardTable d-flex flex-wrap justify-content-center">
                    

                    
                </div>
                <div class="loadMore d-flex flex-wrap justify-content-center m-3">
                    <button type="button" class="loadMoreBtn btn btn-primary m-5">Load More</button>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Jakub César</span>
          </div>
      
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="https://github.com/cesarjakub" target="_blank"><img src="../src/svg/github.svg" alt="github"></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="https://www.spsejecna.cz/" target="_blank"><img src="../src/svg/mortarboard.svg" alt="school"></a></li>
          </ul>
        </footer>
    </div>

</body>
</html>