<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trinity | cart</title>
    <link rel="icon" href="img/logo.png"/>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container-fluid">
    <div class="row">
                    <?php

                        require "header.php"

                    ?> 
    </div>
    <hr>
    <div class="row">
        <div class="col m-5">
            <div class="row mt-2">
                <h2 class="fw-bold">Your cart</h2>
            </div>
            <div class="row">
                <h5 class="fw-bold">You have no iterms,</h5>
                <p>Found something perfect? To buy just click on the ‘add to cart’ button. </p>
            </div>
            <div class="row">
                <button class="btn btn-dark crbtn">CONTINUE SHOPPING</button>
            </div>
        </div>
        <div class="col mt-4">
            <img src="img/living room/cart.png" class="crtimg" alt="">
        </div>
    </div>
    <div class="row">
        <h5 class="fw-bold mx-5">Your Featured Sales,</h5>
        <button class="btn btn-light btnl ">
            <a href="#" class="link-dark">
                Shop All Sales
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg>
            </a>
        </button>
    </div>
    <hr>
    <div class="row">
                    <?php

                        require "footer.php"

                    ?>
    </div>
</div>

<script src="script.js"></script>    
</body>
</html>