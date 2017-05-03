<?php session_start();
if (isset($_SESSION['suser']))
{

}
else
{
echo "<SCRIPT language='JavaScript'> window.location='admin.php'; </script>";
}
 ?>
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

</header>
</br>
<nav>
  <?php
  if(isset($_GET['success']) && $_GET['success'] == 1)
      {
        echo '<a class="t1">Login successfully </a>';
      }
      ?>
  </nav>
  <body>
<div class="12">
</div>



  </body>
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
