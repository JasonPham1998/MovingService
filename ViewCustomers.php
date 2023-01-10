
<?php
error_reporting(0);

require 'include/database.php';

$InvoiceID = $_POST['InvoiceID'];


$query =    "SELECT *
            FROM invoice
            WHERE InvoiceID = ?;";

            $statement = mysqli_prepare($db, $query);
            mysqli_stmt_bind_param($statement, "i", $InvoiceID);
            mysqli_stmt_execute($statement);
            $results = mysqli_stmt_get_result($statement);
// check for error. If good then use fetch all method to grab all data from results
if ($results === false){
$errors = mysqli_error($db);
}
else {
  $invoice = mysqli_fetch_all($results, MYSQLI_ASSOC); //Turns the results into associative array (gives col names)
  //$MovingID = $customers["CustomerID"];
}
?>

<!-- TAKE INVOICE RESULT, PLUG IT INTO CUSTOMER TABLE -->
<?php

$CustomerID = $invoice[0]['CustomerID'];
$query =    "SELECT *
            FROM customer
            WHERE CustomerID = ?;";

            $statement = mysqli_prepare($db, $query);
            mysqli_stmt_bind_param($statement, "i", $CustomerID);
            mysqli_stmt_execute($statement);
            $results = mysqli_stmt_get_result($statement);
$customers = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>

<!-- SAME THING FOR MOVINGINFO TABLE -->
<?php
$MovingID = $invoice[0]['MovingID'];
$query =    "SELECT *
            FROM movinginfo
            WHERE MovingID = ?;";

            $statement = mysqli_prepare($db, $query);
            mysqli_stmt_bind_param($statement, "i", $MovingID);
            mysqli_stmt_execute($statement);
            $results = mysqli_stmt_get_result($statement);
$moveOrder = mysqli_fetch_all($results, MYSQLI_ASSOC);

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
      <section class="edit-bar">
                   <nav>
                           <a href="index.php"> <img src="images/Mo.jpeg" alt=""  ></a>

                          <div class="nav-links">
                               <ul>
                                      <li> <a href="index.php" >Home</a> </li>
                                      <li>  <a href="service.php">Services</a> </li>
                                      <form class="" action="ViewCustomers.php" method="post">


                                                  <input type="text" style="width: 120px;" name="InvoiceID" class="" id="InvoiceID" placeholder="Invoice" value="">
                                                  <button class="btn-primary">Go</button>
                                    </form> </li>
                               </ul>
                           </div>
                          </nav>

    <?php if (empty($customers)) { ?>
        <h1 style="color:white">No Orders Found. <br><br> Check your email for the correct invoice number.Contact support if more assistance is required.</h1>
      <?php }
      else {?>
      <ul>
        <?php foreach ($customers as $customer) { ?>
          <article>
            <table style="color:white">
              <hr>
              <tr>
                <td>Name:&nbsp;</td>
                <td><?= htmlspecialchars($customer['FirstName']." ".$customer['LastName']); ?></td>
              </tr>
              <tr>
                <td>Email:&nbsp;</td>
                <td><?= htmlspecialchars($customer['Email']); ?></td>
              </tr>
              <tr>
                <td>Phone:&nbsp;</td>
                <td><?= htmlspecialchars($customer['Phone']); ?></td>
              </tr>


            </table>

          </article>
          <?php } ?>
      </ul>
    <?php } ?>


  <ul>
    <?php foreach ($moveOrder as $move) { ?>
      <article>
        <table style="color:white">
          <hr>
          <tr>
            <td>Home Address:&nbsp;</td>
            <td><?= htmlspecialchars($move['SourceAddress']); ?></td>
          </tr>
          <tr>
            <td>Destination Address:&nbsp;</td>
            <td><?= htmlspecialchars($move['DestinationAddress']); ?></td>
          </tr>
          <tr>
            <td>Service Date:&nbsp;</td>
            <td><?= htmlspecialchars($move['DateOfService']); ?></td>
          </tr>
          <tr>
            <td>Message:&nbsp;</td>
            <td><?= htmlspecialchars($move['CustomerMessage']); ?></td>
          </tr>
          <tr>
            <td>Distance:&nbsp;</td>
            <td><?= htmlspecialchars($move['Distance']); ?></td>
          </tr>
          <tr>
            <td>Service Type:&nbsp;</td>
            <td><?= htmlspecialchars($move['ServiceType']); ?></td>
          </tr>

        </table>
      </article>
      <?php } ?>
  </ul>
