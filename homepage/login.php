<?php

    session_start();

    $error = "";  

    if (array_key_exists("logout", $_GET)) {
        
        unset($_SESSION);
      
        
        session_destroy();
        header("Location: /turnapage/homepage/index.php");
        
    } else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id'])) {
        
        header("Location: /turnapage/homepage/index.php");
        
    }

    if (array_key_exists("submit", $_POST)) {
        
        $link = mysqli_connect("localhost", "root", "", "project");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }
        
        if (!$_POST['uname']) {
            
            $error .= "An email address is required<br>";
            
        } 
        
        if (!$_POST['password']) {
            
            $error .= "A password is required<br>";
            
        } 
        
        if ($error != "") {
            
            $error = "<p>There were error(s) in your form:</p>".$error;
            
        } else {
            
           $query = "SELECT * FROM user WHERE emp_id = '".mysqli_real_escape_string($link, $_POST['uname'])."'";
                
                    $result = mysqli_query($link, $query);
                
                    $row = mysqli_fetch_array($result);
                
                    if (isset($row)) 
                    {
                            
                        if ( $_POST['password']=="admin")
                        {
                            
                            $_SESSION['id']=$row['id'];

                            header("Location: /turnapage/books/form.php");
                                 
                        }
                        else if( $_POST['password'] == $row['password'])
                        {
                            $_SESSION['id'] = $row['id'];
                            
                            

                            header("Location: /turnapage/mainpage/main.php");
                           
                        } 
                        else 
                        {
                            
                            $error = "That email/password combination could not be found.";
                            
                        }
                        
                    } 
                    else 
                    {
                        
                        $error = "That email/password combination could not be found.";
                        
                    }
            
        }

        $_SESSION['uname'] =  $_POST['uname'];
                
    }

?>
<html>
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Turn A Page</title>
    <!-- Bootstrap core CSS -->
    <link href="http://dbms-com.stackstaging.com/almost/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="h.css" rel="stylesheet">
    <link href="/turnapage/style.css" rel="stylesheet">
    </head>
<body style="background-color:lightsalmon;">
<ul>
  <li><a class="active" href="/turnapage/homepage/index.php"><i class="fa fa-home" style="color:white"></i> &nbsp; Home</a></li>
  <li><a href="/turnapage/homepage/signup.php"><i class="fa fa-user" style="color:white"></i> &nbsp; Sign Up</a></li>
  <li style="text-align:right"><a href="/turnapage/homepage/contact.php"><i class="fa fa-wechat" style="color:white"></i> &nbsp; Contact</a></li>
  <!-- <li><a href="#about">About</a></li> -->
</ul>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Log In </h2>
    

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="post">
      <input type="text" id="login" class="fadeIn second" name="uname" placeholder="Enter username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Enter Password">
      <input type="submit" class="fadeIn fourth" value="Log In" name="submit">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <div id="error"><?php if ($error!="") {
    echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
    
} ?>
    </div>

  </div>
</div>
    </div> 
    <!-- <footer class="py-5 bg-dark">
      <div class="container">
      <p class="m-0 text-center text-white"> Contact Us: </p>
      
        <p class="m-0 text-center text-white"> egov-mowr&#64;nic.in | 627, Shram Shakti bhawan, Rafi Marg, New Delhi - 110001
</p>
      </div>
      
    </footer> -->
   <!-- Bootstrap core JavaScript -->
    <script src="http://dbms-com.stackstaging.com/almost/vendor/jquery/jquery.min.js"></script>
    <script src="http://dbms-com.stackstaging.com/almost/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>