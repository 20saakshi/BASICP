<?php    
if(isset($_POST['sub']))
{
  $host="localhost";
  $username="root"; 
  $word="";
  $db_name="cusotmer";
  $con =mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");
  $checkbox1=$_POST['techno'];  
  $chk="";  
  foreach($checkbox1 as $chk1)  
    {  
      $chk .= $chk1.",";  
    }    
 
  if($chk == 1)  
    {  
      echo'<script>alert("Inserted Successfully")</script>';  
    }  
  else  
    {  
      echo'<script>alert("Failed To Insert")</script>';  
    }  
} 
$a = $_POST['fname'];
$b = $_POST['mname'];
$c = $_POST['lname'];
$d = $_POST['email'];
$e = $_POST['pass'];
$f = $_POST['pass1'];
$g = $_POST['gender'];
$checkbox1=$_POST['techno'];  
  $chk="";  
  foreach($checkbox1 as $chk1)  
    {  
      $chk .= $chk1.",";  
    }
$connection = mysqli_connect("localhost", "root", "", "cusotmer");
$query = mysqli_query($connection, "insert into technology(f_name,m_name,l_name,email,pass,repass,gender,tech) values('$a','$b','$c','$d','$e','$f','$g','$chk')");
if ($query) {
    echo "<script>alert('Record insert successfully');</script>";
}else{
  echo "mysqli_error($connnection)";
}
?>