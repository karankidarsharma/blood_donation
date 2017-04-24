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

<div class="btn-group btn-group-justified hover">
	<a href="index.php" class="btn ">HOME</a>
  <a href="register.php" class="btn ">REGISTER</a>
  <a href="refer.php" class="btn ">REFER A FRIEND</a>
  <a href="profile.php" class="btn ">EDIT YOUR PROFILE</a>
  <a href="contact.php" class="btn ">CONTACT US</a>

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
    <input id="email" type="text"  name="email" value="Email">
</br>
</br>
<input type="submit" class="btn btn-default" name="submit" value="Submit">
</br>
</br>
</div>
<div class="div3">

<img src="image/6.jpg" class="img1">


	</div>
<div class="div4">
<h2 style="color:red;">Why should I donate blood?</h2>
	<p class="ht">It isn't every day you can do something to save someone's life - but that's exactly what you do every time you donate blood. Blood is a priceless gift - a lifesaver.

Even the best trained medical personnel, using the most advanced equipment can become helpless in the event a patient needs blood.

The gift of blood can only come from another human being ...there are no substitutes.

Blood bags hanging

Blood is indeed something special. It can't be manufactured and it can't be replaced by animal blood. Yet statistics show that less than 4% of all possible donors in New Zealand actually roll their sleeves up and give each year.

Be one of those who make a real difference and donate blood every 3 months.

Giving blood doesn't just benefit recipients. Regardless of who you are, donating blood offers many benefits for donors.

It lets you:

    Help save the life of up to 3 people with a single donation of blood
    Make a difference in your community by helping others
    Develop a sense of commitment to and connection with your fellow Kiwis
    Be assured that adequate supplies of blood are available for you, as well as your family and others
    Join a very special group of volunteers.

</p>
</br>
<img src="image/5.jpg" class="img3">
<p class="ht">It isn't every day you can do something to save someone's life - but that's exactly what you do every time you donate blood. Blood is a priceless gift - a lifesaver.

Even the best trained medical personnel, using the most advanced equipment can become helpless in the event a patient needs blood.

The gift of blood can only come from another human being ...there are no substitutes.

Blood bags hanging

Blood is indeed something special. It can't be manufactured and it can't be replaced by animal blood. Yet statistics show that less than 4% of all possible donors in New Zealand actually roll their sleeves up and give each year.

Be one of those who make a real difference and donate blood every 3 months.

Giving blood doesn't just benefit recipients. Regardless of who you are, donating blood offers many benefits for donors.

It lets you:

    Help save the life of up to 3 people with a single donation of blood
    Make a difference in your community by helping others
    Develop a sense of commitment to and connection with your fellow Kiwis
    Be assured that adequate supplies of blood are available for you, as well as your family and others
    Join a very special group of volunteers.

</p>

</div>
</div>
<footer class="f1"> 
<ul>
<li><a href="index.php">Home  |</a></li>
<li><a href="about.php">About Us  |</a></li>
<li><a href="privacy.php">Privacy  |</a></li>	
<li><a href="contact.php">Contact Us</a></li>

</ul>
</br>
<p>This site is only created as demo for a class project. 
	you don't have anykind of permission to copy the content from this site</p>
	<p>Copyrights &copy karan kidar sharma 2017</p>

</footer>

</html>
