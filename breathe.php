<?php
    include_once("config/cconfig.php");
?>

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
    <link rel="stylesheet" type="text/css" href="css/breathe.css">
    
    <title>Breathe</title>
</head>

<body>
    <main class="background">
    
    <div class="box box-1">
        <h3 class="h3">Hengitysharjoitus</h3>
    </div>

    <div class="grid-box-container">
        <div class="box box-2">
            <button type="button" class="button">1 min</button>
        </div>

        <div class="box box-3">
            <button type="button" class="button">3 min</button>
        </div>

        <div class="box box-4">
            <button type="button" class="button">5 min</button>
        </div>  

        <div class="box box-5">
            Animaatio
        </div>

        <div class="box box-6">
            <h3 class="h3">Rentoutumisharjoitus</h3>
        </div>


        <div class="box box-7">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/cF68gVXtwdg" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        <div class="box box-8">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/6xl1Ss5SeZo" frameborder="0" 
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="box box-9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/loLZIfXzReg" 
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>
        </div>

        <div class="box box-10">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/SoRE945WcSE" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <div class="footer">
        <p>footer</p>
    </div>
    
    </body>
</html>

