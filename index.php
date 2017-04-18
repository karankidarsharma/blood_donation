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

     if (document.getElementById("select1").value=="choose a City")
     {
           alert("please select a city");
           return false;
           
       }
      if(documents.getElementById("select2").value=="Choose a group") 
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

<div class="btn-group btn-group-justified">
	<a href="index.php" class="btn btn-default">HOME</a>
  <a href="register.php" class="btn btn-danger">REGISTER</a>
  <a href="refer.php" class="btn btn-danger">REFER A FRIEND</a>
  <a href="profile.php" class="btn btn-danger">EDIT YOUR PROFILE</a>
  <a href="contact.php" class="btn btn-danger">CONTACT US</a>

</nav>
</div>
</br>
<div class="div2">

<h2>Find A Blood Doner</h2>
<form method="post" action="donar.php" onsubmit="javascript:return validate ();">
	<a>Choose A City</a></br>
	<select name="Select1" class="select" id="select1">
		                    <option value="choose a City">Choose a city</option>
							<option value="Christchurch">Christchurch</option>
							<option value="Hamilton">Hamilton</option>
							<option value="Cambridge">Cambridge</option>
							<option value="Rotorua">Rotorua</option>
							<option value="Auckland">Auckland</option>
							<option value="Wellington">Wellington</option>
						</select></br>
					</br>
    <a>Choose Blood Group</a></br>
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
							</select></br>
						</br>
     <input type="submit" class="btn btn-default" name="Search" value="Search">


</form>

</div> 
<div class="div2"> <h2>Book Appointment</h2>
	<a>Choose A City</a></br>
<select name="Select1" class="select" id="select1">
		                    <option value="choose a City">Choose a city</option>
							<option value="Christchurch">Christchurch</option>
							<option value="Hamilton">Hamilton</option>
							<option value="Cambridge">Cambridge</option>
							<option value="Rotorua">Rotorua</option>
							<option value="Auckland">Auckland</option>
							<option value="Wellington">Wellington</option>
						</select></br>
					</br>
    <a>Enter Your Email</a></br>
    <input id="email" type="text"  name="email" placeholder="Email">
</br>
</br>
<input type="submit" class="btn btn-default" name="Search" value="Submit">
</br>
</br>
</div>
<div class="div3">

<img src="image/maxresdefault.jpg" class="img1">


	</div>
<div class="div4">

</div>
<div class="div3">
	<h2 style="color:#d9534f;">NOTICE</h2>
	<p></p>
</div>

</html>
</div>