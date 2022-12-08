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
	$name= $_POST['name']; 
    $title = $_POST['title'];
	$subject = $_POST['subject'];


	// Database connection
	$conn = new mysqli('localhost','root','','form');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact (  name ,email , title,subject ) values( ?,? , ?, ?)");
		$stmt->bind_param("ssss",   $name ,$email , $title,$subject);
		$execval = $stmt->execute();
		//echo $execval;
		echo "Hi $name <br><br>   Your massage sent to me successfully. <br> Thank you for contacting me.<br><br>   this is your massage :<br> $subject";
		$stmt->close();
		$conn->close();
	}
	?>
 	</div>


 
</body>
</html>