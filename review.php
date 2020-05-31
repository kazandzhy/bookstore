<!DOCTYPE html>
<html>
 
    <head>
        <title>Purchase Review</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="stylesheet" type="text/css" href="review.css">
    </head>
    
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

            <a class="navbar-brand" href="#" id="author">Vlad Kazandzhi</a>
            <a class="navbar-brand" href="#" id="current-page">Purchase Review</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="nav navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="home.html"> Book World</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="shop.html"> Order Online</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="cart.html"> Check Out</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html"> Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="http://w3playground.com"> Home</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">

            <div class="row">

                <div class="col-lg" id="col1">

                    <div class="row">
                        <span class="sectionHeader">1. Billing Information:</span>
                    </div>

                    <?php
                    
                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $phone = $_POST["phone"];
                    $address = $_POST["address"];
                    $city = $_POST["city"];
                    $statelist = $_POST["statelist"];
                    $zip = $_POST["zip"];
                    $cardtype = $_POST["cardtype"];
                    $cardnumber = $_POST["cardnumber"];
                    $expmonth = $_POST["expmonth"];
                    $expyear = $_POST["expyear"];
                    $security = $_POST["security"];
                    $books = $_POST["purchase"];

                    print '<div class="row">';
                    print    '<span class="sectionItem">First name: ' . $_POST["firstname"] . "</span>";
                    print '</div>';

                    print '<div class="row">';
                    print    '<span class="sectionItem">Last name: ' . $_POST["lastname"] . "</span>";
                    print '</div>';

                    print '<div class="row">';
                    print    '<span class="sectionItem">Telephone: ' . $_POST["phone"] . "</span>";
                    print '</div>';

                    print '<div class="row">';
                    print    '<span class="sectionItem">Address: ' . $_POST["address"] . "</span>";
                    print '</div>';

                    print '<div class="row">';
                    print    '<span class="sectionItem">City: ' . $_POST["city"] . "</span>";
                    print '</div>';

                    print '<div class="row">';
                    print    '<span class="sectionItem">State: ' . $_POST["statelist"] . "</span>";
                    print '</div>';

                    print '<div class="row">';
                    print    '<span class="sectionItem" id="zip">Zip Code: ' . $_POST["zip"] . "</span>";
                    print '</div>';
                    
                    ?>

                    <div class="row">
                        <span class="sectionHeader">2. Payment:</span>
                    </div>

                    <?php

                    print '<div class="row">';
                    print    '<span class="sectionItem">Card Type: ' . $_POST["cardtype"] . "</span>";
                    print '</div>';

                    print '<div class="row">';
                    print    '<span class="sectionItem" id="exp">Expiration Date: ' . $_POST["expmonth"] . " " . $_POST["expyear"] . "</span>";
                    print '</div>';

                    ?>

                </div>

                <div class="col-lg" id="col2">

                    <div class="row">
                        <span class="sectionHeader">3. Selected Items:</span>
                    </div>

                    <div class="row">
                        <div id="selectedItems"></div>
                    </div>

                    <form name="ourform" onreset="resetForm()" onsubmit="return submitForm()" action="confirm.php" method="post">
                    
                        <section style="display: none">
                           
                            <input type="text" name="firstname" value="<?php echo $firstname;?>">
                            <input type="text" name="lastname" value="<?php echo $lastname;?>">
                            <input type="text" name="phone" value="<?php echo $phone;?>">
                            <input type="text" name="address" value="<?php echo $address;?>">
                            <input type="text" name="city" value="<?php echo $city;?>">
                            <input type="text" name="statelist" value="<?php echo $statelist;?>">
                            <input type="text" name="zip" value="<?php echo $zip;?>">
                            <input type="text" name="cardtype" value="<?php echo $cardtype;?>">
                            <input type="text" name="cardnumber" value="<?php echo $cardnumber;?>">
                            <input type="text" name="expmonth" value="<?php echo $expmonth;?>">
                            <input type="text" name="expyear" value="<?php echo $expyear;?>">
                            <input type="password" name="security" value="<?php echo $security;?>">

                            <?php
                            foreach ($books as $book)
                            {
                            echo '<input type="hidden" name="purchase[]" value="' . $book . '">';
                            }
                            ?>
                            
                        </section>

                        <div class="row" id="submitOrder">
                        
                            <button class="btn btn-primary" type="submit" name="confirm">Submit Order</button>
                            <button class="btn btn-warning" type="submit" name="cancel">Cancel</button>  
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- JS -->
        <script type="text/javascript" src="review.js"></script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <!-- Popper.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
