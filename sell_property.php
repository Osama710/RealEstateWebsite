<?php 
    session_start();
    include('database.php');
    if(!isset($_SESSION['Users'])){
        header('Location: home.php');	
    }

    if(isset($_POST['sub'])){

        $staus = $_POST['status'];
        $type = $_POST['type'];
        $city = $_POST['city'];
        $location = $_POST['location'];
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $area = $_POST['area'];
        $noBed = $_POST['noBed'];
        $noBath = $_POST['noBath'];
        // $image = $_POST['image'];
        $f_name = $_POST['f_name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
   
        $sql = "INSERT INTO houselisting (fkHouseTypeId,fkListingStatusID,Location,fkCountryId,fkProvinceId,
                   fkCityId,NumberOfRooms,Price,IsApproved,AddedOn,AddedBy,Area)
        VALUES ('$type','$staus','$location',$city,$city,$city,'$noBed','$price',1,'2021/02/01',3,'$area')";
        

        if (mysqli_query($conn, $sql)) {
           echo "New record created successfully !";
           $last_id = $conn->insert_id;
        
        } else {
            console.log("Error: " . $sql . " " . mysqli_error($conn));
           echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        $name = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $target_dir = "image/";

        $query1 = "INSERT INTO images(Imagepath,fkHouseId) VALUES('".$target_dir.$name."',".$last_id.")";


        if (mysqli_query($conn, $query1)) {
            echo "New record created successfully !";
            if (! is_dir('image') ) mkdir ( 'image' , 0755);
                if (move_uploaded_file($temp_name,$target_dir.$name))  {
                    $msg = "Image uploaded successfully"; 
                }else{ 
                    $msg = "Failed to upload image"; 
                } 
                echo $msg;
         
         } else {
             console.log("Error: " . $sql . " " . mysqli_error($conn));
            echo "Error: " . $sql . " " . mysqli_error($conn);
         }
        


	}



?>
<script type="text/javascript">
var php_var = <?php echo $imageFileType; ?>
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=400">
    <title>Sale Property</title>
    <link rel="icon" type="image/png" href="img/home3.png"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <?php
    include_once 'nav.php';
    ?>
    <h1><a href="home.php">Logout</a></h1>

    <br><h1 id="heading">Add A Property for Sale</h1><br>
    <div class="container shadow p-3 mb-5 bg-white rounded">
        <form action="" method="post" enctype="multipart/form-data" class="m-3 mx-auto">
            <h5 class="prop text-center">Property Type and Location</h5>

              <fieldset class="form-group">
                <div class="row">
                    <div class="col-sm-4"></div>
                  <legend class="col-form-label col-sm-2 pt-0">Purpose: </legend>
                  <div class="col-sm-4">
                  <select id="inputState" class="form-control" name="status">
                        <?php 
                        $sql1 = mysqli_query($conn, "SELECT pklistingstatusId,Title FROM listingstatus");
                        while ($row = $sql1->fetch_assoc()){
                        echo "<option value=". $row['pklistingstatusId'] . ">" . $row['Title'] . "</option>";
                        }
                        ?>
                        </select>
                  </div>
                </div>
            </fieldset>
              <fieldset class="form-group">
                <div class="row">
                    <div class="col-sm-4"></div>
                  <legend class="col-form-label col-sm-2 pt-0">Property Type: </legend>
                  <div class="col-sm-4">
                  <select id="inputState" class="form-control" name="type">
                        <?php 
                        $sql2 = mysqli_query($conn, "SELECT pkhousetypeId,Title FROM housetype");
                        while ($row = $sql2->fetch_assoc()){
                        echo "<option value=". $row['pkhousetypeId'] . ">" . $row['Title'] . "</option>";
                        }
                        ?>
                        </select>
                  </div>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <label class="col-form-label col-sm-2 pt-0">City: </label>
                    <div class="col-sm-3">
                        <select id="inputState" class="form-control" name="city">
                        <?php 
                        $sql = mysqli_query($conn, "SELECT pkCityId,Name FROM city");
                        while ($row = $sql->fetch_assoc()){
                        echo "<option value=". $row['pkCityId'] . ">" . $row['Name'] . "</option>";
                        }
                        ?>
                        </select>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <label for="Location" class="col-sm-2 col-form-label">Location</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="location" placeholder="Enter Location Here">
                </div>
            </div>
            <h5 class="prop text-center">Property Details</h5>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <label for="Title" class="col-sm-2 col-form-label">Property Title</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="title"  placeholder="Enter Property Title">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <label for="Description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-3">
                    <textarea class="form-control" name="desc" aria-label="With textarea" rows="6" placeholder="Enter Property Description"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <label for="Price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-3">
                    <input class="form-control" type="number" name="price" min="1" step="any" placeholder="Enter a price"/>Contains number only
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <label for="Area" class="col-sm-2 col-form-label">Property Area</label>
                <div class="col-sm-3">
                    <input class="form-control" type="number" name="area" min="1" step="any" placeholder="Enter area in sq.yards"/>Sq.Yards
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <label class="col-form-label col-sm-2 pt-0">No. Of Bedrooms: </label>
                    <div class="col-sm-3">
                        <select name="noBed" id="inputState" class="form-control">
                        <option disabled selected>Bedrooms</option>
                        <option value="">All</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5+</option>
                        </select>
                    </div>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <label class="col-form-label col-sm-2 pt-0">No. Of Bathrooms: </label>
                    <div class="col-sm-3">
                        <select name="noBath" id="inputState" class="form-control">
                        <option disabled selected>Bathrooms</option>
                        <option value="">All</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5+</option>
                        </select>
                    </div>
                </div>
            </fieldset>
            <h5 class="prop text-center">Add Images</h5>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <label for="Images" class="col-sm-2 col-form-label">Add Images</label>
                <div class="col-sm-3">
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <h5 class="prop text-center">Contact Details</h5>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <label for="Name" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-3">
                  <input type="text" name="f_name" class="form-control" placeholder="Enter Location Here">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-3">
                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="ex@example.com">
              </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <label for="text" class="col-sm-2 col-form-label">Number</label>
                <div class="col-sm-3">
                    <input type="number" name="number" class="form-control" placeholder="eg. 03111111111">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2 mt-3">
                <button type="submit" name='sub' class="btn btn-secondary">Submit Property</button>
              </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2 mt-3">
                <!-- <?php echo "<label for='NameFile' class='col-sm-2 col-form-label'>".$imageFileType."</label>"?> -->
              </div>
            </div>
        </form>
    </div>
    
    
    <div class="container">
        <div class="row mt-4">
            <div class="rent">
                <h1 class="m-4 add">Find Properties Available to Buy</h1>
                <a href="buy.php" style="text-decoration: none;color: white;"><button class="btn btn-secondary hh m-5">+Find</a></button>
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
    <?php
        include_once 'foot.php';
    ?>
    
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>