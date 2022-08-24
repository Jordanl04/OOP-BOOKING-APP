<?php

    require "../classes/Hotel.php";

    session_start();

    /* 
        Array inside of the SESSION Superglobal to hold hotel objects that
        are inside the system
    */

    $_SESSION['hotelList'] = [
        
        new Hotel(1, "Grand Hotel", 500, 20, false),
        new Hotel(2, "Palms Resort", 600, 30, false),
        new Hotel(3, "Protea Hotel", 500, 0, true),
        new Hotel(4, "Bellville Lodge", 800, 10, false)
    ];

    for($i=0; count($arr1); $i++) {
        echo '<img src= "image2.1.jpg"'.$arr1[$_SESSION].'">';
     }

    if (isset($_POST['submit'])) {

        $name = $_POST['customerName'];
        $email = $_POST['customerEmail'];
        $inDate = $_POST['checkInDate'];
        $outDate = $_POST['checkoutDate'];

        $userNumDays = Hotel::calculateNumDays($inDate, $outDate);

        // saving user data to SESSION superglobal
        $_SESSION['customer'] = [
            'name' => $name,
            'email' => $email,
            'inDate' => $inDate,
            'outDate' => $outDate,
            'userNumDays' => $userNumDays,
        ];

        var_dump($_SESSION['customer']);

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <div class="slide">
          <img src="/Getaway Finds-logos.jpeg" width="200px" />
        </div>
    <nav class="navbar">
  <div class="container">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/OOP FIN/src/index.php">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </div>
</nav>
</head>

<body>

<style>
.navbar {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
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


    <h1 class="title">
        Hotel List:
    </h1>

    <ul class="p-5">
    
        <?php
        foreach ($_SESSION['hotelList'] as $hotel) {
            echo "
                <div class='box'>
                    <li> Hotel Id: ". $hotel->getId() ." </li>
                    <li> Name: ". $hotel->getName() ." </li>
                    <li> Cost per night: R". $hotel->getCostPerNight() ." </li>
                    <li>"; 
                        if( !$hotel->getFullyBooked() ) {
                            echo "<span class='has-text-success'> Rooms Available </span>";
                        } else {
                            echo "<span class='has-text-danger'> No rooms available </span>";
                        }
            echo "  </li>
                    <li> Total Cost of Trip: R". $hotel->calculateCostOfStay($userNumDays) .",00 </li>

                    <form action='confirm-booking.php' method='get'>
                        <input type='text' name='hotelId' value=". $hotel->getId() ." hidden>
                        <button type='submit' name='book'>Book</button>
                    </form>

                </div>
            ";
        }
        ?>
        
    </ul>

</body>

</html>