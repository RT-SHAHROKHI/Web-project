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

        <div class="login-box">
            <form action="process.php" method="post" >


            </form>
            <h1> SIGN IN </h1>
  
            <form action="process.php" method="POST" >

            <p>
                <div class="text-box">
                <input type="text" class="form-control" id="username" name="username" placeholder="username" />
                </div>
            </p>

            <p> 
                <div class="text-box">
                <input type="text" class="form-control" id="password" name="password" placeholder="Password" />
                </div>   
            </p>

            <p> 
                <input class="btn" type="submit" id="btn" name="login" />
            </p>
 

  
                <div >
                <p> 
                    <p><br><br>________________________________<br><br>
                    </p>
                    <h3>Do you want to create an account ? </h3>
                    <div> 
                        <button type="button"  onclick="window.location.href='Sign Up.html';"><span></span> SIGN UP </button>
                    </div>

                </p> 

                </div>



        </div>

                

 

    </body>
</html>