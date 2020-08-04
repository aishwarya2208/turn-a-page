<html>
<head>
      <link href = "formstyle.css" rel = "stylesheet">
</head>
<body class="pat"> 
<a href="/turnapage/homepage/index.php" class="anchor"> Logout </a>
<h1 style="text-align:center; background-color: lightsalmon; color:white"> Admin Page</h1>
<h2 style="text-align:center; background-color:royalblue; color:white">Add a book</h2>
<div class="form-style-5">
<form action="db.php" method="POST" id="bform" name="book">
<fieldset>
<legend><span class="number">1</span> Book Details</legend>
<input type="text" name="b_name" placeholder=" Enter Book Name *" maxlength="50"/>
<input type="text" name="b_id" placeholder="Enter Book ID *" maxlength="5"/>
<input type="text" name="blurb" placeholder="Enter blurb for the book" maxlength="500"/>


<!-- Genre: <select name="genre" ><br/>
<option value="selfhelp">Selfhelp</option>
<option value="mystery"> Mystery</option>
<option value="horror">Horror</option> 
<option value="humour">Humour</option>
<option value="fantasy">Fantasy</option>
<option value="classic">Classic</option>
<option value="romance">Romance</option>
</select><br/><br/> -->

<label for="job">Genre: </label>
<select id="job" name="genre">
<option value="selfhelp">Selfhelp</option>
<option value="mystery"> Mystery</option>
<option value="horror">Horror</option> 
<option value="humour">Humour</option>
<option value="fantasy">Fantasy</option>
<option value="classic">Classic</option>
<option value="romance">Romance</option>
</select>

</fieldset>

<fieldset>
<legend><span class="number">2</span> Author Info</legend>
<input type="text" name="a_name" placeholder="Enter Author Name*" maxlength="30"/>
</fieldset>


<fieldset>
<legend><span class="number">3</span> Source</legend>
<input type="text" name="source" placeholder="Enter source for pdf file*" maxlength="200"/>
</fieldset>
<input type="submit" />
</form>
</div>
</body>
</html>
<!-- 
Author Name: <input type="text" name="a_name" maxlength="30" /> <br/>
Source: <input type="link" name="source" maxlength="200"/><br/><br/>
Blurb: <input type="text" name="blurb" maxlength="500"/><br/><br/> -->

<!-- NEW FORM STYLE -->
<!-- <div class="form-style-5">
<form>
<fieldset>
<legend><span class="number">1</span> Candidate Info</legend>
<input type="text" name="field1" placeholder="Your Name *">
<input type="email" name="field2" placeholder="Your Email *">
<textarea name="field3" placeholder="About yourself"></textarea>
<label for="job">Interests:</label>
<select id="job" name="field4">
<optgroup label="Indoors">
  <option value="fishkeeping">Fishkeeping</option>
  <option value="reading">Reading</option>
  <option value="boxing">Boxing</option>
  <option value="debate">Debate</option>
  <option value="gaming">Gaming</option>
  <option value="snooker">Snooker</option>
  <option value="other_indoor">Other</option>
</optgroup>
<optgroup label="Outdoors">
  <option value="football">Football</option>
  <option value="swimming">Swimming</option>
  <option value="fishing">Fishing</option>
  <option value="climbing">Climbing</option>
  <option value="cycling">Cycling</option>
  <option value="other_outdoor">Other</option>
</optgroup>
</select>      
</fieldset>
<fieldset>
<legend><span class="number">2</span> Additional Info</legend>
<textarea name="field3" placeholder="About Your School"></textarea>
</fieldset>
<input type="submit" value="Apply" />
</form>
</div> -->
