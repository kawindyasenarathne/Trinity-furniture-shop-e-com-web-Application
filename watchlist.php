<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thinity | watchlist</title>
    <link rel="icon" href="img/logo.png"/>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="col">
            <div class="row">
                    <?php

                        require "header.php"

                    ?>
                </div>
                <br>
                <div class="row m-1">
                    <div class="col-4">
                        <h3 class="fw-bold">All Your Lists, All in One Place,</h3>
                        <div class="row">
                            <p>Sign in to start adding your favorite items, shops, and ideas to a list that fits your lifestyle.</p>
                        </div>
                        <div class="row m-3">
                            <div class="col">
                                <br>
                                <hr>
                                <h5 class="">Be the first to know about our best deals!</h5>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="email" value="" placeholder="Enter Your Email">
                                    <span class="input-group-btn">
                                        <button class="effect-btn btn btn-secondary " name="submitNewsletter" type="submit">
                                            <span>subscribe</span>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <img src="img/living room/watchlist.webp" alt="" class="wlbtn">
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center m-3">
            <hr>
            <h2 class="fw-bold">You have no items in your Watchlist yet.</h2>
            <div class="col"><button class="btn btn-outline-warning spbtn">Start Shopping</button></div>
        </div>
        <hr>
        <br>
        <div class="row">
            <?php

                require "footer.php"

            ?>
        </div>
    </div>
</body>
</html>