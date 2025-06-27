<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trinity | Invoice</title>
    <link rel="icon" href="img/logo.png"/>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col m-3">
                <div class="row">
                    <?php

                        require "header.php"

                    ?> 
                </div>
                <div class="row">
                    <div class="col-2 mx-4">
                        <img src="img/png/ivoice.jpg"  class="invimg">
                    </div>
                    <div class="col my-auto">
                        <P class="invfs text-warning">INVOICE</P>
                        <h4>Trinity (pvt) lmt.  No.128,Gajaba Mawatha,Gampaha,Sri Lanka.
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <h4 class="fw-bold ">Invoice to :</h4>
                        <span>Kawindya Senarathne</span>,
                        <br>
                        <span>Anuradhapura</span>,
                        <br>
                        <span>kawindyasenarathne@gmail.com</span>.
                    </div>
                    <div class="col text-end">
                        <div class="row m-1">
                            <div class="col">
                                <h5 class="fw-bold ">Invoice No : #</h5>
                            </div>
                            <div class="col">
                                <span>01</span>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col">
                                <h5 class="fw-bold ">Date & Time : </h5>
                            </div>
                            <div class="col">
                                <span>02-01-2023 / 01:44:00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-10">
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Item Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty.</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Dinner Table</td>
                            <td>Rs. 12 0000.00</td>
                            <td>01</td>
                            <td>Rs. 12 0000.00</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Bed</td>
                            <td>Rs. 2 00000.00</td>
                            <td>01</td>
                            <td>Rs. 2 00000.00</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Single Chair</td>
                            <td>Rs. 20000.00</td>
                            <td>04</td>
                            <td>Rs. 80000.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
                <div class="row">
                  <div class="col">
                    <h5>Thank you for your bussiness,</h5>
                  </div>
                  <div class="col-2">
                    <div class="row m-1"><span>Sub Total:</span></div>
                    <div class="row m-1"><span>Delivery Fee:</span></div>
                  </div>
                  <div class="col-4">
                    <div class="row m-1"><span>Rs. 4 00000.00</span></div>
                    <div class="row m-1"><span>Rs. 2 000.00</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col"></div>
                  <div class="col-2"></div>
                  <div class="col m-4 text-center bg-warning">
                    <h4 class="fw-bold">Total: <span>Rs. 4 00000.00</span></h4> 
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-2">
                    <h4 class="fw-bold">Paymennt Info:</h4>
                    <span>Custermer Name:</span><br>
                    <span>Bank Details:</span><br>
                    <span>Account No:</span>
                  </div>
                  <div class="col">
                    <h4></h4><br>
                    <span>Kawindya Senarathne</span><br>
                    <span>200013202490 / BOC</span><br>
                    <span>#456123258</span>
                  </div>
                  <div class="col text-end">
                    <button class="btn btn-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                      </svg>
                      print
                    </button>
                    <button class="btn btn-danger">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                      </svg>
                      Export as PDF
                    </button>
                  </div>
                </div>
                <div class="row bg-warning text-center m-3">
                  <h4 class="">NOTICE : <span>Purchased items can return befor 7 days of Delivery.</span></h4>
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
    <script src="bootstrap.bundle.js"></script>
</body>
</html>