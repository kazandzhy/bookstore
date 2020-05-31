<!DOCTYPE html>
<html>
 
    <head>
    
        <title>Confirmation|Cancel</title>

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="stylesheet" type="text/css" href="confirm.css">

    </head>
  
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

            <a class="navbar-brand" href="#" id="author">Vlad Kazandzhi</a>
            <a class="navbar-brand" href="#" id="current-page">Confirmation|Cancel</a>

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
                        <a class="nav-link" href="contact.html"> Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="http://w3playground.com"> Home</a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php
        
        $name = $_POST['firstname'] . " " . $_POST['lastname'];

        print '<div class="container">';

        if (isset($_POST['confirm'])) {

        print   '<div class="alert alert-success" role="alert">';
        print       "<span class='confirm'>Thank you for your order, " . $name . "! Your purchase is complete!</span>";
        print   '</div>';
        } else {
        print   '<div class="alert alert-warning" role="alert">';
        print       "<span class='confirm'>Your order has been cancelled.</span>";
        print   '</div>';
        }

        print '</div>';
        
        ?>

        <!-- JS -->
        <script type="text/javascript" src="confirm.js"></script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <!-- Popper.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
