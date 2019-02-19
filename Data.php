<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Booking-Details</title>
	 <link rel="stylesheet" href="./scss/data.css">
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
<div class="booking-info-container">

<div class="jumbotron jumbotron-fluid header-bg">
  <div class="container">
    <h3 class="display-4">KINGINI</h3>
    <p class="lead">Lake View Villa </p>
  </div>
</div>

<div class="container">
    <div class="row mb-5">
      <div class="col-md-12">
        <div class="block-32">
          <form action="#">
            <div class="row">

              <div class="col-md-6 mb-3 mb-lg-0 col-lg-4">
                <label for="checkin">Start Date</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="text" id="checkin_date" class="form-control" autocomplete="off">
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-4">
                <label for="checkin">End Date</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="text" id="checkout_date" class="form-control" autocomplete="off"  onchange="checkdate()">
                </div>
              </div>
             
              <div class="col-md-6 col-lg-4 align-self-end">
              <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#bookingModalCenter">Check Bookings</button>
              </div>
            </div>
          </form>
        </div>
      </div>
	</div>
</div>
	
  <table class="table table-hover booking-table">
  <thead class="theme-color">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Booking Date</th>
	  <th scope="col">Check-in</th>
	  <th scope="col">Check-out</th>
	  <th scope="col">Mobile</th>
	  <th scope="col">Email</th>
	  <th scope="col">Adults</th>
	  <th scope="col">Children</th>
	  <th scope="col">Rooms</th>
	  <th scope="col">Room Type</th>
    </tr>
  </thead>

  <tbody class="table-body">
    <tr>
      <th scope="row">1</th>
      <td>Mark Antony</td>
      <td>10/02/2019</td>
	  <td>14/02/2019</td>
	  <td>17/02/2019</td>
	  <td>8156985013</td>
	  <td>markantony56@gmail.com</td>
	  <td>6</td>
	  <td>2</td>
	  <td>2</td>
      <td>BOTH</td>
	</tr>
	
	<tr>
      <th scope="row">1</th>
      <td>Mark Antony</td>
      <td>10/02/2019</td>
	  <td>14/02/2019</td>
	  <td>17/02/2019</td>
	  <td>8156985013</td>
	  <td>markantony56@gmail.com</td>
	  <td>6</td>
	  <td>2</td>
	  <td>2</td>
      <td>BOTH</td>
	</tr>
	
	<tr>
      <th scope="row">1</th>
      <td>Mark Antony</td>
      <td>10/02/2019</td>
	  <td>14/02/2019</td>
	  <td>17/02/2019</td>
	  <td>8156985013</td>
	  <td>markantony56@gmail.com</td>
	  <td>6</td>
	  <td>2</td>
	  <td>2</td>
      <td>BOTH</td>
    </tr>
   
  </tbody>
</table>    
  </div>



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
  <script src="js/disableText.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/main.js"></script>



</body>

</html>