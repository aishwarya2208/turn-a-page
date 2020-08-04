<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="\turnapage\style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
            body,h1 {font-family: "Raleway", sans-serif}
            body, html {height: 100%}
            .bgimg {
            background-image:url(/turnapage/homepage/bg.jpg);
            min-height: 100%;
            background-position: center;
        background-size: cover;}
</style>
</head>
<body>
<body class="bg">
<ul>
  <li><a class="active" href="/turnapage/mainpage/main.php"><i class="fa fa-home" style="color:white"></i>&nbsp;Home</a></li>
  <li><a class="active" href="/turnapage/mainpage/logout.php"><i class="fa fa-minus-circle" style="color:white"></i> &nbsp; Logout</a></li>
  <li><a href="/turnapage/mainpage/history.php"><i class="fa fa-history" style="color:white"></i>&nbsp;View history</a></li>
  <li><a href="/turnapage/homepage/contact.php"><i class="fa fa-wechat" style="color:white"></i>&nbsp;Contact</a></li>
  <li><a href="/turnapage/mainpage/quiz.html"><i class="fa fa-umbrella" style="color:white"></i> &nbsp; Take our quiz</a></li>
  <!-- <li><a href="#about">About</a></li> -->
</ul>
<div class="bgimg w3-display-container w3-animate-opacity">
  <div class="w3-display-middle">
    <h4 class="w3-jumbo w3-animate-top" style="color:black">
    <form name="search" action="http://localhost/turnapage/mainpage/search.php" method="POST">
<i class="fa fa-search" style="color:white"><input type="text" name="searchstr" placeholder="Search a book "/></i>
</form>
</h4>
</body>
</html>