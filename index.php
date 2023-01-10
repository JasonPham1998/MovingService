<?php require 'include/database.php';?>

<!-- #If Book Now is clicked on Services.php, then it will redirect to index.php, then scroll to the booking form -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  // Check if the anchor tag was clicked
  if (window.location.search.includes('anchor=clicked')) {
    // Get the form
    const form = document.querySelector('#customer-form');

    //scroll to the form
    form.scrollIntoView({ behavior: 'smooth' });
  }
});
</script>
<!-- #End -->

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BC Movers</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <!---HEADER -->
        <section class="header">
          <nav>
            <a href="index.php"> <img src="images/Mo.jpeg" alt=""  ></a>
                <div class="nav-links">
                    <ul>
                      <li> <a href="index.php" >Home</a></li>
                      <li>  <a href="service.php">Services</a> </li>
                      <li style="color:white"> Order Search
                      <form class="" action="ViewCustomers.php" method="post">
                          <input type="text" name="InvoiceID" class="" id="InvoiceID" placeholder="Invoice" style="width: 120px;" value="">
                          <button class="btn-primary">Go</button>
                      </form>
                    </li>
                  </ul>
                </div>
            </nav>
            <div class="text-box">
                <h1>BC Movers</h1>
                <p>BC Movers are trending as the #1 rated moving company in BC, <br> feel to explore and understand our services </p>
            </div>
        </section>

                  <!--MAIN-->

            <section class="form">

                        <h2>Get In Touch</h2>
                        <div class="line"></div>

                        <div class="row">
                            <h3>Fill out to book now</h3>

                            <div class="col">

              <form id="customer-form" action="edit.php" method="post">

                        <div class="form-row">
                                  <div class="col-md-4 mb-3">
                                    <label for="FirstName">First Name</label>
                                    <input type="text"  name="FirstName" class="form-control is-valid" id="FirstName" placeholder="First name" value="" required>
                                 </div>


                        <div class="col-md-4 mb-3">
                                    <label for="LastName">Last Name</label>
                                    <input type="text" name="LastName" class="form-control is-valid" id="LastName" placeholder="Last Name" value="" required>
                                </div>


                        <div class="col-md-4 mb-3">
                                    <label for="Email">Email Address</label>
                                    <input type="email" name="Email" class="form-control is-invalid" id="Email" placeholder="email@website.com" value="" required>
                                 </div>
                               </div>


                        <div class="form-row">
                         <div class="col-md-6 mb-3">
                                    <label for="Phone">Phone Number</label>
                                    <input type="tel" name="Phone" class="form-control is-invalid" id="Phone" placeholder="000-000-0000" value="" required>
                                </div>

                                <button class="btn-primary">Customize Your Order</button>
              </form>
                            </div>
          </section>


                  <!----- About Section ----->

                  <section class="about">

                            <h2>Who we are</h2>
                                <div class="line"></div>

                        <div class="row-2">


                         <div class="about-col">
                             <h3>Customer Driven</h3>
                             <p>Nothing matters more to us than meeting our client's needs.Your priorities are our priorities. We are always looking for ways to go above and beyond in meeting expectations</p>
                           </div>


                        <div class="about-col">
                             <h3>Flexible</h3>
                             <p>Flexibility is key to our approach. We adapt to the preferences and needs of our clients. We believe the only way  is to continuously embrace change, always keeping our client's goal at the center focus.</p>
                           </div>

                        <div class="about-col">
                             <h3>Non-Profit</h3>
                             <p>BC Movers is a not-for profit moving organization that services all of BC. We specialize in all your moving needs from residential to commercial relocation. Understanding people's negative past experiences. We guarantee that your experience with us will be most friendly, positive, and the most satisfying you have ever had.</p>
                         </div>
                     </div>



                                <!-- Customer Review Section -->

                                <h2>What Our Customers Say</h2>
                                <div class="line"></div>

                            <div class="row-3">

                                <div class="review-col">
                                    <div>
                                        <p>"BC Movers are incredible!
                                            They deliver the best services for your moving needs. Highly Recommended"</p>
                                            <h3> - Christine Bailey</h3>
                                    </div>
                                </div>

                                <div class="review-col">
                                     <div>
                                        <p> "BC Movers is the best!
                                            They took care of all my goods that needed to be moved without me doing any work. Nothing was damaged, they helped setup and
                                            was worth every penny. Definitely best moving service hands down"</p>
                                            <h3> - Jason Bourne</h3>
                                        </div>
                                    </div>
                                </div>
                        </section>

                  <<!-- Contact Footer -->

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
