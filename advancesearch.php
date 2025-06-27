<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trinity | advance search</title>
    <link rel="icon" href="img/logo.png"/>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col ">
                <div class="row">
                    <?php

                        require "header.php"

                    ?> 
                </div>
                <div class="row text-center">
                    <h1 class="fw-bold text-warning m-4">Advance Search</h1>
                    <hr>
                </div>
                <div class="row m-4 h-75">
                    <div class="col-3 lvrbr">
                        <div class="row">
                            <select name="" class="form-control m-2 mt-3 srtbr form-select" id="">
                                <option value="">Select Category</option>
                                <option value="">Dinner table</option>
                                <option value="">Bed</option>
                                <option value="">Chair</option>
                            </select>
                        </div>
                        <div class="row">
                            <select name="" class="form-control m-2 srtbr form-select" id="">
                                <option value="">Select Brand</option>
                                <option value="">Dinner table</option>
                                <option value="">Bed</option>
                                <option value="">Chair</option>
                            </select>
                        </div>
                        <div class="row">
                            <select name="" class="form-control m-2 srtbr form-select" id="">
                                <option value="">Select Model</option>
                                <option value="">Dinner table</option>
                                <option value="">Bed</option>
                                <option value="">Chair</option>
                            </select>
                        </div>
                        <div class="row">
                            <select name="" class="form-control m-2 srtbr form-select" id="">
                                <option value="">Select Condition</option>
                                <option value="">Dinner table</option>
                                <option value="">Bed</option>
                                <option value="">Chair</option>
                            </select>
                        </div>
                        <div class="row m-2">
                            <span class="fw-bold">Select colour</span>
                            <div class="bg-primary clrbox m-1"></div>
                            <div class="bg-secondary clrbox m-1"></div>
                            <div class="bg-success clrbox m-1"></div>
                            <div class="bg-danger clrbox m-1"></div>
                            <div class="bg-warning clrbox m-1"></div>
                            <div class="bg-info clrbox m-1"></div>
                            <div class="bg-light clrbox m-1"></div>
                            <div class="bg-dark clrbox m-1"></div>
                            <div class="bg-white clrbox m-1"></div>
                            <div class="bg-transparent clrbox m-1"></div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col">
                        <div class="row">
                            <input type="search" class="form-control srchbr m-2" placeholder="Type to Search..">
                            <button class="btn btn-dark bybtn m-2">Search</button>
                        </div>
                        <div class="row justify-content-end">
                            <select name="" class="form-control m-2 srtbr form-select" id="">
                                <option value="">Sort By</option>
                                <option value="">Price High To Low</option>
                                <option value="">Price Low To High</option>
                                <option value="">Quantitiy High To Low</option>
                                <option value="">Quantitiy Low To High</option>
                            </select>
                        </div>
                        <div class="row h-75 text-center align-items-end lvrbr">
                            <div class="col">
                                <div class="row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                      </svg>
                                      <h1 class="fw-bold">No Items Searched...</h1>
                                </div>
                            </div>
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
    </div>
    <script src="bootstrap.bundle.js"></script>
</body>
</html>