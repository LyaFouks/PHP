<?php

error_reporting(E_ERROR | E_PARSE);

$weather = "";

$error = '';

if(isset($_GET["city"])) {

  $urlContent =  file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$_GET["city"]."&units=metric&appid=df29e38d0da4a22cffe9ed613b49aa48");

  $forcastArray = json_decode($urlContent, true);

  
  if ($forcastArray['cod'] == 200) {
    
    $weather = 'The weather in '.$_GET["city"].' is '.$forcastArray['weather'][0]["description"];

  $weather = $weather.'. The temperature is '.$forcastArray['main']['temp'].' &#8451'.'. The speed of wind is '.$forcastArray['wind']['speed'].' m/sec';
  
  } else{
      $error = 'The city name is incorrect, please try another name';
  }

  
 }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
  </head>
  <body>

    <div class="container" id="mainDiv">
      <h1>Weather in The city</h1>
        

    <form>
      <div class="form-group">
        <label for="city">Enter city name</label>
        <input type="text" name="city" class="form-control" id="city" aria-describedby="Forcast cty" placeholder="Enter City Name">
      </div>
      <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    </div>

    <div>
      
      
         
        <?php
          
          if ($weather) {
            echo '<div class="alert alert-primary" role="alert">'.$weather.'</div>';
          
          } else if($error) {
            echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
          }
          

        ?>
      
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>