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

        #container {
            text-indent: 60px;
            width: 100%;
            
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

        .lab {
            float: left;
            width: 33%;

        }

        .map {
            margin-left: 60px;
            background-color: #E5E5E5;
            width: 75%;
            height: 300px;
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
            }
            #container{
                text-indent:30px;
                width: 100%;
                
            }
            
            .header-lookup{
                font-size: 25px;
                margin-top: 10%;
                
            }
            .searchbar{
                height: 30px;
                width: 70%;
                text-align: left;
                
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
            .map{
                display: none;
            }
        }
    </style>
    <title>Dashboard</title>
</head>

<body>
    <div id="left">
        <img src="./img/Prepr-Logo.png" alt="prepr_logo">
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
            <form method="post">
                <input class="searchbar" type="text"></input>
                <button>
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <h2 class="header-labs">Labs</h2>
            <!--php code starts here-->
	    
		<ul>
			@foreach($locations as $location)
				<li> {{ $location }} </li>
			@endforeach
		</ul>

	    <div class="labs">
                <div class="lab">
                    <h3>We Geek</h3>
                    <div class="map"></div>
                </div>
                <div class="lab">
                    <h3>We Geek</h3>
                    <div class="map"></div>
                </div>
                <div class="lab">
                    <h3>We Geek</h3>
                    <div class="map"></div>
                </div> 

            </div>
            <!--php code endss here-->
        </div>
    </div>
</body></html>
