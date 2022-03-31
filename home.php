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
    <meta name="viewport" content="width=401">
    <title>Home</title>
    <link rel="icon" type="image/png" href="img/home3.png"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <?php
        include_once 'nav.php';
    ?>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel" style="width: 100%;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ab">
          <div class="carousel-item active">
            <img src="img/front.jpg" class="d-block image-fluid100 zoom ab" alt="house">
            <div class="carousel-caption d-none d-md-block">
                <div class="card m-3 rounded ee img-zoom" style="width: 18rem;height: 360px;background-color: rgba(0, 0, 0, 0.575);">
                    <div class="card-body view">
                        <h5 class="card-title">Memon House</h5>
                        <p class="card-text">Fully Furnished double story Banglow at the perfect location.</p>
                        <h4>Rs. 11 Crore</h4>  
                        <img src="img/svg_icon/location.svg" alt="location" class="imgg">DHA,Karachi
                        <a href="#"><button class="btn btn-outline-info">More Details</button></a>
                        <hr class="style2">
                        <div class="card-footer info">  
                            8<img src="img/svg_icon/bath.svg" alt="" class="imag">
                            8<img src="img/svg_icon/bed.svg" alt="" class="imag">
                            500 sq.yards<img src="img/svg_icon/square.svg" alt="" class="imag">
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/front3.jpg" class="d-block image-fluid w-100 zoom ab" alt="house1">
            <div class="carousel-caption d-none d-md-block">
                <div class="card m-3 rounded ee img-zoom" style="width: 18rem;height: 360px;background-color: rgba(0, 0, 0, 0.575);">
                    <div class="card-body view">
                        <h5 class="card-title">The Villa</h5>
                        <p class="card-text">Luxury villa for sale in Karachi. Available at a reasonable price.</p>
                        <h4>Rs. 7 Crore</h4>  
                        <img src="img/svg_icon/location.svg" alt="location" class="imgg">Gulberg, Lahore
                        <a href="#"><button class="btn btn-outline-info">More Details</button></a>
                        <hr class="style2">
                        <div class="card-footer info">  
                            6<img src="img/svg_icon/bath.svg" alt="" class="imag">
                            6<img src="img/svg_icon/bed.svg" alt="" class="imag">
                            450 sq.yards<img src="img/svg_icon/square.svg" alt="" class="imag">
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/house.jpg" class="d-block image-fluid w-100 ab" alt="house2">
            <div class="carousel-caption d-none d-md-block">
                <div class="card m-3 rounded ee img-zoom" style="width: 18rem;height: 360px;background-color: rgba(0, 0, 0, 0.575);">
                    <div class="card-body view">
                        <h5 class="card-title">Kings' Home</h5>
                        <p class="card-text">Single story banglow with parking and lawn available on Sale</p>
                        <h4>Rs. 10 Crore</h4>  
                        <img src="img/svg_icon/location.svg" alt="location" class="imgg">G-12, Islamabad
                        <a href="#"><button class="btn btn-outline-info">More Details</button></a>
                        <hr class="style2">
                        <div class="card-footer info">  
                            6<img src="img/svg_icon/bath.svg" alt="" class="imag">
                            6<img src="img/svg_icon/bed.svg" alt="" class="imag">
                            500 sq.yards<img src="img/svg_icon/square.svg" alt="" class="imag">
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    <div class="container-fluid">
    <div class="p-3 text-center">
        <button class="btn btn-secondary m-3 rounded hh" onclick="myFunction()">Buy</button>
        <button class="btn btn-secondary rounded hh" onclick="myFunction2()">Rent</button>
        <div class="row pr-3 pl-3 w-100" id="myDIV" style="display: none;">
            <div class="mx-auto">
                <h2 class="pp">Search Properties to Buy</h2>
            </div>
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
                        $sql2 = mysqli_query($conn, "SELECT pkHouseID,NumberOfRooms FROM houselisting");
                        echo "<option selected disabled>Bedroom</option>";
                        while ($row = $sql2->fetch_assoc()){
                        echo "<option value=" .$row['pkHouseID'] .">" .$row['NumberOfRooms'] ."</option>";
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
                        $sql2 = mysqli_query($conn, "SELECT Area FROM houselisting");
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
        <div class="row pr-3 pl-3" id="myDIV2" style="display: none;">
            <div class="mx-auto">
                <h2 class="pp">Search Properties on Rent</h2>
            </div>
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
                        $sql2 = mysqli_query($conn, "SELECT pkHouseID,NumberOfRooms FROM houselisting");
                        echo "<option selected disabled>Bedroom</option>";
                        while ($row = $sql2->fetch_assoc()){
                        echo "<option value=" .$row['pkHouseID'] .">" .$row['NumberOfRooms'] ."</option>";
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
                        $sql2 = mysqli_query($conn, "SELECT Area FROM houselisting");
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
    </div>
    </div>
    <div class="container-fluid">
        <br><h2 id="heading">Featured Properties</h2><br>
        <div class="row">
            <div class="col-xl-4 col-md-6 col-lg-4 mb-4">
                <div class="card mr-2 rounded img-zoom" style="width: 21rem;">
                    <div class="card-img-caption">
                        <p class="card-text m-2 p-2 type rounded-pill">For Sale</p>
                        <img class="card-img-top imggg image-fluid rounded" src="img/front2.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Home</h5>
                        <p class="card-text">On Sale double story banglow with lawn and car parking.</p>
                        <i class='fas fa-money-bill' style="color: black;font-size:24px"></i><h4>Rs. 7.5 Crore</h4>  
                        <img src="img/svg_icon/location.svg" alt="location" class="imgg">Bahadurabad,Karachi
                        <a href="#"><button class="btn btn-outline-secondary">More Details</button></a>
                        <hr class="style2">
                        <div class="card-footer text-muted info">  
                            6<img src="img/svg_icon/bath.svg" alt="" class="imgg">
                            6<img src="img/svg_icon/bed.svg" alt="" class="imgg">
                            450 sq.yards<img src="img/svg_icon/square.svg" alt="" class="imgg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 mb-4">
                <div class="card mr-2 rounded img-zoom" style="width: 21rem;">
                    <div class="card-img-caption">
                        <p class="card-text m-2 p-2 type2 rounded-pill">For Rent</p>
                        <img class="card-img-top imggg image-fluid rounded" src="img/house1.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">The House</h5>
                        <p class="card-text">Available on rent.</p><br>
                        <i class='fas fa-money-bill' style="color: black;font-size:24px"></i><h4>Rs. 300000/Month</h4>  
                        <img src="img/svg_icon/location.svg" alt="location" class="imgg">G-4, Islamabad
                        <br><a href="#"><button class="btn btn-outline-secondary">More Details</button></a>
                        <hr class="style2">
                        <div class="card-footer text-muted info">  
                            6<img src="img/svg_icon/bath.svg" alt="" class="imgg">
                            6<img src="img/svg_icon/bed.svg" alt="" class="imgg">
                            500 sq.yards<img src="img/svg_icon/square.svg" alt="" class="imgg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 mb-4">
                <div class="card mr-2 rounded img-zoom" style="width: 21rem;">
                    <div class="card-img-caption">
                        <p class="card-text m-2 p-2 type rounded-pill">For Sale</p>
                        <img class="card-img-top imggg image-fluid rounded" src="img/building1.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">The Creek Vista</h5>
                        <p class="card-text">4 bed apartment available in the Creek Vista at 3rd floor.</p>
                        <i class='fas fa-money-bill' style="color: black;font-size:24px"></i><h4>Rs. 2.5 Crore</h4>  
                        <img src="img/svg_icon/location.svg" alt="location" class="imgg">Defense,Karachi
                        <br><a href="#"><button class="btn btn-outline-secondary">More Details</button></a>
                        <hr class="style2">
                        <div class="card-footer text-muted info">  
                            4<img src="img/svg_icon/bath.svg" alt="" class="imgg">
                            4<img src="img/svg_icon/bed.svg" alt="" class="imgg">
                            250 sq.yards<img src="img/svg_icon/square.svg" alt="" class="imgg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 mb-4">
                <div class="card mr-2 rounded img-zoom" style="width: 21rem;">
                    <div class="card-img-caption">
                        <p class="card-text m-2 p-2 type2 rounded-pill">For Rent</p>
                        <img class="card-img-top imggg image-fluid rounded" src="img/footer.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Home</h5>
                        <p class="card-text">8 Bed double story banglow available on rent.</p>
                        <i class='fas fa-money-bill' style="color: black;font-size:24px"></i><h4>Rs. 890000/Month</h4>  
                        <img src="img/svg_icon/location.svg" alt="location" class="imgg">Allama Iqbal Town, Lahore
                        <a href="#"><button class="btn btn-outline-secondary">More Details</button></a>
                        <hr class="style2">
                        <div class="card-footer text-muted info">  
                            6<img src="img/svg_icon/bath.svg" alt="" class="imgg">
                            8<img src="img/svg_icon/bed.svg" alt="" class="imgg">
                            600 sq.yards<img src="img/svg_icon/square.svg" alt="" class="imgg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 mb-4">
                <div class="card mr-2 img-zoom" style="width: 21rem;">
                    <div class="card-img-caption">
                        <p class="card-text m-2 p-2 type rounded-pill">For Sale</p>
                        <img class="card-img-top imggg image-fluid rounded" src="img/house.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Villa</h5>
                        <p class="card-text">Available for Sale. Banglow at a perfect location</p>
                        <i class='fas fa-money-bill' style="color: black;font-size:24px"></i><h4>Rs. 6 Crore</h4>  
                        <img src="img/svg_icon/location.svg" alt="location" class="imgg">Bahadurabad,Karachi
                        <a href="#"><button class="btn btn-outline-secondary">More Details</button></a>
                        <hr class="style2">
                        <div class="card-footer text-muted info">  
                            5<img src="img/svg_icon/bath.svg" alt="" class="imgg">
                            5<img src="img/svg_icon/bed.svg" alt="" class="imgg">
                            500 sq.yards<img src="img/svg_icon/square.svg" alt="" class="imgg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 mb-4">
                <div class="card mr-2 rounded img-zoom" style="width: 21rem;">
                    <div class="card-img-caption">
                        <p class="card-text m-2 p-2 type rounded-pill">For Sale</p>
                        <img class="card-img-top imggg image-fluid rounded" src="img/building2.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Bahria Apartments</h5>
                        <p class="card-text">2 Bed Apartment Available on Sale on the 12th Floor on the Bahria Apartments</p>
                        <i class='fas fa-money-bill' style="color: black;font-size:24px"></i><h4>Rs. 3 Crore</h4>  
                        <img src="img/svg_icon/location.svg" alt="location" class="imgg">Gulshan-e-Iqbal,Karachi
                        <a href="#"><button class="btn btn-outline-secondary">More Details</button></a>
                        <hr class="style2">
                        <div class="card-footer text-muted info">  
                            3<img src="img/svg_icon/bath.svg" alt="" class="imgg">
                            2<img src="img/svg_icon/bed.svg" alt="" class="imgg">
                            200 sq.yards<img src="img/svg_icon/square.svg" alt="" class="imgg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="sale">
                <h1 class="m-4 add">Add Your Property for Sale</h1>
                <a href="sell.php"><button class="btn btn-info hh m-5">+Add</button></a>
            </div>
        </div>
    </div><br><br>
    <div class="container">
        <div class="row">
            <div class="saleee">
                <h1 class="m-4 add" >Contact Our Agents </h1>
                <a href="agents.php"><button class="btn btn-info hh m-5">Contact Agents</button></a>
            </div>
        </div>    
    </div>
    <?php
        include_once 'foot.php';
    ?>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- the following function is used for the buy and rent button on homepage. -->
    <script>function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }</script>
    <script>function myFunction2() {
        var x = document.getElementById("myDIV2");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }

      }</script>
    <script>$('.carousel').carousel()</script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>