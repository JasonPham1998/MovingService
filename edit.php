<?php require 'include/database.php';
// Assign POST array content to vars
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$SourceAddress = '';
$DestinationAddress = '';
$DateOfService = '';
$CustomerMessage = '';
$Distance = '';
$ServiceType = '';
?>




<!DOCTYPE html>

<html>
    <head>
        <title>BC Movers</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="styles.css">
    </head>

    <body>

                <!--Header -->


        <section class="edit-bar">

                     <nav>
                             <a href="index.php"> <img src="images/Mo.jpeg" alt=""  ></a>

                            <div class="nav-links">
                                 <ul>
                                        <li> <a href="index.php" >Home</a> </li>
                                        <li>  <a href="service.php">Services</a> </li>
                                        <li style="color:white"> Order Search
                                          <form class="" action="ViewCustomers.php" method="post">


                                                      <input type="text" name="InvoiceID" class="" id="InvoiceID" placeholder="Invoice" style="width: 120px;" value="">
                                                      <button class="btn-primary">Go</button>
                                        </form> </li>
                                 </ul>
                             </div>
                            </nav>


                            <div class="text-box">
                                <h1>Book Now</h1>
                                    <div class="line"></div>
                                </div>
                    <!-- End Header -->

                    </section>

                <!-------FORM--------->

        <section class="edit-form">
          <!-- .php -->
            <form action="ThankYou.php" method="post">

                            <div class="col">




                        <!---- USER INFO------>


                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="FirstName">First Name</label>
                            <input type="text"  name="FirstName" class="form-control is-valid" id="FirstName" placeholder="First name" value="<?php echo $FirstName; ?>" required>
                        </div>


                    <div class="col-md-4 mb-3">
                            <label for="LastName">Last Name</label>
                            <input type="text" name="LastName" class="form-control is-valid" id="LastName" placeholder="Last Name" value="<?php echo $LastName; ?>" required>
                        </div>


                    <div class="col-md-4 mb-3">
                            <label for="Email">Email Address</label>
                            <input type="email" name="Email" class="form-control is-invalid" id="Email" placeholder="email@website.com" value="<?php echo $Email; ?>" required>
                          </div>
                        </div>


                <div class="form-row">
                    <div class="col-md-6 mb-3">
                            <label for="Phone">Phone Number</label>
                            <input type="tel" name="Phone" class="form-control is-invalid" id="Phone" placeholder="000-000-0000" value="<?php echo $Phone; ?>" required>
                        </div>

                <!-- MOVING INFO -->

                 <div class="col-md-3 mb-3">
                            <label for="SourceAddress">Current Address</label>
                            <input type="text" name="SourceAddress" highlight class="form-control is-invalid" id="SourceAddress" placeholder="Current Address" value="" required>
                        </div>


                <div class="col-md-3 mb-3">
                            <label for="DesintationAddress">Destination Address</label>
                            <input type="text" name="DestinationAddress" class="form-control is-invalid" id="DestinationAddresss" placeholder="New Address" value="" required>
                          </div>




                <div class="col-md-3 mb-3">
                            <label for="DateOfService">Moving Date</label>
                            <input type="date" name="DateOfService" class="form-control is-invalid" id="DateOfService" placeholder="Service Date" value="" required>
                          </div>


                <div class="col-md-3 mb-3">
                            <label for="CustomerMessage">Details/Comments</label>
                            <textarea style="width: 537px; height: 92px;" name="CustomerMessage" class="form-control is-invalid" id="CustomerMessage" placeholder="Questions or Details here" rows="8" cols="80" ></textarea>
                        </div>

                <div class="col-md-3 mb-3">
                            <label for="Distance">Distance</label>
                            <select class="" name="Distance" id="Distance" >
                            <option value="Local">Local - $450</option>
                            <option value="LongDistance">Long Distance - $900</option>
                        </select>
                    </div>


                <div class="col-md-3 mb-3">
                            <label for="ServiceType">Service Type</label>
                            <select class="" name="ServiceType" id="ServiceType" >
                            <option value="Basic">Basic - $500</option>
                            <option value="Premium">Premium - $1000</option>
                        </select>
                    </div>

                        <button class="btn-primary" type="submit">Purchase Moving Order</button>


                                </form>
                   </div>

                        <!----- End Form ------>
               </section>

                <!-- CONTACT FOOTER -->


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
