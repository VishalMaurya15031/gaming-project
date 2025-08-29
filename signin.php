<!DOCTYPE html>
<html>
<head>
	<title>SignIn</title>
	<?php 

	$db = 'Noob2Pro';
	$username = "root";
	$password = " ";

	// Create connection
	$conn = new mysqli('localhost', $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";

	?>
	<link rel="stylesheet" type="text/css" href="signin.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
	html,body{
	overflow-x:hidden;
	}
	</style>
</head>
<body style="background-color: #4E4E50">
	<div>
		<img src="Contact.png" class="headericon">
		<label class="culabel">Noob2Pro</label>
		
		<a href="Home.html" class="hsections" style="left: 41%;">Home</a>
		<a href="signin.html" class="hsections" style="left: 45%;">SignIn</a>
		<a href="SignUp.html" class="hsections" style="left: 48.9%;">SignUp</a>
	</div>
	



	<form onsubmit="validate()" class="bg-img" >
   <br>    
<h2 class="h" style="margin-left: 550px" >Sign In</h2><br>

  
    <label style="margin-left: 450px" class="sp" for="uname"><b>Username</b></label>
    <input style="margin-left: 400px" type="text" placeholder=" Enter Username" id="usern" name="uname" required>
    <br>

    <label style="margin-left: 450px" class="sp" for="psw"><b>Password</b></label>
    <input style="margin-left: 400px" type="password" placeholder=" Enter Password" id="password" name="psw" required>
    <br>
    <br>
    <br>
    
    <button style="margin-left: 580px" class="sp" type="submit">Login</button>
  
      
  
</form>
       
    
<script type="text/javascript">
function validate()
{
    if(   document.getElementById("usern").value == "a"
       && document.getElementById("password").value == "a" )
    {
        alert( "Wellcome " );
    }
    else
    {
        alert( "incorrect username or password" );
    }
}
</script>







<label class="ftrtext">&copy;</label> <label class="ftrtext" style="margin-left: 168px;">copyright@2018GameMania </label>
	


		<label class="ftrsections" style="left: 162px"> Home </label> <hr style="left: 224px;"> <label class="ftrsections" style="left: 245px;"> contact us </label>
	
          
          <label class="hicons"> <label  class="h" style="margin-right: 10px">FOLLOWUS</label> <a href="https://twitter.com
		"> <img src="twIcon.jpg"> </a>
		<a href= "https://facebook.com" ><img src="fbIcon.jpg"> </a> 
		<a href= "https://gmail.com" ><img src="gmailIcon.jpg"> </a> 
		<a href= "https://tumbler.com" ><img src="tumbler.jpg"> </a>
	</div>
            
	

</body>
</html>