<?php
    session_start();
    include('database.php');

    if(isset($_SESSION['Users'])){
            header('Location: sell_property.php');
    }

    if(isset($_POST['login'])){

        $user= $_POST['username'];
        $pass=$_POST['password'];

        if(empty($user) ){
            $error="please enter a username ";
        }
        else if(empty($pass) ){
            $error="please enter a password";
        }
            
        else{
            $query="select * from applicationuser where username='$user' and password='$pass'";
            $sql=mysqli_query($conn,$query);
            $reslt = mysqli_num_rows($sql);
            $rec = mysqli_fetch_assoc($sql);
            if($reslt > 0)
            {
                $_SESSION["Users"] = $rec["username"];
                header('Location: sell_property.php');
                $_SESSION['user_logged_in'] = true;
                /*session_destroy();*/
            }
            else
            {
                $error=" Incorrect username and password";	
            }	
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=400">
    <title>Sell Property</title>
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
    <br><br><br><br>
    <?php
        include_once 'nav.php';
        if(isset($error)){
        echo $error;
    } 
    ?>
    <form class="container pt-3 pb-2 shadow" action="" method="post">
        <div class="container-fluid">
        <h2 id="heading">Login</h2><br>
            <div class="form-row m-3">
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Username</label>
                    <input type="text" name='username' class="form-control" placeholder="Enter your Username">
                </div>
                <div class="form-group col-md-4"></div>
            </div>
            <div class="form-row m-3">
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Password</label>
                    <input type="password" name='password' class="form-control" placeholder="Enter your Password">
                </div>
                <div class="form-group col-md-4"></div>
            </div>
            <div class="form-row m-3">
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-8">
                    <button type="submit" name='login' class="btn btn-outline-secondary col-md-2">Login</button><hr>
                    <p>Forgot Password? <a href="#" class="text-secondary">Click Here</a></p>
                    <div>Not a member yet? <a href="#" class="text-secondary"><a class='text-secondary' href="signup.php">Sign Up</a></a></div>
                </div>
            </div>
        </div>
    </form>
    <?php
        include_once 'foot.php';
    ?>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>