<?php session_start();

$u=$_REQUEST['text1'];
$p=$_REQUEST['text2'];
if ($u=="" || $p=="")
{
  header('location:admin.php?success=3');
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
 
   header('location:admin2.php?success=1');
 }
 else
{
header('location:admin.php?success=2');
}


}


?>


?>


