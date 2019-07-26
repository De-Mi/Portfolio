<!DOCTYPE html>
<html>

	<head>
	
		
		
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

    		<title>OPUS</title>

    		<!-- CSS -->
      		<style type="text/css">
      			<?php include('pages.css');  ?>
      			
      			
      			.header{
    				background-color: black;
    				padding: 80px;
    				text-align: center;
    				font-size: 30px;
  					color: white;
    			}
    			#name{font-size: 200px;}
    			#main {transition: margin-left .5s;padding: 16px;}
    			#share{
    				float:right;
    				color: white;
    				padding: 50px;
    				cursor:pointer
    			}
  
     			#nav{
    				float:left;
    				color: white;
    				padding: 50px;
    				cursor:pointer
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
		
		<!-- ICONS -->
		<div>
			<i id = 'share' class="material-icons md-48">share</i>
			<i onclick = 'openNav()' id = 'nav' class="material-icons md-48">menu</i>
		</div>
		
		<!-- MODAL HEADER -->
		
		<div id="myModal" class="modal" >

  			<!-- Modal content -->
  			<div class="modal-content">
    			<div class="modal-header">
    				<!-- <h5>Share</h5> -->
      				<span class="close">&times;</span>
      				
   				 </div>
    			<div class="modal-body">
     				<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter">  </a>
					<a href="#" class="fa fa-linkedin">  </a>
					<a href="#" class="fa fa-youtube">  </a>
					<a href="#" class="fa fa-instagram">  </a>
					<a href="#" class="fa fa-yahoo">  </a>
            		<a href="#" class="fa fa-reddit"></a>
            		<a href="#" class="fa fa-tumblr"></a>
            		<a href="#" class="fa fa-snapchat-ghost"></a>
            		<a href="#" class="fa fa-google"></a>
            		<a href="#" class="fa fa-vine"></a>
					<a href="#" class="fa fa-skype"></a>
    			</div>
    			<div class="modal-footer">
      				<h5>Share</h5>
   			 	</div>
  			</div>

		</div>

		
		
		
		<!-- NAVIGATION MENUS-->
		<div id = 'mySidenav'class="sidenav">
			<div class="sidenav-header">
				<p> Hello Visitor</p>
			</div>
  			<a href="#">Home</a>
  			<a href="#">How to use</a>
 			<a href="#">Contact us</a>
  			<a href="#">About</a>
		</div>
		
		
		
		
		<!-- HEADER -->
		<div onclick = 'closeNav()'  id = 'main' class = "header">
			
			<h1 id = 'name' class="display-1"><strong>OPUS</strong></h1><p> welcomes you </p>		
			<button class="button" href = 'portfolio.php' ><span>Get Started</span></button>
			
		</div>
		
		<!-- CONTENT -->
		<div onclick = 'closeNav()' class = "content">
			<p> Limitless possibilities </p>
		</div>
		
		<!-- SLIDESHOW -->
		
		
		<div onclick = 'closeNav()' id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
    			<li data-target="#demo" data-slide-to="1"></li>
    			<li data-target="#demo" data-slide-to="2"></li>
			</ul>
			
			<div class="carousel-inner">
			
    			<div class="carousel-item active">
      				<img src="skeleton.jpg" alt="firstimage" width="10" height="10">
      				<div class="carousel-caption">
        				<h1>Your procrastinating days are over!</h1>
      				</div>   
    			</div>
    			
    			<div class="carousel-item">
      				<img src="alien.jpg" alt="secondimage" width="10" height="10">
      				<div class="carousel-caption">
        				<p>Work efficiently</p>
      				</div>   
    			</div>
    			
    			<div class="carousel-item">
      			<img src="unnamed.jpg" alt="New York" width="10" height="10">
      				<div class="carousel-caption">
        				<p>Organise your projects</p>
      				</div>   
    			</div>
    			
  			</div>
  			
  			<a class="carousel-control-prev" href="#demo" data-slide="prev">
    			<span class="carousel-control-prev-icon"></span>
  			</a>
  			<a class="carousel-control-next" href="#demo" data-slide="next">
    			<span class="carousel-control-next-icon"></span>
  			</a>
		</div>
	
		
		
		
		
		<!-- FOOTER 
		<footer onclick = 'closeNav()'> 
		
			<p> About </p>
			<p> Resources</p>
			<p> Contact Me </p>
			<p> Email Me </p>
		</footer>
		-->
		
		
		
	</body>
	
	<script>
			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the button that opens the modal
			var btn = document.getElementById("share");

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks the button, open the modal 
			btn.onclick = function() {
  				modal.style.display = "block";
  				document.body.style.overflow = "hidden"; // ADD THIS LINE
    			document.body.style.height = "100%"; // ADD THIS LINE
			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
 	 			modal.style.display = "none";
 	 			document.body.style.overflow = "auto"; // ADD THIS LINE
    			document.body.style.height = "auto"; // ADD THIS LINE
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
  				if (event.target == modal) {
   					modal.style.display = "none";
   					document.body.style.overflow = "auto"; // ADD THIS LINE
    				document.body.style.height = "auto";  // ADD THIS LINE
  				}
			}
		</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</html>