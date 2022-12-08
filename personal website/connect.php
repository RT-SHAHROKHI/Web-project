<!DOCTYPE html>
<html>
<head>
  
  <link rel = "stylesheet" href="style.css"> 
</style>
</head>
<body>


  <div class="banner">
    <div class="navbar">
        <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="signin.php">Sign in </a></li>
            <li><a href="portfolio.html">portfolio</a></li> 
            <li><a href="contact.html">Contact</a></li> 
        </ul>
    </div>

	<div class="content">

	
		<?php
	
	$email = $_POST['email'];
	$username= $_POST['username']; 
	$password = $_POST['password']; 

	// Database connection
	$conn = new mysqli('localhost','root','','rt');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users (email , username , password ) values( ? , ?, ?)");
		$stmt->bind_param("sss",  $email , $username , $password);
		$execval = $stmt->execute();
		 
		echo "Your registration done successfully  <br> thank you for being a member of my site  Dear $username <br> You can sign in now <br>";
 

		$stmt->close();
		$conn->close();
	}
?>
     <button type="button"  onclick="window.location.href='Signin.php';"><span></span> SIGN IN </button>


</div>


 

</body>
</html>