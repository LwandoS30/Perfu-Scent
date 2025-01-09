<?php
    session_start();
    $_SESSION["name"] = "Dashboard";

    if(isset($_POST["user"]))
    {
        header("Location: Dashboard.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//cdjs.cloudflare.com/ajx/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <link rel="stylesheet" href="css/login.css">
        <div class="container" id="login">
            <?php
                if(isset($_POST["login"]))
                {
                    $email = $_POST["email"];
                    $password = $_POST["password"];                    

                    require_once "database.php";
                    $sql = "SELECT * FROM users WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    if($user)
                    {
                        if(password_verify($password, $user["password"]))
                        {
                            session_start();
                            $_SESSION["user"] = "yes";
                            header("Location: dashboard.php");
                            die();
                        }
                        else
                        {
                            echo "<div class = 'alert alert-danger'>Password does not match</div>";
                        }
                    }
                    else
                    {
                        echo "<div class ='alert alert-danger'>Email does not match!</div>";
                    }
                }
            ?>
            <div class="forms">
                <div class="form-login">   
                    <span class="title">Login</span>
                    
                    <form method="post" action="login.php">

                        <div class="input-field">
                            <input type="text" name ="email" placeholder="Enter email" required>
                            <i class="fas fa-user"></i>
                        </div>

                        <div class="input-field">
                            <input type="password" name ="password" placeholder="Enter password" required>
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>

                        <div>
                            <input class="btn"type="submit" value="Login" name="login">
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck">
                                <label for="logCheck" class="text">Remember me</label>
                            </div>

                            <a href="#" class="text">Forgot password?</a>

                        </div>

                    </form>
                    <br>
                    <p class="or">
                        ------------------Or---------------------
                    </p>
                    <div class="icons">
                        <i class="fab fa-google"></i>
                    </div>
                    <div class="links">
                        <p>Don't have an account?</p>
                        <a href="signup.php">
                            <button id="signup">Sign Up</button>
                        </a>
                        
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>