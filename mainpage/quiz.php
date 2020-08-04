<?php
$link= new mysqli("localhost","root","","project");
if ($link->connect_error)
{
    die("Connection Failure".$link->connect_error);
}?>
<html>
    <head>
    <link rel="stylesheet" href="quiz.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <style>
        .top {
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: red; /* Set a background color */
  color: white; /* Text color */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

.top:hover {
  background-color: yellow; /* Add a dark-grey background on hover */
}
    </style>
    <a href="top"></a>
<?php

if (isset($_POST['mood']))
{  
    if($_POST['mood']=='gloomy')
    {
        if (isset($_POST['object']))
        {
            if($_POST['object']=='classic')
            {
                if(($_POST['amazon']=='yes'))
                {
                    $sql1="SELECT * FROM books WHERE (author LIKE '%william%' AND source LIKE '%amazon%') OR (author LIKE'%Khaled%' AND source LIKE '%amazon%')";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    }
                }
                else
                {
                    $sql1="SELECT * FROM books WHERE author LIKE '%william%' OR author LIKE'%Khaled%'";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    } 
                }    
            }
            else if ($_POST['object']=='strange')
            {
        
    
                if(($_POST['amazon']=='yes'))
                {
                    $sql1="SELECT * FROM books WHERE (author LIKE '%dan%' AND source LIKE '%amazon%') OR (genre LIKE'%horror%' AND source LIKE '%amazon%')";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    }
                }
                else
                {
                    $sql1="SELECT * FROM books WHERE author LIKE '%dan%' OR genre LIKE'%horror%'";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    } 
                }
            }    
            else
            {

        
                if(($_POST['amazon']=='yes'))
                {
                    $sql1="SELECT * FROM books WHERE genre LIKE '%horror%' AND source LIKE '%amazon%'";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    }
                }
                else
                {
                    $sql1="SELECT * FROM books WHERE genre LIKE '%horror%'";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    } 
                }
            }
        }
    }        
    else if($_POST['mood']=='happy')
    {
        if (isset($_POST['object']))
        {
            if($_POST['object']=='stack')
            {
                

                if(($_POST['amazon']=='yes'))
                {
                    $sql1="SELECT * FROM books WHERE genre LIKE '%selfhelp%' AND source LIKE '%amazon%'";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    }
                }
                else
                {
                    $sql1="SELECT * FROM books WHERE genre LIKE '%selfhelp%'";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    } 
                }
            }
            
            else if ($_POST['object']=='flowers')
            {
                if(($_POST['amazon']=='yes'))
                {
                    $sql1="SELECT * FROM books WHERE (author LIKE '%cecilia%' AND source LIKE '%amazon%') OR (author LIKE '%anuja%' AND source LIKE '%amazon%')";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    }
                }
                else
                {
                    $sql1="SELECT * FROM books WHERE author LIKE '%cecilia%' OR author LIKE '%anuja%'";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    } 
                }
            }
            else 
            {
                if(($_POST['amazon']=='yes'))
                {
                    $sql1="SELECT * FROM books WHERE (genre LIKE '%fantasy%' AND source LIKE '%amazon%') OR (genre LIKE '%romance%' AND source LIKE '%amazon%')";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    }
                }
                else
                {
                    $sql1="SELECT * FROM books WHERE genre LIKE '%fantasy%' or genre LIKE '%romance%'";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    } 
                }
            }
        }
    }        

    else if($_POST['mood']=='spooky')
    {
        if (isset($_POST['object']))
        {
            if($_POST['object']=='strange')
            {
        
                if(($_POST['amazon']=='yes'))
                {
                    $sql1="SELECT * FROM books WHERE author LIKE '%dan%' AND source LIKE '%amazon%'";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    }
                }
                else
                {
                    $sql1="SELECT * FROM books WHERE author LIKE '%dan%'";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    } 
                }
            }

            else if($_POST['object']=='fic')
            {
                if(($_POST['amazon']=='yes'))
                {
                    $sql1="SELECT * FROM books WHERE (author LIKE '%rowling%' AND source LIKE '%amazon%') OR (author LIKE '%riordan%' AND source LIKE '%amazon%')";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    }
                }
                else
                {
                    $sql1="SELECT * FROM books WHERE author LIKE '%rowling%' OR author LIKE '%riordan%'";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    } 
                }
            }    
            else
            {
                 if(($_POST['amazon']=='yes'))
                {
                    $sql1="SELECT * FROM books WHERE (genre LIKE '%horror%' AND source LIKE '%amazon%') OR (genre LIKE '%romance%' AND source LIKE '%amazon%')";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    }
                }
                else
                {
                    $sql1="SELECT * FROM books WHERE genre LIKE '%horror%' OR genre LIKE '%romance%'";
                    $result= mysqli_query($link,$sql1);
                    if(mysqli_num_rows($result)!=0)
                    {
                        $recom=mysqli_fetch_assoc($result);
                    } 
                }
            }
        }
    }    
    else if($_POST['mood']=='bored')
    {
        if (isset($_POST['object']))
            {
                if($_POST['object']=='stack')
                {
                    if(($_POST['amazon']=='yes'))
                    {
                        $sql1="SELECT * FROM books WHERE genre LIKE '%selfhelp%' AND source LIKE '%amazon%'";
                        $result= mysqli_query($link,$sql1);
                        if(mysqli_num_rows($result)!=0)
                        {
                            $recom=mysqli_fetch_assoc($result);
                        }
                    }
                    else
                    {
                        $sql1="SELECT * FROM books WHERE genre LIKE '%selfhelp%'";
                        $result= mysqli_query($link,$sql1);
                        if(mysqli_num_rows($result)!=0)
                        {
                            $recom=mysqli_fetch_assoc($result);
                        } 
                    }
                }
                else  if($_POST['object']=='flowers')
                {
                    if(($_POST['amazon']=='yes'))
                    {
                        $sql1="SELECT * FROM books WHERE genre LIKE '%romance%' AND source LIKE '%amazon%'";
                        $result= mysqli_query($link,$sql1);
                        if(mysqli_num_rows($result)!=0)
                        {
                            $recom=mysqli_fetch_assoc($result);
                        }
                    }
                    else
                    {
                        $sql1="SELECT * FROM books WHERE genre LIKE '%romance%'";
                        $result= mysqli_query($link,$sql1);
                        if(mysqli_num_rows($result)!=0)
                        {
                            $recom=mysqli_fetch_assoc($result);
                        } 
                    }
                }
                else  if($_POST['object']=='strange')
                {
            
                
                    if(($_POST['amazon']=='yes'))
                    {
                        $sql1="SELECT * FROM books WHERE genre LIKE '%mystery%' AND source LIKE '%amazon%'";
                        $result= mysqli_query($link,$sql1);
                        if(mysqli_num_rows($result)!=0)
                        {
                            $recom=mysqli_fetch_assoc($result);
                        }
                    }
                    else
                    {
                        $sql1="SELECT * FROM books WHERE genre LIKE '%mystery%'";
                        $result= mysqli_query($link,$sql1);
                        if(mysqli_num_rows($result)!=0)
                        {
                            $recom=mysqli_fetch_assoc($result);
                        } 
                    }
                }
                else if ($_POST['object']=='fic')
                {
                    if(($_POST['amazon']=='yes'))
                    {
                        $sql1="SELECT * FROM books WHERE genre LIKE '%fantasy%' AND source LIKE '%amazon%'";
                        $result= mysqli_query($link,$sql1);
                        if(mysqli_num_rows($result)!=0)
                        {
                            $recom=mysqli_fetch_assoc($result);
                        }
                    }
                    else
                    {
                        $sql1="SELECT * FROM books WHERE genre LIKE '%fantasy%'";
                        $result= mysqli_query($link,$sql1);
                        if(mysqli_num_rows($result)!=0)
                        {
                            $recom=mysqli_fetch_assoc($result);
                        } 
                    }
                }
                else 
                {
                    if(($_POST['amazon']=='yes'))
                    {
                        $sql1="SELECT * FROM books WHERE genre LIKE '%classic%' AND source LIKE '%amazon%'";
                        $result= mysqli_query($link,$sql1);
                        if(mysqli_num_rows($result)!=0)
                        {
                            $recom=mysqli_fetch_assoc($result);
                        }
                    }
                    else
                    {
                        $sql1="SELECT * FROM books WHERE genre LIKE '%classic%'";
                        $result= mysqli_query($link,$sql1);
                        if(mysqli_num_rows($result)!=0)
                        {
                            $recom=mysqli_fetch_assoc($result);
                        } 
                    }
                }
            }
    }
    else
    {
        echo "Please select a mood!";
    }
}

if(mysqli_num_rows($result)!=0)
{
 
    ?>
        <h1 class="headi"> Recommendations:</h1>
        <?php
    do{?>
    

    <div class="disp">
        <ol>
        <li><h3 class="">Book Name: &nbsp;<?php echo $recom['name'];?> </h3> </li>
        <br/> <li><h4>Author Name: <?php echo $recom['author'];?> </li>
        <br/> <li><h4> Genre: <?php echo $recom['genre']; ?></li>
        <br/> <li><h4>Source: <a href="<?php echo $recom['source'] ?>"> Go to link </a></li>
        <br/> <li><h5>Blurb: <?php echo $recom['blurb']; ?> </li></ol>
        <hr/> <hr/> <hr/><br/>
        <a href="#top" class="top">Top</a>
        <?php   
     }while($recom=mysqli_fetch_assoc($result));    
}
else
echo "Please view our library,  your choice is unique!";
?>
<a href="/turnapage/mainpage/main.php"><p style="text-align:center;"> <i class="fa fa-home fa-4x" ></i></p> </a>
</div>  
</body>
</html>      