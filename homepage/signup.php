<?php
    $link = mysqli_connect("localhost", "root", "", "project");
        
    if (mysqli_connect_error())
    {
            
        echo" Failed to connect to MySQL:".mysqli_connect_error();
            
    }
?>
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="h.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="\turnapage\style.css">
<link rel="stylesheet" href="signup.css">
    </head>
    <body style="background-color:lightsalmon;">
    <ul>
  <li><a class="active" href="/turnapage/homepage/index.php"><i class="fa fa-home" style="color:white"></i> &nbsp; Home</a>
  <li><a href="/turnapage/homepage/login.php"><i class="fa fa-user" style="color:white"></i> &nbsp; Login</a></li>
  <li><a href="/turnapage/homepage/contact.php"><i class="fa fa-wechat" style="color:white"></i> &nbsp;Contact</a></li>
  <!-- <li><a href="#about">About</a></li> -->
</ul>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <h3>Welcome</h3>
                        <a href="/turnapage/homepage/login.php">
                            <input type="submit" name="" value="Login"/></a><br/>
                    </div>
                    <div class="col-md-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form method="POST">
                                    <h3 class="register-heading">Register</h3>
                                                              
                                    <div class="row register-form">
                                     
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" value="Faculty" name="type">
                                            <input type="text" class="form-control" placeholder="Full Name *" value="" name="fullname" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Mobile Number" value="" name="mobile" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="password" required />
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email adrress *" value="" name="email" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text"  maxlength="10" class="form-control" placeholder="Username" name="eid" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="confirmpass" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister"  value="Register" name="next"/>
                                    </div>
                                            
                                </div>
                                   
                                </form>
                            </div>
<center>
<?php
                            
                            
if (array_key_exists("next", $_POST)) 
    {
    
       if($_POST['confirmpass']==$_POST['password'])
       {
        
   $query=" INSERT INTO `user`( `email`, `password`, `mobile`,`name`,`emp_id`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."','".mysqli_real_escape_string($link, $_POST['password'])."','".mysqli_real_escape_string($link, $_POST['mobile'])."','".mysqli_real_escape_string($link, $_POST['fullname'])."','".mysqli_real_escape_string($link,$_POST['eid'])."') ";

   if( mysqli_query($link, $query))
    {
       
       echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert2" >
  <strong>Successfully registered!</strong> 
  <button type="button" id="alert1" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                                          </div>';
      
    }
           else
    {
     
        echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert2" >
  <strong>Failed!</strong> 
  <button type="button" id="alert1" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                                          </div>';
        
    }
   
       }
    else
    {
   
        echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert2" >
  <strong>Password  mismatch!</strong> 
  <button type="button" id="alert1" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                                          </div>';
        
    }
                               }
// if (isset($_POST['description'])) 
// {
//     $usrnam=$_POST['eid'];
// }
// $sql = "CREATE TABLE ".$usrnam." ( bname VARCHAR(30), taname VARCHAR(30), tbgenre VARCHAR(10),tbookid INT(5)";

// mysqli_query($link,$sql);
// if ($link->query($sql) === TRUE) {
// echo "Table MyGuests created successfully";
// } else {
// echo "Error creating table: " . $link->error;
// }
?></center>
                        </div>
                    </div>
                </div>
        </div>
        
    <!-- Bootstrap core JavaScript -->
    <script src="http://dbms-com.stackstaging.com/almost/vendor/jquery/jquery.min.js"></script>
    <script src="http://dbms-com.stackstaging.com/almost/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
<script>
        $("#home-tab").click(function(){
            
         $("#home").fadeIn(); 
             $("#profile").css('display','none'); 
            $("#home-tab").addClass("active");
             $("#profile-tab").removeClass("active");
            
        });
         $("#profile-tab").click(function(){
            
         $("#home").css('display','none');
             $("#profile").fadeIn(); 
             $("#profile-tab").addClass("active");
            $("#home-tab").removeClass("active");
        });
        $("#ok").click(function(){
                        $('#ok').prop("disabled", false);
            
            
        });
       $("#alert1").click(function(){
                       
               $("#alert2").fadeOut();
            
        });
        
        </script>
