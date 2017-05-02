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

  <h3> Admin Login</h3>
</br>
<form action="admin1.php" method="post" >
    <label>Enter username:&nbsp</label>
    <input type="text" name="text1" autofocus placeholder="username">
  </br>
</br>
  <label>Enter Password:&nbsp</label>
    <input type="text" name="text2" autofocus placeholder="password">
  </br></br>
  <input type="submit" class="btn btn-default"  value="Login!">
  </form>
  <?php
  if(isset($_GET['success']) && $_GET['success'] == 2)
      {
        echo "<a>Wrong credentials</a>";
      }
      ?>

      <?php
  if(isset($_GET['success']) && $_GET['success'] == 3)
      {
        echo '<a class="t1">wrong username/password!</a>';
      }
      ?>
</div>
<div class="div11">
 <h1><strong>Post Donation Care</strong></h1>
 <p ><marquee direction="up" scrollamount="1">Have some rest 5 to 20 minutes after donation. Do not drive after donation of blood.
 Have some snacks and juice with high sugar content which will help to rejuvenate the blood sugar back    up.
 Have a good meal with high protein content such as Chicken, Beef etc,.
 Do not consume Alcohol for 8 hours after donation of blood.
 Avoid going for a heavy body works such as gym, dancing, running etc at least for next one day.
 
Have some rest 5 to 20 minutes after donation. Do not drive after donation of blood.
 Have some snacks and juice with high sugar content which will help to rejuvenate the blood sugar back    up.
 Have a good meal with high protein content such as Chicken, Beef etc,.
 Do not consume Alcohol for 8 hours after donation of blood.
 Avoid going for a heavy body works such as gym, dancing, running etc at least for next one day.
</marquee></p>
</div>
</div>
<footer class="f1"> 
<ul>
<li><a href="index.php">Home  |</a></li>
<li><a href="about.php">About Us  |</a></li>
<li><a href="privacy.php">Privacy  |</a></li> 
<li><a href="contact.php">Contact Us  |</a></li>
<li><a href="admin.php">Admin Login</a></li>
</ul>
</br>
<p>This site is only created as demo for a class project. 
  you don't have anykind of permission to copy the content from this site</p>
  <p>Copyrights &copy karan kidar sharma 2017</p>

</div>




</footer>
</html>
