<?php
include('database.php');
    if(isset($_POST['search'])){

        $type = $_POST['type'];
        $city = $_POST['city'];
        $location = $_POST['location'];
        $price = $_POST['price'];
        $area = $_POST['area'];
        $bed = $_POST['bed'];
        $bath = $_POST['bath'];
   
    //     $sql = "SELECT * FROM houselisting WHERE fkHouseTypeId='$type' and fkCityId='$city' and Location='$location' and Price='$price'
    //                 and NumberOfRooms='$bed' and fkListingStatusID=1";

    // if (mysqli_query($conn, $sql)) {
    //     console.log("data" .$sql);
    //     echo "DATA:" .$sql;
    
    // } else {
    //     console.log("Error: " . $sql . " " . mysqli_error($conn));
    //     echo "Error: " . $sql . " " . mysqli_error($conn);
    // }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=400">
    <title>Buy Property</title>
    <link rel="icon" type="image/png" href="img/home3.png"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <?php
    include_once 'nav.php';
    ?>
    <div class="container-fluid  w-100 p-3 buyy">
        <h1 class="buy mb-3">Find Properties to Buy</h1>
        <form action="" method='post'>
            <div class="row shadow p-3 mb-5 rounded bggg">
                <div class="col-auto col-lg-3 mb-2">
                    <div>
                    <select id="inputState" class="form-control" name="city">
                        <?php 
                        $sql = mysqli_query($conn, "SELECT pkCityId,Name FROM city");
                        echo "<option selected disabled>City</option>";
                        while ($row = $sql->fetch_assoc()){
                        echo "<option value=". $row['pkCityId'] . ">" . $row['Name'] . "</option>";
                        }
                        ?>
                    </select>
                    </div>
                </div>
                <div class="col-auto col-lg-3 mb-2">
                    <div>
                        <input type="input" class="form-control" name="location" placeholder="Location">
                    </div>
                </div>
                
                <div class="col-auto col-lg-3 mb-2">
                    <select class="form-control" name="type">
                        <?php 
                        $sql2 = mysqli_query($conn, "SELECT pkhousetypeId,Title FROM housetype");
                        echo "<option selected disabled>Type</option>";
                        while ($row = $sql2->fetch_assoc()){
                        echo "<option value=". $row['pkhousetypeId'] . ">" . $row['Title'] . "</option>";
                        }
                        ?>
                    </select>
                </div>


                <div class="col-auto col-lg-3 mb-2">
                    <select class="form-control" name="bed">
                        <?php 
                            $sql2 = mysqli_query($conn, "SELECT DISTINCT(NumberOfRooms) FROM houselisting");
                            echo "<option selected disabled>Bedroom</option>";
                            while ($row = $sql2->fetch_assoc()){
                            echo "<option value=" .$row['NumberOfRooms'] .">" .$row['NumberOfRooms'] ."</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="col-auto col-lg-3 mb-2">
                    <select class="form-control" name='bath'>
                        <option selected disabled>Bathrooms</option>
                        <option value="">All</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5+</option>
                    </select>
                </div>

                <div class="col-auto col-lg-3 mb-2">
                    <select class="form-control" name='area'>
                    <?php 
                        $sql2 = mysqli_query($conn, "SELECT DISTINCT(Area) FROM houselisting");
                        echo "<option selected disabled>Area (sq.yards)</option>";
                        while ($row = $sql2->fetch_assoc()){
                        echo "<option value=". $row['Area'] .">" . $row['Area']. "</option>";
                        }
                    ?>
                    </select>
                </div>
                <div class="col-auto col-lg-3 mb-2">
                <select class="form-control" name='price'>
                    <?php 
                        $sql2 = mysqli_query($conn, "SELECT Price FROM houselisting");
                        echo "<option selected disabled>Price (Rs)</option>";
                        while ($row = $sql2->fetch_assoc()){
                        echo "<option value=". $row['Price'] .">" . $row['Price']. "</option>";
                        }
                    ?>
                </select>
                </div>

                <div class="col-auto col-lg-3 mb-2">
                    <button type="submit" name='search' class="btn btn-secondary">Search</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container-fluid">
        <br><h2 id="heading">Featured Properties</h2><br><br>
        <div class='row'>
            <div class='col-md-4 col-md-6 ml-1 col-lg-4 mb-4'>
                <div class='col-md-4 col-md-6 col-lg-4 mb-4'>
                    <div class='card m-2 rounded img-zoom' style='width: 21rem;'>
                        <div class="card-img-caption">
                            <p class="card-text m-2 p-2 type rounded-pill">For Sale</p>
                            <img class="card-img-top imggg image-fluid rounded" src="img/front2.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <?php
                                $sql = mysqli_query($conn, "SELECT Title from housetype where pkHouseTypeID='$type'");
                                while ($row = $sql->fetch_assoc()){
                                    echo "<h5 class='card-title'>" .$row['Title'] ."</h5>";
                                }
                            ?>
                            <p class="card-text">Available for Sale in a perfect Location. Best for your Family.</p>
                            <i class='fas fa-money-bill' style="color: black;font-size:24px"></i>
                            <?php
                                $sql = mysqli_query($conn, "SELECT Price from houselisting where Price='$price'");
                                while ($row = $sql->fetch_assoc()) {
                                    echo "<h4>" .$row['Price'] ."Rs</h4>";
                                }
                            ?> 
                            <?php
                                $sql = mysqli_query($conn, "SELECT Location from houselisting where Location='$location'");
                                while ($row = $sql->fetch_assoc()){
                                    echo "<img src='img/svg_icon/location.svg' alt='location' class='imgg'>" .$row['Location'];
                                }
                            ?><br>
                            <a href="#" data-toggle="modal" data-target="#housedetails"><button class="btn btn-outline-secondary">More Details</button></a>
                            <hr class="style2">
                            <div class="card-footer text-muted info">  
                                <?php
                                    $sql = mysqli_query($conn, "SELECT NumberOfRooms from houselisting where NumberOfRooms='$bed'");
                                    while ($row = $sql->fetch_assoc()){
                                        echo $row['NumberOfRooms'] ."<img src='img/svg_icon/bed.svg' alt='' class='imgg'>";
                                        echo $bath ."<img src='img/svg_icon/bath.svg' alt='' class='imgg'>";
                                    }
                                    $sql = mysqli_query($conn, "SELECT Area from houselisting where Area='$area'");
                                    while ($row = $sql->fetch_assoc()){
                                        echo $row['Area'] ." sq.yards<img src='img/svg_icon/square.svg' alt='' class='imgg'>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade rounded" id="housedetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="model-title w-100 text-center">Property Details</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img class="card-img-top imggg image-fluid rounded" src="img/front2.jpg" alt="Card image cap">
                <p class="text-center m-2 p-2 type rounded-pill">For Sale</p>
                <div class="card-body">
                    <?php
                        $sql = mysqli_query($conn, "SELECT Title from housetype where pkHouseTypeID='$type'");
                        while ($row = $sql->fetch_assoc()){
                            echo "<h5 class='card-title'>" .$row['Title'] ."</h5>";
                        }
                    ?>
                    <p class="card-text">Available for Sale in a perfect Location. Best for your Family in a reasonable price.</p>
                    <i class='fas fa-money-bill' style="color: black;font-size:24px"></i>
                    <?php
                        $sql = mysqli_query($conn, "SELECT Price from houselisting where Price='$price'");
                        while ($row = $sql->fetch_assoc()) {
                            echo "<h4>" .$row['Price'] ."Rs</h4>";
                        }
                    ?> 
                    <?php
                        $sql = mysqli_query($conn, "SELECT Location from houselisting where Location='$location'");
                        while ($row = $sql->fetch_assoc()){
                            echo "<h6>Location : " .$row['Location'] ."</h6>";
                        }
                    ?>
                    <hr class="style2">
                    <div class="card-footer text-muted info">  
                        <?php
                            $sql = mysqli_query($conn, "SELECT NumberOfRooms from houselisting where NumberOfRooms='$bed'");
                            while ($row = $sql->fetch_assoc()){
                                echo "<h6> Bedrooms  : " .$row['NumberOfRooms'] ."<img src='img/svg_icon/bed.svg' alt='' class='imgg'></h6>";
                                echo "<h6> Bathrooms : " .$bath ."<img src='img/svg_icon/bath.svg' alt='' class='imgg'></h6>";
                            }
                            $sql = mysqli_query($conn, "SELECT Area from houselisting where Area='$area'");
                            while ($row = $sql->fetch_assoc()){
                                echo "<h6> Area : " .$row['Area'] ." sq.yards<img src='img/svg_icon/square.svg' alt='' class='imgg'></h6>";
                            }
                        ?>
                    </div><br>
                    <!-- <div class='text-center'>
                    <a href="buyproperty.php" style="text-decoration: none; color: white;"><button class="btn btn-outline-secondary">Buy this Property</button></a></div> -->
                </div>                
            </div> 
            </div> 
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="rent">
                <h1 class="m-4 add">Find Properties Available on Rent</h1>
                <a href="rent.php" style="text-decoration: none;color: white;"><button class="btn btn-secondary hh m-5">+Find</a></button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="sale">
                <h1 class="m-4 add">Add Your Property for Sale</h1>
                <a href="sell.php"><button class="btn btn-info hh m-5">+Add</button></a>
            </div>
        </div>
    </div>
    <?php
        include_once 'foot.php';
    ?>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>