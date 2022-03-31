<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=400">
    <title>About Us</title>
    <link rel="icon" type="image/png" href="img/home3.png"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <?php
    include_once 'nav.php';
    ?>
    <div class="bg"></div>
    <h2 id="heading">About Us</h2><br>
    
    <div class="container">
        <div class="row m-3">
            <div class="col-md-5">
                <img src="img/8.png" alt="" width="100%">
            </div>
            <div class="col-md-6 text-center">
                <h1>OUR MISSION</h1>
                <h5>We give you the opportunity to select the perfect home for you and your family.</h5>
                <p>Contact our agents for personal counselling and ideas.</p>
            </div>
        </div>
    </div>
    <h1 id="heading">FEATURED PROPERTIES</h1>
    <div>
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel" style="width: 100%;">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner ab">
              <div class="carousel-item active">
                <img src="img/front.jpg" class="d-block w-100 zoom ab" alt="house">
                <div class="carousel-caption d-none d-md-block">
                    <div class="card m-3 rounded img-zoom" style="width: 18rem;height: 380px;background-color: rgba(0, 0, 0, 0.575);">
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
                <img src="img/front3.jpg" class="d-block w-100 zoom ab" alt="house1">
                <div class="carousel-caption d-none d-md-block">
                    <div class="card m-3 rounded img-zoom" style="width: 18rem;height: 380px;background-color: rgba(0, 0, 0, 0.575);">
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
                <img src="img/house.jpg" class="d-block w-100 ab" alt="house2">
                <div class="carousel-caption d-none d-md-block">
                    <div class="card m-3 rounded img-zoom" style="width: 18rem;height: 380px;background-color: rgba(0, 0, 0, 0.575);">
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
    <h1 id="heading">OUR AGENTS</h1>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-4 col-sm-6">
                <div class="box16">
                    <img class="img-agent"  src="img/osama.JPG">
                    <div class="box-content">
                        <h3 class="title">Muhammad Osama</h3>
                        <span class="post">Realter</span>
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box16">
                    <img class="img-agent" src="img/arsal.jpg">
                    <div class="box-content">
                        <h3 class="title">Muhammad Arsal</h3>
                        <span class="post">Realtor</span>
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box16">
                    <img class="img-agent"  src="img/rafay.jpg">
                    <div class="box-content">
                        <h3 class="title">Abdul Rafay</h3>
                        <span class="post">Realtor</span>
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br>
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
            <div class="sale">
                <h1 class="m-4 add">Find Properties Available on Rent</h1>
                <a href="rent.php" style="text-decoration: none;color: white;"><button class="btn btn-secondary hh m-5">+Find</a></button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="salee">
                <h1 class="m-4 add">Add Your Property for Sale</h1>
                <a href="sell.php"><button class="btn btn-secondary hh m-5">+Add</button></a>
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