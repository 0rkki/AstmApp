<?php
include_once("config/chttps.php");
?>
<!DOCTYPE html>
<html lang="fi-FI">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen and (max-width: 500px)" href="css/smallscreen.css">
    <link rel="stylesheet" media="screen and (min-width: 500px)" href="css/widescreen.css">
    <title>Index</title>
</head>
<body>

<!--header, navigointi -->
<div id="header">
		<nav>
            <div class="topnav">
			<ul>
				<li><a href="#">Log out</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Settings</a></li>
            </ul>
            </div>
		</nav>
	</div>
<main>
<div class="grid-box-container">

    <div class="box-1">
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-google"></a>
    <a href="#" class="fa fa-linkedin"></a>
    </div>
    <div class="box box-2">
        [kalenterinäkymä]
        
    </div>
    <div class="box box-3">
        <div class="mittaus">
            SUORITA MITTAUS
        </div>
    </div>
    <div class="box box-4">
        <div class="oireet">
            LISÄÄ</br> 
            OIREET
        </div>
    </div>
    <div class="box box-5">
        Yhteenveto</br>
        <img src="images/report3.png" class="iconReport" alt="raportti">
    </div>
    <div class="box box-6">
        Hengitysharjoitus</br>
        Rentoutus
        <img src="images/mindfulness.png" class="iconMind" alt="mindfulness">
    </div>
    <div class="box box-7">
        Info
    </div>
</div>
</main>
<div class="footer">
    <p>footer</p>
</div>

</body>
</html>