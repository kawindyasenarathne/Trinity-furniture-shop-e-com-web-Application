<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trinity | user</title>
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
                    <div class="col">
                        <div class="row m-2">
                            <h4 class="fw-bold">Welcome!</h4>
                        </div>
                        <div class="row lvrbr m-2">
                            <div class="col-10">
                                <div class="row text-center justify-content-center m-2">
                                    <div class="col-8">
                                        <img src="img/living room/sofa2.jpg" alt="" class="ppic">
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <span class="fw-bold">kawindya senarathne</span>
                                    <span>kawindyasenarathne@gmail.com</span>
                                </div>
                                <hr> 
                                <div class="row text-center justify-content-center m-2">
                                    <div class="col-8">
                                        <button class="btn btn-warning lvrbr fw-bold">Update profile Image</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col m-5">
                        <div class="row lvrbr">
                            <div class="col-10">
                                <div class="row text-center">
                                    <h4 class="fw-bold">My Account</h4>
                                </div>
                                <div class="row m-2">
                                    <div class="col">
                                        <label for="fristname">Frist Name</label>
                                        <input type="text" class="form-control" placeholder="Frist Name">
                                    </div> 
                                    <div class="col">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="row m-2">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="row m-2">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" class="form-control" placeholder="Mobile">
                                </div>
                                <div class="row m-2">
                                    <label for="reg.date">Registered Date</label>
                                    <input type="datetime" class="form-control" placeholder="Reg.date">
                                </div>
                                <div class="row m-2">
                                    <label for="address01">Address Line 1</label>
                                    <input type="text" class="form-control" placeholder="Address 01">
                                </div>
                                <div class="row m-2">
                                    <label for="reg.date">Address Line 2</label>
                                    <input type="text" class="form-control" placeholder="Address 02">
                                </div>
                                <div class="row m-2">
                                    <div class="col">
                                        <label for="fristname">Province</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Anuradhapura</option>
                                        </select>
                                    </div> 
                                    <div class="col">
                                        <label for="lastname">District</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Anuradhapura</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col">
                                        <label for="fristname">City</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Anuradhapura</option>
                                        </select>
                                    </div> 
                                    <div class="col">
                                        <label for="lastname">Postal-Code</label>
                                        <input type="number" class="form-control" placeholder="Postal-Code">
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <label for="gender">Gender</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">male</option>
                                            <option value="">Female</option>
                                        </select>
                                </div>
                                <div class="row m-4">
                                    <button class="btn btn-dark">UPDATE</button>
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
</body>
</html>