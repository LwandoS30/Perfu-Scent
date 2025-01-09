<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Users</title>
</head>
<body>
    <div class="container my-5">
        <h1 align = "center">Users</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Gander</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Email Address</th>
                <th scope="col">Street Address</th>
                <th scope="col">City</th>
                <th scope="col">Postal Code</th>
                <th scope="col">Province</th>
                </tr>
            </thead>
            <tbody>

            <?php
                 //Insert data to database
                 require_once "database.php";

                 //Test connection
                 if(!$conn)
                {
                    die("Connection Failed!");
                }

                 //get email from the databbase
                  $sql = "SELECT * FROM users";

                  //assign data from database to a variable
                  $result = mysqli_query($conn, $sql);

                  //Load data from database
                  while($row=mysqli_fetch_array($result))
                  {
                    //to declared variables
                    //assigning data 
                        $id = $row["id"];
                        $name = $row["name"];
                        $surname = $row["surname"];
                        $cellnumber = $row["cellnumber"];
                        $gender = $row["gender"];
                        $email = $row["email"];
                        $streetaddress = $row["streetaddress"];
                        $city = $row["city"];
                        $postalcode = $row["postalcode"];
                        $province = $row["province"];
                    //data from the database
                    echo " <tr>
                        <th scope='row'>$id</th>
                        <td>$name</td>
                        <td>$surname</td>
                        <td>$cellnumber</td>
                        <td>$gender</td>
                        <td>$email</td>
                        <td>$streetaddress</td>
                        <td>$city</td>
                        <td>$postalcode</td>
                        <td>$province</td>

                        <td>
                            <a class = 'btn btn-primary btn-sm' href = ''>Edit</a>
                            <a class = 'btn btn-danger btn-sm' href = ''>Delete</a>
                        </td>
                
                        </tr>";
                }
            ?>    
            </tbody>
            </table>

    </div>
</body>
</html>