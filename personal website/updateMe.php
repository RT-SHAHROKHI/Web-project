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
    $newusername = $_POST ['newusername']; 
    //$newpassword = $_POST ['newpassword']; 


    $username = stripcslashes($username);
    $newusername = stripcslashes($newusername);
    //$newpassword= stripcslashes($newpassword);  
    
   // $sql = "SELECT * from users where username ='$username' and password = '$password'";
   $conn = mysqli_connect("localhost", "root", "","rt");
   // Check connection
   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }
   
   // sql to delete a record
   //$sql = "DELETE FROM users WHERE id=25";
   //$sql = "DELETE FROM users WHERE username ='$username' and password = '$password'";
   $sql = "UPDATE users SET username='$newusername' WHERE username='$username'";
   //$sql = "UPDATE users SET password='$newpassword' WHERE password='$password'";
   
   if (mysqli_query($conn, $sql)) {
     echo "Your username updated successfully to $newusername ";
   } else {
     echo "Error deleting record: " . mysqli_error($conn);
   }
   
   mysqli_close($conn);
?>



    </div>

</body>
</html>

