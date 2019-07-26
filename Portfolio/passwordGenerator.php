<html>


	<head>
		<title>PassGen</title>
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
			body{background-color: #FF7F50;}
			header{background-color: #e9ecef}
			.main{font-family: 'Oswald', sans-serif;
                  padding: 70px;
                  text-align: center;
                  font-size: 20px;}
            button {background-color: #4CAF50;
            	width: 30%;
            	font-size: 30px;
            	
            	border: 1px solid green;

            }
            .submain{font-size: 15px;
            		 
            		 font-family: Arial
            }
			#nav{padding: 50px;}
			aside{  float: right;
  				width: 20%;
  				height: 700px; /* only for demonstration, should be removed */
  				background: #ccc;
  				padding: 20px;}
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
        		<a href="#"> Password Generator </a>
        		<a href="#"> Chatbot </a>
        		<a href="#"> Cooking </a>
        		<a href="weatherApp.php"> Weather App </a>
        		<a href="#"> More </a>
      		</div>

      		<div onmouseover="closeNav()">
		    	<div  class="jumbotron text-center" style="margin-bottom:0">
  			   		<h1>PASSWORD GENERATOR</h1>
  			   		<p> Not everyone can be creative and secure </p> 
		    	</div>
     		 </div>
		</header>
		<aside style ="font-family: Arial; font-size: 20px; ">
			
				<p > Previously Generated Passwords </p>
			
		</aside>

		<div class = "main">
			
			<div id = "password">
			</div>
			<button type="button" class="btn btn-info" id = "generate"> GENERATE</button> <br/> <br/> <br/> <br/>

			<div class = "submain">
			Password Length: <input type = "number" id = "quantity" min = "1" max = "30"> <br>
			<input type = "radio" id = "onlyLetters" name = "options"> Only Letters <input type = "radio" id = "words" name = "options"> Pronuncable Words <br>
			<input type = "radio" id = "onlyNumbers" name = "options"> Only Numbers <input type = "radio" id = "NoandLetters" name = "options"> Numbers and Letters <br>
			<input type = "checkbox" id = "specialCase" > Include Special Case <br>
			<input type = "checkbox" id = "upperCase" name = "case"> Only UpperCase <br>
			<input type = "checkbox" id = "lowerCase" name = "case"> Only LowerCase <br>
			 </div>
			
			 
			
		</div>
		<script>
			// function generatePassword() {
   //  			var length = 8,
   //      		charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
   //      		retVal = "";
   //  			for (var i = 0, n = charset.length; i < length; ++i) {
   //      			retVal += charset.charAt(Math.floor(Math.random() * n));
   //  			}
   //  			console.log("SUCCESS");
   //  			return retVal;
    			
			// 	}
			function generatePassword(length){
				var vowels = ['a','e','i','o','u'];
    			var consonants = ['b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z'];
    			var data3 = ['bl','br','cl','cr','dr','dw','fl','fr','gl','gr','gw','kn','kr','kw','mr','ph','pl','pn','pr','ps','sc','sh','sk','sl','sm','sn','sp','st','sv','sw','tr','ts','wh'];

				var specials = '!@#$%^&*()_+{}:"<>?\|[];\',./`~';
				var lowercase = 'abcdefghijklmnopqrstuvwxyz';
				var uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
				var numbers = '0123456789';

				var allLetters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

				var lowercaseAndNumbers = lowercase+numbers;
				var uppercaseAndNumbers = uppercase+numbers;
				var lettersAndNumbers = allLetters+numbers;

				var lowercaseAndSpecials = lowercase+specials;
				var uppercaseAndSpecials = uppercase+specials;
				var lettersAndSpecials = allLetters+specials;
				var numbersAndSpecials = numbers + specials; 
		
				
				var uppercaseLettersAndNumbersAndSpecials = lettersAndNumbers+specials;
				var lowercaseLettersAndNumbersAndSpecials = lettersAndNumbers+specials;
				var all = specials + lowercase + uppercase + numbers;

				var password = "";



				
				//ONLY LETTERS
				if(document.getElementById('onlyLetters').checked){

					var n = length;
					for (var i = 0; i < n; ++i) {
        				password += allLetters.charAt(Math.floor(Math.random() * n));
    				}
    				
    				return password;
    				//return password;
    				console.log(password);

				}

				//UPPERCASE LETTERS ONLY
				else if(document.getElementById('onlyLetters').checked && document.getElementById("upperCase").checked){
					var n = length; 
					for (var i = 0; i < n; ++i) {
        				password += uppercase.charAt(Math.floor(Math.random() * n));
    				}
    				//return password;
    				return password;
    				//return password;
    				console.log(password);
				}

				//LOWERCASE LETTERS ONLY
				else if(document.getElementById('onlyLetters').checked && document.getElementById("lowerCase").checked){
					var n = length; 

					for (var i = 0; i < n; ++i) {
        				password += lowercase.charAt(Math.floor(Math.random() * n));
    				}
    				// return password;
    				return password;
    				//return password;
    				console.log(password);
				}

				//ONLY NUMBERS
				else if(document.getElementById('onlyNumbers').checked){
					var n = length; 
					for (var i = 0; i < n; ++i) {
        				password += numbers.charAt(Math.floor(Math.random() * n));
    				}
    				// return password;
    				return password;
    				//return password;
    				console.log(password);
				}

				//NUMBERS AND SPECIAL CASE
				else if(document.getElementById('onlyNumbers').checked && document.getElementById("specialCase").checked){
					var n = length; 
					for (var i = 0; i < n; ++i) {
        				password += numbersAndSpecials.charAt(Math.floor(Math.random() * n));
    				}
    				return password;
    				//return password;
    				console.log(password);
				}
				
				//LETTERS AND NUMBERS
				else if(document.getElementById("NoandLetters").checked){
					var n = length; 
					for (var i = 0; i < n; ++i) {
        				password += lettersAndNumbers.charAt(Math.floor(Math.random() * n));
    				}
    				return password;
    				//return password;
    				console.log(password);
				}

				//UPPERCASE LETTERS AND NUMBERS
				else if(document.getElementById("NoandLetters").checked&&document.getElementById("upperCase").checked){
					var n = length; 
					for (var i = 0; i < n; ++i) {
        				password += uppercaseAndNumbers.charAt(Math.floor(Math.random() * n));
    				}
    				return password;
    				//return password;
    				console.log(password);
				}

				//LOWERCASE LETTERS AND NUMBERS
				else if(document.getElementById("NoandLetters").checked&&document.getElementById("lowerCase").checked){
					var n = length; 
					for (var i = 0; i < n; ++i) {
        				password += lowercaseAndNumbers.charAt(Math.floor(Math.random() * n));
    				}
    				return password;
    				//return password;
    				console.log(password);
				}

				//LETTERS AND SPECIAL CASE
				else if(document.getElementById("onlyLetters").checked&&document.getElementById("specialCase").checked){
					var n = length; 
					for (var i = 0; i < n; ++i) {
        				password += lettersAndSpecials.charAt(Math.floor(Math.random() * n));
    				}
    				return password;
    				//return password;
    				console.log(password);
				}

				//UPPERCASE LETTERS AND SPECIAL CASE 
				else if(document.getElementById("onlyLetters").checked&&document.getElementById("upperCase").checked&&document.getElementById("specialCase").checked){
					var n = length; 
					for (var i = 0; i < n; ++i) {
        				password += uppercaseAndSpecials.charAt(Math.floor(Math.random() * n));
    				}
    				return password;
    				//return password;
    				console.log(password);
				}

				//LOWERCASE LETTERS AND SPECIAL CASE
				else if(document.getElementById("onlyLetters").checked&&document.getElementById("lowerCase").checked&&document.getElementById("specialCase").checked){
					var n = length; 
					for (var i = 0; i < n; ++i) {
        				password += lowercaseAndSpecials.charAt(Math.floor(Math.random() * n));
    				}
    				return password;
    				//return password;
    				console.log(password);
				}

				//UPPERCASE, NUMBERS AND SPECIALS
				else if(document.getElementById("NoandLetters").checked&&document.getElementById("specialCase").checked&&document.getElementById("upperCase").checked){
					var n = length; 
					for (var i = 0; i < n; ++i) {
        				password += uppercaseLettersAndNumbersAndSpecials.charAt(Math.floor(Math.random() * n));
    				}
    				return password;
    				//return password;
    				console.log(password);
				}

				//LOWERCASE, LETTERS AND NUMBERS
				else if(document.getElementById("NoandLetters").checked&&document.getElementById("specialCase").checked&&document.getElementById("lowerCase").checked){
					var n = length; 
					for (var i = 0; i < n; ++i) {
        				password += lowercaseLettersAndNumbersAndSpecials.charAt(Math.floor(Math.random() * n));
    				}
    				return password;
    				//return password;
    				console.log(password);
				}

				//ALL
				else if(document.getElementById("NoandLetters").checked&&document.getElementById("specialCase").checked){
					var n = length; 
					for (var i = 0; i < n; ++i) {
        				password += all.charAt(Math.floor(Math.random() * n));
    				}
    				return password;
    				//return password;
    				console.log(password);
				}
			}

			// function generatePass(length) {
    			
   //      		charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
   //      		retVal = "";
   //  			for (var i = 0, n = charset.length; i < length; ++i) {
   //      			retVal += charset.charAt(Math.floor(Math.random() * n));
   //  			}

   //  			return retVal;
   //  			console.log(retVal);
			// }
		</script>
		<script type="text/javascript">
			
			$(document).ready(function(){
				$("#generate").click(function(){
					console.log(document.getElementById("quantity").value);
  					document.getElementById("password").innerHTML = generatePassword(parseInt(document.getElementById("quantity").value));
  					// document.getElementById("password").innerHTML = generatePass(parseInt(document.getElementById("quantity").value));
				})

			});
		</script>
	</body>
</html>