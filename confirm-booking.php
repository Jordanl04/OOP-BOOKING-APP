<?php

require "../classes/Hotel.php";

session_start();

$_SESSION['hotelList'] = [

    new Hotel(1, "Grand Hotel", 500, 20, false),
    new Hotel(2, "Palms Resort", 600, 30, false),
    new Hotel(3, "Protea Hotel", 500, 0, true),
    new Hotel(4, "Bellville Lodge", 800, 10, false)
];

// retrieve id variable from GET superglobal
$selectedHotelId = $_GET['hotelId'];

// empty variable to hold value of selected hotel object
$selectedHotel;

/* --- Filtering ---
        1. loop over entire list of hotels

        2. take id that passed through GET request and 
           compares it to the id's of all hotels in array

        3. if the id of any hotel in array is the same as
           the id given from the previous page, we pull that Hotel
           object out of the array, and assign it to the $selectedHotel variable
    */
foreach ($_SESSION['hotelList'] as $hotel) {

    if ($hotel->getId() == $selectedHotelId) {

        $selectedHotel = $hotel;
    }
}

// print out variable $selectedHotel to test
// var_dump($selectedHotel);

echo "custoemr data:";

var_dump($_SESSION['customer']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
<nav class="navbar">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/OOP FIN/src/index.php">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<img src="/image2.1.jpg" width="400px"><img src="/image.jpg" width="400px" height="400px">

    <h1 class="title">
        Confirm Booking
    </h1>

    <hr>

    <div  class='box'>
        <h2 class="subtitle">
            Customer Information:
        </h2>
        <?php
            foreach ($_SESSION['customer'] as $detail) {
                echo "
                    <li>
                        $detail
                    </li>
                ";   
            }
        ?>
    </div>

    <style>
.navbar {
  list-style-type: none;
  margin: 0;
  padding: 0px;
  width: 1000px;
  background-color: #fff;
}

.nav-item{
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

.nav-item:hover{
  background-color: #545;
  color: white;
}
</style>



    <h2 class="subtitle">
        Hotel Information:
    </h2>
    <?php
        echo "
            <div class='box'>
                <li> Hotel Id: ". $selectedHotel->getId() ." </li>
                <li> Name: ". $selectedHotel->getName() ." </li>
                <li> Cost per night: R". $selectedHotel->getCostPerNight() ." </li>
                <li>";
                    if( !$selectedHotel->getFullyBooked() ) {
                    echo "<span class='has-text-success'> Rooms Available </span>";
                    } else {
                    echo "<span class='has-text-danger'> No rooms available </span>";
                    }
        echo    "</li>             
            </div>
        ";
    ?>

</body>

</html>