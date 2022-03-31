<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" type="image/png" href="img/home3.png"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <?php
    include_once 'nav.php';
    ?>

    <div class="boog"></div>
    <h2 id="heading">Contact Us</h2><br>

    <br><div class="container">
        <div class="row-fluid">
            <div class="col-md-12 map">
                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.424489702106!2d67.06546691414148!3d24.883498284043018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33eea2bedeadb%3A0xad577794e56863d1!2sBMCHS%20Rd%20No.%2013%2C%20BMCHS%20Sharafabad%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1590678536911!5m2!1sen!2s"></iframe>
            </div>
                <div>
                    <div class="bv m-3">
                        <div><br>
                            <a href="index.php"><img src="img/Capture.jpg" alt="logo"></a><br>
                            <i class="fa fa-phone-square contact m-2"> +92 336 2417759 </i><br>
                            <i class="fa fa-envelope-square contact m-2"> minha@gmail.com </i><br>
                            <i class="fa fa-location-arrow contact m-2"> Shop 4, Street 13, Bahadurabad, Karachi</i><br>
                        </div>
                    </div>
                </div>
        </div>
    </div><br><br>
    <h2 id="heading">Get in Touch</h2><br>
    <form class="container pt-3 pb-2 shadow">
        <div class="container-fluid">
            <div class="form-row m-3">
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">First Name</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Your First Name">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Last Name</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Your Last Name">
                </div>
                <div class="form-group col-md-2"></div>
            </div>
            <div class="form-row m-3">
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Your Email">
                </div>
                <div class="form-group col-md-4 right">
                    <label for="inputPassword4">Phone Number</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Your Phone">
                </div>
                <div class="form-group col-md-2"></div>
            </div>
            <div class="form-row m-3">
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-8">
                    <label for="inputAddress">Subject</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Your Subject">
                </div>
                <div class="form-group col-md-2"></div>
            </div>
            <div class="form-row m-3">
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-8 mt-4">
                    <label for="comment">Message</label>
                    <textarea class="form-control" rows="8" id="comment" placeholder="Your Message"></textarea>
                </div>
                <div class="form-group col-md-2"></div>
            </div>
            <div class="form-row m-3">
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-8">
                    <button type="submit" class="btn btn-outline-secondary col-md-2">Send</button>
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