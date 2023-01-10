<?php require 'include/database.php';?>
<!DOCTYPE html>

<!-- Service Page -->
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>BC Movers</title>


        <link rel="stylesheet" href="styles.css">


    </head>
    <body>

        <!-- Header -->

        <section class="service">

                <nav>
                     <a href="index.php"> <img src="images/Mo.jpeg" alt=""  ></a>


                     <div class="nav-links">
                        <ul>
                            <li> <a href="index.php" >Home</a> </li>
                            <li>  <a href="service.php">Services</a> </li>
                            <li style="color:white"> Order Search
                              <form class="" action="ViewCustomers.php" method="post">
                                <input type="text" name="InvoiceID" style="width: 120px;" class="" id="InvoiceID" placeholder="Invoice" value="">
                                <button class="btn-primary">Go</button>
                              </form>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="text-box">
                    <h1>Our Services</h1>
                    <div class="line"></div>
                </div>
                 </section>

                <!-- Main body -->

        <section class="more">
                     <div class="row-5">
                             <div class="more-col">
                             <h3>Basic</h3>
                             <div class="line-2"></div>
                             <p>For your basic needs, we offer a limited service of relying on our customers to pack up their own good. On our end only providing the transportation.</p>
                             <p>$500</p>
                      </div>

                     <div class="more-col">
                             <h3>Premium</h3>
                             <div class="line-2"></div>
                             <p>If you wanna sit back and enjoy the show, our Premium service is for you. We will pack and unpack your goods offering moving components to get you settled into your new home.</p>
                             <p>$1000</p>
                      </div>
                      </div>

                    <div class="but">
                         <a href="index.php?anchor=clicked" class="hero-btn">Book with us Now</a>
                    </div>
        </section>

                <!-- Contact Footer -->

        <section class="footer">

                      <h3>Contact Us</h3>
                        <div class="row-4">
                          <div class="contact-col">
                            <div>
                              <h5> Call: 778-332-1345</h5>
                          </div>
                        </div>
                        <div class="contact-col">
                          <div>
                               <h5>Email: BCMovers@gmail.com</h5>
                          </div>
                        </div>
                      </div>
        </section>
    </body>
</html>
