<?php session_start(); 

$u=$_REQUEST['text1'];
$p=$_REQUEST['password'];
if ($u=="") || ($p=="")
{
 header("location:index.php");
}else{

$servername ="localhost";
$username="root";
$password="pass";
$dbname="bds";
$con = mysqli_connect($servername,$username,$password,$dbname);
  if(!$con)
  {
die('could not connect'.mysqli_error());
}

$query="SELECT * FROM admin where user_name='" .$u ."'";

$result=mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result))
{
  $dbp=$row["password"];
}
if ($dbp==$p)
$_session['suser']=$u;

echo "successfully logged in.<a href=admin2.php>Go to my Account</a>";
}
else 
{
  echo "invalid username or password.<a href=admin.php>try again</a>";
}

}

?>






