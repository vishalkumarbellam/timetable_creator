<?php
function createdb()
{
$con=mysqli_connect("localhost","root","");
if($con)
{
    if(mysqli_query($con,"CREATE DATABASE timetable"))
        echo "<script>alert('database created');</script>";
   mysqli_close($con);
}
else
    echo "<script>alert('error in connecting to the server');</script>";
}
?>