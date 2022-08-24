
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getaway Finds</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Merienda+One&family=Open+Sans:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<div class="slide">
          <img src="/Getaway Finds-logos.jpeg" width="200px" />
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Register</a>
    </div>
  </div>
</nav>
</head>


<body>

    <div>
        <h2 class="subtitle">
            Please enter your details in the form below to book a hotel..
        </h2>
        <form action="./pages/hotels.php" method="post">
            <input type="text" name="customerName" placeholder="Please enter your name.." required>
            <input type="email" name="customerEmail" placeholder="Please enter your email.." required>
            <label for="checkInDate">Check In Date</label>
            <input type="date" name="checkInDate" required>
            <label for="checkInDate">Check Out Date</label>
            <input type="date" name="checkoutDate" required>
            <button type="submit" name="submit" class="button is-danger">View Hotels</button>
        <div class="swiper-slide">
          <img src="https://www.lux-review.com/wp-content/uploads/2019/09/turkish-hotel.jpg" />
        </div>
    </div>
    
    <style>
        *{
            font-family: 'Poppins', Sans-serif;
        }

        .h-font{
            font-family: 'Merienda', cursive;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        input[type=number] {
        -moz-appearance: textfield;
        }

        .container-fluid{
            background: silver;
        }

        .subtitle{
            text-align: center;
        }

        .swiper-slide{
            justify-content: space-between;
        }
    </style>

</body>

</html>