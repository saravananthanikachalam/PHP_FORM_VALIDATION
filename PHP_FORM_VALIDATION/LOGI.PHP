<?php
$Name=$_POST['Name'];
$Password=$_POST['Password'];
$con=mysqli_connect("localhost","root","","sachin") or die("db not connected");
$query="select * from saravanan where Name='$Name'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
    if($row['Password']==$Password)
    {
        echo "<script> alert ('login success');
             window.location.href='https://en.wikipedia.org/wiki/Senneri';
            </script>";
    }
    else
    {
        echo "<script> alert('login un success') </script>";
    }
}
else
{
    echo "<script> alert('invalid user name');</script>";
}
?>