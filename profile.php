<div class="div1">
<html>
<title>blood</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="div.css">

<script language="javascript" type="text/javascript">

function validate()
{

     if (document.getElementById("text").value=="")
     {
           alert("please select a city");
           return false;
           
       }
      if(document.getElementById("text2").value=="") 
      {
      
             alert("please select a blood group");
              return false;  
                                  
  }    
               return true;          
}

</script>
  
</head>

<header>

<h1>BLOOD DONATION WAIKATO</h1>

</header></br>
<div class="btn-group btn-group-justified">
<nav> 

<div class="btn-group btn-group-justified hover">
  <a href="index.php" class="btn ">HOME</a>
  <a href="register.php" class="btn ">REGISTER</a>
  <a href="refer.php" class="btn ">REFER A FRIEND</a>
  <a href="profile.php" class="btn ">EDIT YOUR PROFILE</a>
  <a href="contact.php" class="btn ">CONTACT US</a>

</nav>
</div>
</br>
<div class="div7">
  <ul>
  <form action="register1.php" method="post" class="form-horizontal" onsubmit="javascript:return validate ();">
  <h1 style="text-align:center;"> <strong>Register For Free!</strong></h1>
  
   &nbsp&nbsp  <label >*First Name:</label>
    <input type="text" name="text1" value="">
  </br>
   </br>
   &nbsp&nbsp&nbsp<label >*Last Name:</label>
    <input type="text" name="text2">
  </br>
   </br>
  &nbsp&nbsp&nbsp  <label >*Phone No:</label>
    <input type="text" name="text3"></li>
  </br>
   </br>
   <label for="select2">blood group:</label>
    <select name="Select2" class="select" id="select2" >
              <option value="Choose a group">Choose a group</option>
              <option value="a">a</option>
              <option value="a+ve">a+ve</option>
              <option value="a-ve">a-ve</option>
              <option value="b">b</option>
              <option value="b+ve">b+ve</option>
              <option value="b-ve">b-ve</option>
              <option value="ab">ab</option>
              <option value="ab+ve">ab+ve</option>
              <option value="o">o</option>
              <option value="o+ve">o+ve</option>
              <option value="o-ve">o-ve</option>
              <option value="ab-ve">ab-ve</option>
              </select></li>
            </br>
            </br>
     
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label >*Email:</label>
    <input type="email" name="email"></li>
 </br>
  </br>
  
    &nbsp&nbsp&nbsp&nbsp<label >*Password:</label>
    <input type="password" name="password" ></li>
  </br>
</br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="submit" class="btn btn-primary btn-lg" >Register!&nbsp<span class="glyphicon glyphicon-send"></span></button>
</ul>
</form>
</div>
<div class="div8">
<h3 style="color:#cc0000; text-align:center;"><strong>Are you Eligble?</strong></h3>
<p>
<h3 style="color:#cc0000;">Age</h3>
<img src="image/i1.jpg" class="img4">
New donors are accepted from their 16th birthday up to their 66th birthday.
Existing/Regular donors are accepted up to their 71st birthday.
Regular donors from 71st to their 76th birthday may be accepted subject to authorisation by a NZBS Medical Officer (please enquire at your next donation if you fall within these age limits).

<h3 style="color:#cc0000;">Weight</h3>

Weigh at least 50kg.
First time donors who are under 25 years of age must also meet height and weight criteria. Find out if you meet the height and weight criteria by using our eligiblity quiz above.

<h3 style="color:#cc0000;">Health</h3>

You must be in good health at the time you donate.
You cannot donate if you have a cold, flu, sore throat, cold sore, stomach bug or any other infection.
If you have recently had a tattoo or body piercing you cannot donate for 6 months from the date of the procedure. (See the Detailed Eligibility Criteria  for more details under "Tattoo" or "Body Piercing".)
If you have visited the dentist for a minor procedure you must wait 24 hours before donating; for major work wait a month.



</p>

</div>
</div>
<footer class="f1"> 
<ul>
<a href="index.php">Home  |</a></li>
<a href="about.php">About Us  |</a></li>
<a href="privacy.php">Privacy  |</a></li> 
<a href="contact.php">Contact Us  |</a></li>
<li><a href="admin.php">Admin Login</a></li>

</ul>
</br>
<p>This site is only created as demo for a class project. 
  you don't have anykind of permission to copy the content from this site</p>
  <p>Copyrights &copy karan kidar sharma 2017</p>

</div>




</footer>
</html>
