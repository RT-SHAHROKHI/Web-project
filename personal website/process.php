<html>
    <head>
        <title>About</title>
        
        <link rel = "stylesheet" href="style.css">

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
        </div>



        <div class="content">

        <?php
    //get values from form in signin.php    
    $username = $_POST ['username']; 
    $password = $_POST ['password']; 

    $username = stripcslashes($username);
    $password= stripcslashes($password);  
    // Database connection
	$conn = new mysqli('localhost','root','','rt');
	if($conn->connect_error)
    {
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
        else
        {

    $sql = "SELECT * from users where username ='$username' and password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
    // output data of each row
        while($row = $result->fetch_assoc())
        {
        echo" wellcome ". $row['username'] ; 
        echo"<br><br> username : $username <br> password : $password <br>  "; 
        }
    } 
        else   
        {
        echo "faild to login ";
        }

            $conn->close();
    }

?>
                    <div> 
                        <button type="button"  onclick="window.location.href='delete.html';"><span></span> delete account </button>
                    </div>

                    <div> 
                        <button type="button"  onclick="window.location.href='update.html';"><span></span> update account </button>
                    </div>

    </div>

</body>
</html>