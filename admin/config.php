
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"Library_Management_System");
if(!$db)
{
  echo"connection error";
  echo"please check manually!";  
}
?>