<?php
    session_start();
    $_SESSION["name"] = "Dashboard";

    if(isset($_POST["user"]))
    {
        header("Location: login.php");
    }

   

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Update profile</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//cdjs.cloudflare.com/ajx/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    </head>
    <body>
        <link rel="stylesheet" href="css/signup.css">

        <div class="container my-4" id="signup">

            <?php
                if(isset($_POST["signup"]))
                {
                    //variable declarations and assignment
                    $name = $_POST["fname"];
                    $surname = $_POST["lname"];
                    $cellnumber = $_POST["cellnumber"];
                    $gender = $_POST["gender"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $confirmpassword = $_POST["confirmpassword"];
                    $streetaddress = $_POST["street"];
                    $city = $_POST["city"];
                    $postalcode = $_POST["postalCode"];
                    $province = $_POST["province"];

                    //password encyption
                    $passwordhash = password_hash($password, PASSWORD_DEFAULT);
                    $confirmpasshash = password_hash($confirmpassword, PASSWORD_DEFAULT);
                    //error variable declaration
                    $errors = array();

                    //check if all values have been entered or provided by the user
                    if(empty($name) OR empty($surname) OR empty($cellnumber) OR empty($gender) OR empty($email) OR empty($password) 
                    OR empty($confirmpassword) OR empty($streetaddress) OR empty($city) OR empty($postalcode) OR empty($province))
                    {
                        array_push($errors,"All fields are required");
                    }
                    //email validation
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        array_push($errors,"Email is no valid");
                    }
                    //password characters if is greater or equal to 8 
                    if(strlen($password) < 8)
                    {
                        array_push($errors,"Password must be aleast 8 characters or more");
                    }
                    //confirm password if it matches 
                    if($password !== $confirmpassword)
                    {
                        array_push($errors,"Password does not matche");
                    }

                    //Insert data to database
                    require_once "database.php";

                   //get email from the databbase
                    $sql = "SELECT * FROM users WHERE email = '$email'";

                    //assign data from database to a variable
                    $result = mysqli_query($conn, $sql);

                    //count num of rows
                    $rowCount = mysqli_num_rows($result);

                     //check if the email does not exist to avoid duplicates
                     if($rowCount > 0)
                     {
                        array_push($errors,"Email already exists!");
                     }

                    // check if there are errors, if yes show error message
                    if(count($errors) > 0)
                    {
                        foreach($errors as $error)
                        {
                            echo"<div class= 'alert alert-danger'>$error</div>";
                        }
                    }
                    else
                    {
                        //save to database
                        $sql = "INSERT INTO users (name, surname, cellnumber, gender, email, password, 
                        confirmpassword, streetaddress, city, postalcode, province) VALUES(?,?,?,?,?,?,?,?,?,?,?)";

                        $stmt = mysqli_stmt_init($conn);
                        
                        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                            
                        if($prepareStmt)
                        {
                            mysqli_stmt_bind_param($stmt,"sssssssssss", $name, $surname, $cellnumber, $gender, $email, $passwordhash, 
                            $confirmpasshash, $streetaddress, $city, $postalcode, $province);
                            mysqli_stmt_execute($stmt);

                            echo "<div class='alert alert-success'>You signed up successfully!</div>";
                        }
                        else
                        {
                            die("Something went wrong!;");
                        }
                    }    
                }


            ?>
            <div class="forms">
                <div class="form-signup">   
                    
                    <span class="heading">Sign Up</span>
                    <br>
                    <span class="title">Personal Details</span>
                    
                    <form method="post" action="signup.php">
                        <div class="fields">
                            <div class="input-field">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" id="fname" placeholder="Enter First name" required>
                            </div>
    
                            <div class="input-field">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" id="lname" placeholder="Enter Last name" required>
                            </div>
    
                            <div class="input-field">
                                <label for="cellnumber">Cell number</label>
                                <input type="text" name="cellnumber" id="cellnumber" placeholder="Enter cell number" required>
                            </div>
                            
                            <div class="input-field">
                                <label for="gender">Gender</label>
                                <input type="text" name="gender" id="gender" placeholder="Choose gender" required>
                            </div>
    
                            <div class="input-field">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" placeholder="Enter email" required>
                            </div>
    
                            <div class="input-field">                            
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" placeholder="Enter password" required>
                            </div>
    
                            <div class="input-field">
                                <label for="confirmpassword">Confirm Password</label>
                                <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm  password" required>
                            </div>
                            
                            <div class="input-field">
                                <label for="street">Street Address</label>
                                <input type="text" name="street" id="street" placeholder="Enter street address" required>
                            </div>
    
                            <div class="input-field">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" placeholder="Enter city" required>
                            </div>
                           
                            <div class="input-field">
                                <label for="postalCode">Postal Code</label>
                                <input type="text" name="postalCode" id="postalCode" placeholder="Enter postal code" required>
                            </div>
    
                            <div class="input-field">
                                <label for="province">Province</label>
                                <input type="text" name="province" id="province" placeholder="Enter current province" required>
                            </div>
    
                            <div class="button">
                                <input class="btn"type="submit" value="Sign Up" name="signup">
                            </div>
                        </div>
                        

                    </form>
                    <br>
                    <p class="or">
                        ---------------------------------------------------OR-----------------------------------------------
                    </p>
                    <div class="icons">
                        <i class="fab fa-google"></i>
                    </div>
                    <div class="links">
                        <p>Already have an account?</p>
                        <a href="login.php">
                            <button id="loginbutton">Login</button>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>