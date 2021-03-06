<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <style>
        html,
        body {
            margin: 0;
            height: 100%;
            width: 100%;
            font-family: Arial, Helvetica, sans-serif;
        }

        #left {
            float: left;
            width: 20%;
            text-align: center;
            background: #797979;
            height: 100%;
        }

        #right {
            float: left;
            width: 80%;
            color: #666363;
            margin: 0 auto;
        }


        img {
            width: 220px;
            margin-top: 132px;
        }

        .nav {
            margin: 50px auto;
        }

        .nav div {
            display: block;
            background: #E5E5E5;
            color: #666363;
            margin: 10px 20px;
            padding: 15px;
            border-radius: 5px;
        }

        .topbar {
            width: 100%;
            height: 60px;
            background: #C4C4C4;

        }

        .header-lookup {
            font-size: 60px;
        }

        .searchbar {
            height: 40px;
            width: 80%;
            background: #E5E5E5;
            color: #666363;
            font-size: 35px;
            border: none;
            border-radius: 3px;
            vertical-align: bottom;
        }

        form button {
            width: 40px;
            height: 40px;
            border: none;
        }

        .header-labs {
            font-size: 40px;
            font-weight: 600;
            margin-bottom: 0px;
        }

        .labs {
            display: block;
            margin: 0 auto;
        }
        #container{
                text-indent:30px;
                width: 100%;
                
            }

        .lab {
            float: left;
            width: 33%;

        }

        #map {
            margin-left: 60px;
            background-color: #E5E5E5;
            width: 700px;
            height: 500px;
        }
        
        @media (max-width:400px){
            #left{
                float: none;
                width:100%;
                text-align: left;
                height: 77px;
            }
            #right{
                float:none;
                width: 100%;
            }
            img{
                width: 70px;
                margin-top: 14px;
                margin-left: 21px;
            }
            .nav{
                display: none;
            }
            .topbar{
                display: none;
            
            .header-lookup{
                font-size: 25px;
                margin-top: 10%;
                
            }

            form button {
            width: 30px;
            height: 30px;
        }
            .header-labs{
                display: none;
            }
            .labs{
                display: inline-block;
                width: 100%;
                text-indent: 0px;
            }
            .lab{
                float: none;
                background: #E5E5E5;
                width: 79%;
                margin: 20px auto;
                padding: 10px;
                border-radius: 5px;
                text-align: center;
              
            }
        }
    </style>
    <title>Dashboard</title>
</head>

<body>
    <div id="left">
        <img src="{{ asset('imgs/Prepr-Logo.png') }}" alt="prepr_logo">
        <div class="nav">
            <div>LABS</div>
            <div>FAVOURITES</div>
            <div>MY ACCOUNT</div>
        </div>
    </div>
    <div id="right">
        <div class="topbar"></div>
        <div id="container">
            <h1 class="header-lookup">LAB LOOKUP</h1>
            
            <h2 class="header-labs">Labs</h2>
            <!--php code starts here-->

            <div class="form-group">
                <label for="address_address">Address</label>
                <input type="text" id="address-input" name="address_address" class="form-control map-input">
                <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                <input type="hidden" name="address_longitude" id="address-longitude"    value="0" />
            </div>
            <div id="address-map-container" style="width:100%;height:400px; ">
                <div style="width: 100%; height: 100%" id="address-map"></div>
            </div>
            <div>
                <ul id="labs">
                    <!-- location info -->
                </ul>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ $map }}&libraries=places&callback=initMap" async defer></script>
    <script src="/js/mapInput.js"></script>
</body></html>
