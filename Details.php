<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grand Hotel details</title>
        
    </head>
    <body>
        <img src="/Getaway Finds-logos_transparent.png" width="100px">
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="/image2.1.jpg" width="100%" id="mainimg">
                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="/image2.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="/image 2.3.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="/image 2.4.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="/image 2.5.jpg" width="100%" class="small-img">
                        </div>
                    </div>
                </div>
                <div class="col-2">
                <h1>Grand Hotel</h1>
                 <br>
                <h4>R500 per night</h4>
                <h4>Location:Cape Town South Africa</h4> 
                <p>This Cape Town hotel has 176 rooms. City Lodge Hotel GrandWest is themed on the original Cape Dutch style of architecture and is 20 minutes from Cape Town’s International Airport, the city centre and the V & Waterfront. The hotel is part of the GrandWest Casino Resort, boasting a cinema complex, ice-rink, restaurants, bars, gaming tables and slot machines.</p>
                <br>
                <button class="bb">Back</button>
                </div>
            </div>
        </div>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body{
                font-family: 'Poppins', sans-serif;
            }

            .small-container{
                max-width: 1000px;
                margin: auto;
                padding-left: 25px;
                padding-right: 20px;
            }

            .row{
                display: flex;
                align-items: center;
                flex-wrap: wrap;
                justify-content: space-around;
            }

            .single-product{
                margin-top: 80px;
            }

            .small-img-row{
                display: flex;
                justify-content: space-around;
            }
            .col-2 img{
                max-width: 100%;
                padding: 50px 0;
            }

            .small-img-col{
                flex-basis: 24%;
                cursor: pointer;
            }

            .single-product .col-2 img{
                padding: 0;
            }

            .single-product .col-2{
                padding: 20px;
            }

            .col-2{
                flex-basis: 50%;
                min-width: 300px;
            }

            .col-2 h1{
                font-size: 50px;
                line-height: 60px;
                margin: 25px 0;
            }

            .single-product h4{
                margin: 20px 0;
                font-size: 22px;
                font-weight: bold;
            }

            .bb{
                cursor: pointer;
                border-radius: 30px;
                background: #dc143c;
                color: #fff;
                transition: transform 0.35 ease;
                text-decoration: none;
                padding: 10px 15px;
                font-size: 1.25rem;
                position: relative;
                
            }
        </style>
        <script>
            let btnBack = document.querySelector('button');

            btnBack.addEventListener('click', () => {
                window.history.back();
            });
        </script>
    </body>
</html>