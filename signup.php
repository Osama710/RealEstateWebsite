<?php 
    include_once 'database.php';
    if(isset($_POST['reg'])){

        $name=$_POST['name'];
        $number=$_POST['number'];
        $email=$_POST['email'];
        $cnic=$_POST['cnic'];
        $country=$_POST['country'];
        $city=$_POST['city'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $address=$_POST['address'];

        $sql = "INSERT INTO applicationuser (Name,PhoneNumber,Email,CNIC,fkCountryID,fkCityID,
                username,address,password,CreatedOn,CreatedBy)
                VALUES ('$name', '$number', '$email', '$cnic', 1, 1, '$username', '$address', '$password','2021/02/01', 'admin')";
        if (mysqli_query($conn, $sql)) {
            echo "New record saved successfully!";
        }
        else {
            console.log("Error: " . $sql . " " . mysqli_error($conn));
            echo "Error: " .$sql ."" . mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=400">
    <title>Signup</title>
    <link rel="icon" type="image/png" href="img/home3.png"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    label{
        display: table-row-group;
    }
    </style>
</head>
<body class='text-center'>
    <br><br><br><br><br>
    <form class="container pt-3 pb-2 shadow" action="" method="post">
    <h2 id="heading">Sign Up</h2><br>
        <div class="container-fluid">
            <div class="form-row m-3">
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4">
                    <label>Name</label>
                    <input type="text" name='name' class="form-control" placeholder="Enter your Name">
                </div>
                <div class="form-group col-md-4">
                    <label>Phone Number</label>
                    <input type="number" name = 'number' class="form-control" placeholder="Enter your Phone Number">
                </div>
                <div class="form-group col-md-2"></div>
            </div>
            <div class="form-row m-3">
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4">
                    <label>Email</label>
                    <input type="email" name='email' class="form-control" placeholder="Enter your Email">
                </div>
                <div class="form-group col-md-4 right">
                    <label>CNIC</label>
                    <input type="text" name='cnic' class="form-control" placeholder="Enter your CNIC">
                </div>
                <div class="form-group col-md-2"></div>
            </div>
            <div class="form-row m-3">
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4">
                    <label>Country</label>
                    <input type="text" name='country' class="form-control" placeholder="Enter your Country">
                </div>
                <div class="form-group col-md-4 right">
                    <label>City</label>
                    <input type="text" name='city' class="form-control" placeholder="Enter your City">
                </div>
                <div class="form-group col-md-2"></div>
            </div>
            <div class="form-row m-3">
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4">
                    <label>Username</label>
                    <input type="text" name='username' class="form-control" placeholder="Enter a Username">
                </div>
                <div class="form-group col-md-4 right">
                    <label>Password</label>
                    <input type="password" name='password' class="form-control" placeholder="Enter a Password">
                </div>
                <div class="form-group col-md-2"></div>
            </div>
            <div class="form-row m-3">
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-8">
                    <label>Address</label>
                    <input type="text" name='address' class="form-control" placeholder="Enter your Address">
                </div>
                <div class="form-group col-md-2"></div>
            </div>
            <div class="form-row m-3">
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-8">
                    <button type="submit" name='reg' class="btn btn-outline-secondary col-md-2">Register</button><hr>
                    <div>Already a member? <a href="#" class="text-secondary"><a class='text-secondary' href="login.php">Login</a></a></div>
                </div>
            </div>
        </div>
    </form>
    <?php
        include_once 'nav.php';

    ?><br><br><br>
    <?php
        include_once 'foot.php';
    ?>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>