<?php require 'include/database.php'; ?>
<?php
// Assign POST array content to vars
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$SourceAddress = $_POST['SourceAddress'];
$DestinationAddress = $_POST['DestinationAddress'];
$DateOfService = $_POST['DateOfService'];
$CustomerMessage = $_POST['CustomerMessage'];
$Distance = $_POST['Distance'];
$ServiceType = $_POST['ServiceType'];
 ?>
<!-- INSERT CUSTOMER TABLE DATA BEGIN-->
 <?php
 $query =  'INSERT INTO customer(FirstName, LastName, Email, Phone)
            VALUES (?, ?, ?, ?);';
 $statement = mysqli_prepare($db, $query);
 mysqli_stmt_bind_param($statement, "sssi", $FirstName, $LastName, $Email, $Phone);
 mysqli_stmt_execute($statement);
 $CustomerID = mysqli_insert_id($db);
  ?>
<!-- INSERT CUSTOMER TABLE DATA END-->

  <!-- INSERT MOVINGINFO TABLE DATA BEGIN-->
   <?php
   $query =  'INSERT INTO movinginfo (SourceAddress, DestinationAddress, DateOfService, CustomerMessage, Distance, ServiceType)
              VALUES (?, ?, ?, ?, ?, ?);';
   $statement = mysqli_prepare($db, $query);
   mysqli_stmt_bind_param($statement, "ssssss", $SourceAddress, $DestinationAddress, $DateOfService, $CustomerMessage, $Distance, $ServiceType);
   mysqli_stmt_execute($statement);

   // Fetch the unique ID of the last inserted record
   $MovingID = mysqli_insert_id($db);
    ?>
  <!-- INSERT MOVINGINFO TABLE DATA END-->

<!-- INSERT INVOICE TABLE -->
<?php
$query =  'INSERT INTO invoice (CustomerID, MovingID)
           VALUES (?, ?);';
$statement = mysqli_prepare($db, $query);
mysqli_stmt_bind_param($statement, "ii", $CustomerID, $MovingID);
mysqli_stmt_execute($statement);
$InvoiceID = mysqli_insert_id($db);
 ?>
<!-- INSERT INVOICE TABLE END -->


  <?php
  // CALCULATE ORDER COSTS BEGIN
  $BasicPrice = 500;
  $PremiumPrice = 1000;
  $LocalPrice = 450;
  $LongDistancePrice = 900;
  $TotalCost = 0;

  if ($ServiceType == "Basic") {
  $TotalCost += $BasicPrice;
  }
  if ($ServiceType == "Premium") {
  $TotalCost += $PremiumPrice;
  }
  if ($Distance == "Local") {
  $TotalCost += $LocalPrice;
  }
  if ($Distance == "LongDistance") {
  $TotalCost += $LongDistancePrice;
  }
  // CALCULATE ORDER COSTS END
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
                              <table style="color:white">
                                <tr>
                                  <td>
                                    <h1>Order Confirmed</h1>
                                    <hr>
                                    <br>
                                  </td>

                                </tr>
                                <tr>
                                  <td>
                                    <p>
                                      Thank You, <strong>
                                        <?php echo "$FirstName"; ?>
                                                  <?php echo " "; ?>
                                                  <?php echo "$LastName"; ?>
                                      </strong>
                                      <br><br>
                                      Your order has been confirmed!
                                      <br><br>
                                      Thank you for choosing BC Moving Co. for your upcoming move, <strong><?php echo "$FirstName"; ?></strong>

                                      We're looking forward to helping you on <strong><?php echo $DateOfService ?></strong>.
                                      <br> <br>
                                      Your order has been submitted and we'll be in touch shortly to discuss the details of your move and answer any questions you may have.
                                      <br>
                                      In the meantime, please feel free to contact us at <strong>778-332-1345</strong> if you have any immediate concerns or requests.
                                      <br><br>
                                      We look forward to working with you and helping you start your new chapter in <strong>
                                        <?php echo "$DestinationAddress"; ?>
                                      </strong>.


                                    </p>
                                  </td>
                                </tr>
                              </table>




                              <br> <H1 style="color:white">Order Details</H1>;
                             <table style="color:white">
                              <tr>
                                  <th style="text-align:left">Current Address:&nbsp;</th>
                                  <td style="text-align:left">
                              <?php echo " ".$SourceAddress; ?>
                              </td>
                                </tr>





                                <tr>
                                  <th style="text-align:left">Moving Address:&nbsp;</th>
                                  <td style="text-align:left">
                                    <?php   echo " ".$DestinationAddress;  ?>

                              </td>
                                </tr>
                                  <tr >
                                  <th style="text-align:left">Distance:&nbsp;</th>
                                  <td style="text-align:left">
                                    <?php       echo " ".$Distance;  ?>

                                </td>
                                  </tr>
                                <tr >
                                  <th style="text-align:left">ServiceType:&nbsp;</th>

                                                                    <td style="text-align:left">
                                                                      <?php       echo " ".$ServiceType;  ?>

                                                                </td>
                                </tr>
                                  <tr>
                                      <th style="text-align:left">CustomerMessage:&nbsp;</th>
                                      <td style="text-align:left">
                                        <?php     echo " ".$CustomerMessage;  ?>

                                  </td>
                                  </tr>


                              </table>
                              <br>
                              <table style="color:white">
                                <tr>
                                    <th style="text-align:left">Total Price:&nbsp;</th>
                                    <td style="text-align:left">
                                    <strong><?php echo "$".$TotalCost; ?> </strong>
                                    <hr>
                                </td>
                                </tr>
                                <tr>
                                    <th style="text-align:left">Invoice ID:&nbsp;</th>
                                    <td style="text-align:left">
                                    <strong><?php echo $InvoiceID; ?> </strong>
                                    <hr>
                                </td>
                                </tr>

                              </table>


                      <!-- End Header -->

                      </section>
