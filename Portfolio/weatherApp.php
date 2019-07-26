<html>
	<head>
		<title>weather</title>

			<!-- LINKS AND LIBRARIES -->
			<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    		<meta name="viewport" content="width=device-width, initial-scale=1">
    		<meta name="robots" content="noindex, nofollow" />
    		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    		

    	<!-- CSS -->
      	<style type="text/css">
      		<?php include('pages.css');  ?>

		</style> 
		<style>
			body{background-color: #00FFFF;}
			header{background-color: #e9ecef;}
			.main{
				text-align: center;
				font-size: 20px;
				padding: 70px;
			}
			#nav{padding: 50px;}
			.weather{
				text-align: center;
				font-size: 30px;
				color: white;
			}
			.temp{
				text-align: center;
				font-size: 50px;
				color: white;
				font-weight: bold;
			}
			.description{
				text-align: center;
				font-size: 30px;
				color: white;
			}
		</style>

		<!-- JAVASCRIPT -->
    	<script>
			function openNav() {
  				document.getElementById("mySidenav").style.width = "250px";
			}

			function closeNav() {
  				document.getElementById("mySidenav").style.width = "0";
			}
			
		</script>
	</head>

	<body>
		<header> 

      		<i onmouseover = 'openNav()'id = 'nav' class="material-icons md-48">menu</i>
      
      		<!-- NAVIGATION MENUS-->
      		<div  id = 'mySidenav'class="sidenav">
        		<div class="sidenav-header">
          			<p> Hello Visitor</p>
        		</div>
        		<a href="holidayCalender.php"> Holiday Calendar </a>
        		<a href="passwordGenerator.php"> Password Generator </a>
        		<a href="#"> Chatbot </a>
        		<a href="#"> Cooking </a>
        		<a href="weatherApp.php"> Weather App </a>
        		<a href="#"> More </a>
      		</div>

      		<div onmouseover="closeNav()">
		    	<div  class="jumbotron text-center" style="margin-bottom:0">
  			   		<h1>WEATHER</h1>
  			   		<p> Also notifies you to carry an umbrella or wear sunscreen </p> 
		    	</div>

     		 </div>
		</header>

		<div class ="main">
			<input type = 'text' id = 'place' placeholder="Enter a city name..." size="50"> </br> </br>
			<button id = 'butt'> Get Weather </button>
			<button id = 'location'> Get Weather for Current Location </button>
		</div>

		<div class = "weather">

		</div>
		<div class = "temp">

		</div>
		<div class = "description">

		</div>
		 <script>

		 	
      
      function getWeather(){
        $(".weather").html('');
        $(".temp").html('');
        $(".description").html('');
        var api = 'https://api.openweathermap.org/data/2.5/weather?q=';
        var place = document.getElementById("place").value;
        var apiKey = "&units=metric&appid=693fba9d392ff15be20ce75c9660ba89";
        
        var api = "";
        var place = document.getElementById("place").value;
        var apiKey 

        var apiCall = api+place+apiKey;

        $.getJSON(apiCall, weatherCallBack);

        function weatherCallBack(weatherData){
        	var cityName = weatherData.name;
        	var country = weatherData.sys.country;
        	var description = weatherData.weather[0].description;
        	var temperature = weatherData.main.temp;
        	var minTemp = weatherData.main.temp_min;
        	var maxTemp = weatherData.main.temp_max;

        	$(".weather").append("The temperature in "+cityName+", "+country+" is"+"<br/>");
        	$(".temp").append(temperature+"°C"+"<br/>"+"<br/>");
        	$(".description").append("Description: "+description+"<br/>"+"Minumum Temperature: "+minTemp+"<br/>"+"Maximum Temperature: "+maxTemp+"<br/>"+"<br/>"+"<br/>");

        	if(description.includes("rain")){
        		$(".description").append("You should probably carry an umbrella"+"<br/>");
        	}
        	else if(parseInt(temperature) > 20){
        		$(".description").append("You should probably wear sunscreen"+"<br/>");
        	}

        	else if(parseInt(temperature) < 5){
        		$(".description").append("You should probably grab a sweater"+"<br/>");
        	}

        	else if(parseInt(temperature) > 40){
        		$(".description").append("You should definitely wear sunscreen"+"<br/>");
        	}

        	else if(parseInt(temperature) > 20){
        		$(".description").append("You should probably wear sunscreen"+"<br/>");
        	}

        	console.log(weatherData);
          
          }
        }


			$(document).ready(function(){
				$("#butt").click(function(){
					
					getWeather();
          geolocation();
				})

			});

       var input = document.getElementById("place");
			input.addEventListener("keyup", function(event) {
  				if (event.keyCode === 13) {
   					event.preventDefault();
   					getWeather();
           
  				}
			});


      function geolocation(){
      function onPo(position){
        console.log(position);
      }

      if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(onPo);
      }
    }
    </script>
    <script type="text/javascript">
    	function getWeather(){
        	$(".weather").html('');
        	$(".temp").html('');
        	$(".description").html('');

        	var api = "https://api.darksky.net/forecast/e703f4f0137c32d33f324c763f436f19/";
        	
        	var apiCall = "";

        	$.getJSON(apiCall, weatherCallBack);

        	function weatherCallBack(weatherData){
        	}
        }
    </script>
    
	</body>
</html>