<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../src/img/icon.png" type="image/x-icon">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokeši</title>
</head>
<body>
    <div class="container d-flex flex-wrap justify-content-center">
        <h2 class="m-3 border-bottom">REGISTER</h2>
    </div>
    <main class="m-3">
        <div class="container rounded bg-body-tertiary">
        <?php
            include "db_conn.php";
            if (isset($_POST["submit"])) {
                $userName = $_POST["uname"];
                $pass = $_POST["pass"];
                $passrep = $_POST["passrep"];

                $errors = array();

                $passhash = password_hash($pass, PASSWORD_DEFAULT);

                if(strlen($pass)<8){
                    array_push($errors, "Password must be 8 character");
                }
                if($pass!==$passrep){
                    array_push($errors, "Password does not match");
                }

                if(count($errors)>0){
                    foreach ($errors as $error) {
                        echo "<div class='alert alert-danger m-3' role='alert'>$error</div>";
                    }
                }else{
                    //require_once "db_conn.php";
                    $sqlInsert = "INSERT INTO users(username, password) VALUES('$userName', '$passhash')";
                    if (mysqli_query($conn, $sqlInsert)) {
                        echo "<div class='alert alert-success m-3' role='alert'>You are registered successfully.</div>";
                    }else{
                        die("Something went wrong");
                    }
                }

            }
        ?>
                <form action="register.php" method="post">
                    <div class="mb-3 m-2">
                        <label for="username" class="form-label mt-2">Username</label>
                        <input type="text" name="uname" class="form-control" id="username" require>
                    </div>
                    <div class="mb-3 m-2">
                        <label for="exampleInputPassword1" class="form-label mt-2">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" require>
                    </div>
                    <div class="mb-3 m-2">
                        <label for="exampleInputPassword2" class="form-label mt-2">Repeat Password</label>
                        <input type="password" name="passrep" class="form-control" id="exampleInputPassword2" require>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary m-2">Register</button>
                </form>
                <h7 class="m-2">Already have an account? <a href="../login_reg/login.php">Sign in</a></h7>
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