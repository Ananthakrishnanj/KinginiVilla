<!DOCTYPE html>
<html lang="en">

<head>
  <title>Kigini- Lake View Villa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="scss/style.css">
  <link rel="icon" type="image/png" href="images/icons/KinginiLogo.png"/>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

<!-- Modal -->
<div class="modal fade viewport-width" id="bookingModalCenter" tabindex="-1" role="dialog" aria-labelledby="bookingModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookingModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">      
      <form action="insert.php" method="POST">
      <div class="form-group">
      <label for="inputName4">Name</label>
      <input type="text" class="form-control" id="inputName4" name="name" placeholder="Full-Name"  autocomplete="off">
    </div>
    <div class="form-group">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email"  autocomplete="off">
    </div>
    <div class="form-group">
      <label for="inputNumber4">Contact-Number</label>
      <input type="tel" class="form-control" id="inputNumber4" name="contact" placeholder="Number"  autocomplete="off">
    </div>
  
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="checkin">Adults</label>
                    <div class="field-icon-wrap">
                      <div class="icon"></div>
                      <select name="" id="" class="form-control" name="adults">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
  </div>
  <div class="form-group col-md-6">
  <label for="checkin">Children</label>
                    <div class="field-icon-wrap">
                      <div class="icon"></div>
                      <select name="" id="" class="form-control" name="children">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
  </div>
</div>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Book!</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal ending -->


  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container" style="justify-content:center !important">
      <a class="navbar-brand " href="index.php">Kingini<p class="caption">Lake View Villa</p></a>      
      </div>
  </nav>
  <!-- END nav -->

  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31">
      <div class="block-30 item" style="background-image: url('images/bg.jpg'); " data-stellar-background-ratio="1.0">
        <div class="container "  style="margin-left: 10px !important">
          <div class="row align-items-center">
            <div class="col-md-6">
              <!-- <span class="subheading-sm">Welcome Guest !</span> -->
              <!-- <p class="heading wow fadeInUp">The Homely Feel, Like Never Before!<p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 

  <!-- Bookings  -->

  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12">
        <div class="block-32">
          <form action="index.php" method="POST">
            <div class="row">
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                <label for="checkin">Check In</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="text" id="checkin_date" name="checkin" class="form-control" autocomplete="off">                  
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                <label for="checkin">Check Out</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="text" id="checkout_date" name="checkout" class="form-control" autocomplete="off">
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                <div class="row">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label for="checkin">Rooms</label>
                    <div class="field-icon-wrap">
                      <div class="icon"></div>
                      <select  onchange="disable()" name="room-dropdown" id="numberOfRooms" class="form-control" name="rooms">                        
                        <option value="1" selected="selected">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label for="checkin">Room-Type</label>
                    <div class="field-icon-wrap">
                      <div class="icon"></div>
                      <select name="room-type" id="roomType" class="form-control" name="roomtype">                      
                        <option value="AC">AC</option>
                        <option value="NON-AC">Non-AC</option>
                        <option value="ANY" selected="selected">Any</option>         
                        <option id="hidden-option" value="BOTH">Both</option>                        
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 align-self-end">
              <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#bookingModalCenter">Check Availabilty</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="row site-section">
      <div class="col-md-12">
        <div class="row mb-5">
          <div class="col-md-7 section-heading">
            <h2 class="heading">Facilities &amp; Services</h2>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="media block-6">
          <div class="icon"><span class="flaticon-double-bed"></span></div>
          <div class="media-body">
            <h3 class="heading">Luxury Rooms</h3>
            <p>To give you the perfect stay, which is affordable too!</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="media block-6">
          <div class="icon"><span class="flaticon-wifi"></span></div>
          <div class="media-body">
            <h3 class="heading">Fast &amp; Free Wifi</h3>
            <p>We provide Wifi, so that you remain connected to your loved ones!</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="media block-6">
          <div class="icon"><span class="flaticon-customer-service"></span></div>
          <div class="media-body">
            <h3 class="heading">Call Us 24/7</h3>
            <p>We are here to provide you all the care you need and to solve your concerns </p>
          </div>
        </div>
      </div>

      <!-- <div class="col-md-6 col-lg-4">
        <div class="media block-6">
          <div class="icon"><span class="flaticon-taxi"></span></div>
          <div class="media-body">
            <h3 class="heading">Travel Accomodation</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>
      </div> -->
      <!-- <div class="col-md-6 col-lg-4">
        <div class="media block-6">
          <div class="icon"><span class="flaticon-credit-card"></span></div>
          <div class="media-body">
            <h3 class="heading">Accepts Credit Card</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>
      </div> -->
      <div class="col-md-6 col-lg-6">
        <div class="media block-6">
          <div class="icon"><span class="flaticon-dinner"></span></div>
          <div class="media-body">
            <h3 class="heading">Food</h3>
            <p>How to perfectly get the homely feel? We provide you all the kitchen facilities. We also arrange Homely food.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section block-13 bg-black">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-7 section-heading">
          <h2 class="heading">Rooms &amp; Suites</h2>
          <p>We provide you with neat rooms to make you perfectly comfortable, so that you feel like you are at Home!</p>
        </div>
      </div>

      <!-- Rooms available -->
      <div class="row">
        <div class="col-md-12">
          <div class="nonloop-block-13 owl-carousel">
            <div class="item">
              <div class="block-34">
                <div class="image">
                  <a href="#"><img src="images/room_1.jpg" alt="Image placeholder"></a>
                </div>
                <div class="text">
                  <h2 class="heading">Non-Ac Room</h2>
                  <div class="price"><sup>₹</sup><span class="number">2500</span><sub>/per night</sub></div>
                  <ul class="specs">
                    <li><strong>Adults:</strong> 2+</li>
                    <li><strong>Categories:</strong> Single</li>
                    <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                    <!-- <li><strong>Size:</strong> 20m<sup>2</sup></li> -->
                    <li><strong>Bed Type:</strong> Double bed</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="block-34">
                <div class="image">
                  <a href="#"><img src="images/room-2.jpg" alt="Image placeholder"></a>
                </div>
                <div class="text">
                  <h2 class="heading">Ac Room</h2>
                  <div class="price"><sup>₹</sup><span class="number">2500</span><sub>/per night</sub></div>
                  <ul class="specs">
                    <li><strong>Adults:</strong>  2+</li>
                    <li><strong>Categories:</strong> Single</li>
                    <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                    <!-- <li><strong>Size:</strong> 20m<sup>2</sup></li> -->
                    <li><strong>Bed Type:</strong> Double bed</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="block-34">
                <div class="image">
                  <a href="#"><img src="images/room-3.jpg" alt="Image placeholder"></a>
                </div>
                <div class="text">
                  <h2 class="heading">Ac Room</h2>
                  <div class="price"><sup>₹</sup><span class="number">3500</span><sub>/per night</sub></div>
                  <ul class="specs">
                    <li><strong>Adults:</strong>  2+</li>
                    <li><strong>Categories:</strong> Single</li>
                    <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                    <!-- <li><strong>Size:</strong> 20m<sup>2</sup></li> -->
                    <li><strong>Bed Type:</strong> Double bed</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="block-34">
                <div class="image">
                  <a href="#"><img src="images/room_1.jpg" alt="Image placeholder"></a>
                </div>
                <div class="text">
                  <h2 class="heading">Non-Ac Room</h2>
                  <div class="price"><sup>₹</sup><span class="number">3500</span><sub>/per night</sub></div>
                  <ul class="specs">
                    <li><strong>Adults:</strong>  2+</li>
                    <li><strong>Categories:</strong> Single</li>
                    <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                    <!-- <li><strong>Size:</strong> 20m<sup>2</sup></li> -->
                    <li><strong>Bed Type:</strong> Double bed</li>
                  </ul>
                </div>
              </div>
            </div>


          </div>
        </div> <!-- .col-md-12 -->
      </div>
    </div>
  </div>



  <!-- <div class="block-30 block-30-sm item"
    data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12">
          <h2 class="banner-text">Quality accommodation that exceeds the expectations</h2>
        </div>
      </div>
    </div>
  </div> -->


  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">About Us</h3>
          <p class="mb-5">Set on the banks of the famous Lake, Punnamada we offer you accommodation and all the care you need to make your Stay perfect while you enjoy the beautiful Lake View</p>          
        </div>  
        <div class="col-lg-4">
        
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Contact Info</h3>
            <ul>
              <li><a href="https://www.google.com/maps/place/Kingini+lake+view+villa/@9.532882,76.3528267,17z/data=!4m12!1m6!3m5!1s0x3b0885473ebb9395:0xd63d1e2f46aaf703!2sKingini+lake+view+villa!8m2!3d9.532882!4d76.3528267!3m4!1s0x3b0885473ebb9395:0xd63d1e2f46aaf703!8m2!3d9.532882!4d76.3528267" target="_BLANK"><span class="icon icon-map-marker"></span><span class="text">Punnamada, Alappuzha<br/> Kerala, India</span></a></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text">9446056106<br/>9048414451<br/>9633931385</span></a></li>
              <li><a href="mailto:kinginivilla@gmail.com"><span class="icon icon-envelope"></span><span class="text">kinginivilla@gmail.com</span></a></li>
              <!-- <li><span class="icon icon-clock-o"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li> -->
            </ul>
          </div>
        </div>
      </div>

      <div class="row pt-5">
        <div class="col-md-12 text-center">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved |
            <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a> |
            <a href="" target="_blank" class="text-primary">000webhost</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
  <script>
    new WOW().init();
        
window.onload = () => {
    let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
    el.parentNode.removeChild(el);
}

  function validate() {
  if(document.getElementById('checkin_date').value > document.getElementById('checkout_date').value) {
    console.log("Incorrrect");
  }
  }
    </script>
  <script src="js/disableText.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(9.492090,76.347990),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById('googleMap'),mapProp);
console.log("MAP : ",map)
}
</script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDp5twE0xXfEN32I4lGMTrNkHc0UHe_1aM&callback=myMap"></script> 
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</body>

</html>