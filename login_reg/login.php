<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../src/img/icon.JPG" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokeši</title>
</head>
<body>
    <div class="container d-flex flex-wrap justify-content-center">
        <h2 class="m-3 border-bottom">LOGIN</h2>
    </div>
    <main class="m-3">
        <div class="container rounded bg-body-tertiary">
            <?php
                include "db_conn.php";
                
                $pocet;
                if (isset($_POST["login"])) {
                    $username = $_POST["username"];
                    $pass = $_POST["password"];

                    $sqlSelect = "SELECT * FROM users WHERE username = '$username'";
                    $res = mysqli_query($conn, $sqlSelect);
                    $user = mysqli_fetch_array($res, MYSQLI_ASSOC);

                    if($user){
                        if(password_verify($pass, $user["password"])){
                            session_start();
                            $_SESSION["user"] = "yes";
                            header("Location: ../index.php");
                            die();
                        }else{
                            echo "<div class='alert alert-danger m-3 errorMsg' role='alert'>
                        Password is wrong
                        </div>";
                        $pocet = $pocet + 1;
                        if ($failedAttempts >= 3) {
                            $file = '../logFile.txt';
                            $message = $username+" se snaží přihlásit";

                            $fileHandle = fopen($file, 'a');

                            fwrite($fileHandle, $message . "\n");

                            fclose($fileHandle);

                            $pocet = 0;
                        }
                        }
                    }else{
                        echo "<div class='alert alert-danger m-3 errorMsg' role='alert'>
                        Username is wrong
                        </div>";
                    }
                }
            ?>
                <form action="login.php" method="post">
                    <div class="mb-3 m-2">
                        <label for="username" class="form-label mt-2">Username</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                    </div>
                    <div class="mb-3 m-2">
                        <label for="exampleInputPassword1" class="form-label mt-2">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" require>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary m-2">login</button>
                </form>
                <h7 class="m-2">Or <a href="../login_reg/register.php">Sign up</a></h7><br>
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