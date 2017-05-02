<?php session_start(); 

<?php session_start();

$u=$_REQUEST['text1'];
$p=$_REQUEST['text2'];
if ($u=="" || $p=="")
{

echo " Invalid username/password. <a herf=admin.php>please try Again</a>";
}
else
{
$servername ="localhost";
$dbname ="bds";
$username="root";
$password="pass";
$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con)
  {
  die('could not connect: ' .mysqli_error());
  }
  
 $query="SELECT * FROM  admin where user_name='" .$u . "'";
 
 $result=mysqli_query($con, $query);
 while($row = mysqli_fetch_assoc($result))
 
 {
 $dbp=$row["password"];
 }
 if ($dbp==$p)
 {
 $_SESSION['suser']=$u;
 
 echo "Sucessfully Logged in. <a href=admin.php>Click Here to go to My Account</a>";
 }
 else
{
echo "Invalid Username/Password. <a href=login.php>please try again</a>";
}


}


?>


?>


