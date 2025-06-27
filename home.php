<?php

// echo ("welcome");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trinity | home</title>
    <link rel="icon" href="img/logo.png"/>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row">
                    <?php

                        require "header.php"

                    ?> 
                </div>
                <div class="row">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/home1.jpg" alt="" class="w-100 vh-100">
                            </div>
                            <div class="carousel-item">
                                <img src="img/home2.jpg" alt="" class="w-100 vh-100">
                            </div>
                            <div class="carousel-item">
                                <img src="img/home3.jpg" alt="" class="w-100 vh-100">
                            </div>
                            <div class="carousel-item">
                                <img src="img/home4.jpg" alt="" class="w-100 vh-100">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row  m-2">
                    <div class="col text-center">
                        <h5 class="fw-bold ">Sofas</h5>
                        <span>Discover stunning fabric and leather suites, corner sofas and sofa beds. </span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-3 lvrbr m-2">
                        <div class="row livingimg">
                            <img src="img/living room/sofa1.webp"  class="livingimg">
                        </div>
                        <hr>
                        <div class="row text-center">
                            <span>Rs: 90000.00</span>
                        </div>
                        <div class="row flex justify-content-center">  
                            <button class="btn btn-dark bybtn">Buy Now</button>
                        </div>
                        <div class="row flex justify-content-center mb-1">
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                </svg>
                            </div>
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 lvrbr m-2">
                        <div class="row lvimg">
                            <img src="img/product/sofa.webp" class="img-fluid image-cover"alt="">
                        </div>
                        <hr>
                        <div class="row text-center">
                            <span>Rs: 90000.00</span>
                        </div>
                        <div class="row flex justify-content-center">  
                            <button class="btn btn-dark bybtn">Buy Now</button>
                        </div>
                        <div class="row flex justify-content-center mb-1">
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                </svg>
                            </div>
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 lvrbr m-2">
                        <div class="row">
                            <img src="img/product/k1.webp" alt="">
                        </div>
                        <hr>
                        <div class="row text-center">
                            <span>Rs: 90000.00</span>
                        </div>
                        <div class="row flex justify-content-center">  
                            <button class="btn btn-dark bybtn">Buy Now</button>
                        </div>
                        <div class="row flex justify-content-center mb-1">
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                </svg>
                            </div>
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row m-2">
                <div class="col text-center">
                    <h5 class="fw-bold ">Storage </h5>
                    <span>Keep your property tidy and residents happy with a rnage of storage designed with them in mind. Combining the savvy and the stylish,
                         whether it's for keeping everyday little essentials in one place or for that statement piece to put the TV on. We have thought of
                          everything when it comes to keeping your property organised, but stylish at the same time.</span>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-3 lvrbr m-2">
                    <div class="row livingimg">
                        <img src="img/home/st1.webp"  class="livingimg">
                    </div>
                    <hr>
                    <div class="row text-center">
                        <span>Rs: 90000.00</span>
                    </div>
                    <div class="row flex justify-content-center">  
                        <button class="btn btn-dark bybtn">Buy Now</button>
                    </div>
                    <div class="row flex justify-content-center mb-1">
                        <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                            </svg>
                        </div>
                        <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-3 lvrbr m-2">
                    <div class="row lvimg">
                        <img src="img/home/st2.webp" class="img-fluid image-cover"alt="">
                    </div>
                    <hr>
                    <div class="row text-center">
                        <span>Rs: 90000.00</span>
                    </div>
                    <div class="row flex justify-content-center">  
                        <button class="btn btn-dark bybtn">Buy Now</button>
                    </div>
                    <div class="row flex justify-content-center mb-1">
                        <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                            </svg>
                        </div>
                        <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-3 lvrbr m-2">
                    <div class="row">
                        <img src="img/home/st3.webp" alt="">
                    </div>
                    <hr>
                    <div class="row text-center">
                        <span>Rs: 90000.00</span>
                    </div>
                    <div class="row flex justify-content-center">  
                        <button class="btn btn-dark bybtn">Buy Now</button>
                    </div>
                    <div class="row flex justify-content-center mb-1">
                        <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                            </svg>
                        </div>
                        <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row m-2">
            <div class="col text-center">
                <h5 class="fw-bold ">Beds & Mattresses </h5>
                <span>FAMILY is everything,</span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-3 lvrbr m-2">
                <div class="row livingimg">
                    <img src="img/home/bd1.webp"  class="livingimg">
                </div>
                <hr>
                <div class="row text-center">
                    <span>Rs: 90000.00</span>
                </div>
                <div class="row flex justify-content-center">  
                    <button class="btn btn-dark bybtn">Buy Now</button>
                </div>
                <div class="row flex justify-content-center mb-1">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                        </svg>
                    </div>
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-3 lvrbr m-2">
                <div class="row lvimg">
                    <img src="img/home/bd2.webp" class="img-fluid image-cover"alt="">
                </div>
                <hr>
                <div class="row text-center">
                    <span>Rs: 90000.00</span>
                </div>
                <div class="row flex justify-content-center">  
                    <button class="btn btn-dark bybtn">Buy Now</button>
                </div>
                <div class="row flex justify-content-center mb-1">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                        </svg>
                    </div>
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-3 lvrbr m-2">
                <div class="row">
                    <img src="img/home/bd3.webp" alt="">
                </div>
                <hr>
                <div class="row text-center">
                    <span>Rs: 90000.00</span>
                </div>
                <div class="row flex justify-content-center">  
                    <button class="btn btn-dark bybtn">Buy Now</button>
                </div>
                <div class="row flex justify-content-center mb-1">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                        </svg>
                    </div>
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row m-3">
            <div class="col text-center">
                <h5 class="fw-bold ">Tables </h5>
                <span>Need a table? We've got the range to cover you in every room. From dining to side tables, whatever the
                     occasion or the need we have a table to accommodate. You'll be spoilt for choice with a selection of
                      different designs, shapes and sizes, giving you plenty of options to find one that fits your space and
                       residents needs perfectly.</span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-3 lvrbr m-2">
                <div class="row livingimg">
                    <img src="img/home/tb4.webp"  class="livingimg">
                </div>
                <hr>
                <div class="row text-center">
                    <span>Rs: 90000.00</span>
                </div>
                <div class="row flex justify-content-center">  
                    <button class="btn btn-dark bybtn">Buy Now</button>
                </div>
                <div class="row flex justify-content-center mb-1">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                        </svg>
                    </div>
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-3 lvrbr m-2">
                <div class="row lvimg">
                    <img src="img/home/tb2.webp" class="img-fluid image-cover"alt="">
                </div>
                <hr>
                <div class="row text-center">
                    <span>Rs: 90000.00</span>
                </div>
                <div class="row flex justify-content-center">  
                    <button class="btn btn-dark bybtn">Buy Now</button>
                </div>
                <div class="row flex justify-content-center mb-1">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                        </svg>
                    </div>
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-3 lvrbr m-2">
                <div class="row">
                    <img src="img/home/tb3.webp" alt="">
                </div>
                <hr>
                <div class="row text-center">
                    <span>Rs: 90000.00</span>
                </div>
                <div class="row flex justify-content-center">  
                    <button class="btn btn-dark bybtn">Buy Now</button>
                </div>
                <div class="row flex justify-content-center mb-1">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                        </svg>
                    </div>
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4"><hr></div>
            <div class="col-4 text-center"><span>More reasons to shop at Furniture Village</span></div>
            <div class="col-4"><hr></div>
        </div>
        <div class="row flex justify-content-center">
            <div class="col-5">
                <div class="row">
                    <div class="col-3">
                        <div class="row">
                            <img src="img/living room/garanted.png" alt="">
                        </div>
                        <div class="row">
                            <span>Lowest price guarenteed</span>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <img src="img/living room/20 year.jpg" alt="">
                        </div>
                        <div class="row"><span>20 Year structural guarantee</span></div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <img src="img/living room/tropy.jpg" alt="">
                        </div>
                        <div class="row"><span>Leading brands</span></div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <img src="img/living room/iterest 20000.webp" alt="">
                        </div>
                        <div class="row"><span>Iterest free credit available on orders over Rs:20000</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <br>
        </div>
        <div class="row flex justify-content-center m-3">
            <div class="col-5">
                <div class="row">
                    <span class="fw-bold">Sign up to our newsletter.</span>
                </div>
                <hr>
                <div class="row">
                    <span>We’d love to keep in touch via email with our latest news and offers. If you’re happy for us to do this please enter your 
                          email below and click ‘Sign up’. You can unsubscribe at any time.</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="input-group">
                    <input type="text" class="form-control" name="email" value="" placeholder="Enter Your Email">
                    <span class="input-group-btn">
                        <button class="effect-btn btn btn-secondary " name="submitNewsletter" type="submit">
                            <span>SIGN UP</span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php

                require "footer.php"

            ?>
        </div>
    </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
</body>
</html>