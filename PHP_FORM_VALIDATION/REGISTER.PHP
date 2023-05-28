<?php 
$server="localhost";
$uname="root";
$pwd="";
$db="sachin";
$con=mysqli_connect($server,$uname,$pwd,$db) or die ("db not connected");
$name=$_POST['txt'];
$email=$_POST['email'];
$pass=$_POST['pswd'];
$query="insert into saravanan values('$name','$email','$pass')";
if($res=mysqli_query($con,$query))
{
    echo "<script> alert('data saved');
          window.location.href='LOGIN_PHP.HTML';
          </script>";
}
else
{
    echo "<script>alert('data not saved');
          window.location.href='#';
          </script>"; 
}
?>