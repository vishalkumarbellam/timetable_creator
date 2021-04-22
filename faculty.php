<?php 
$c=mysqli_connect("localhost","root","","timetable");
if($c)
{
    $sql="CREATE TABLE faculty(first_name varchar(20),last_name varchar(20),loc varchar(100),Mobile_no int(20),email varchar(30))";
    if(mysqli_query($c,$sql))
        echo "<script>alert('table created');</script>";
    if(mysqli_query($c,"INSERT INTO faculty(first_name,last_name,loc,Mobile_no,email) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[inputaddress]','$_POST[Mobile]','$_POST[Email]')"))
        echo "<script>alert('data inserted');</script>";
    else
        echo "<script>alert('error in inserting data');</script>";
}
else
    echo "<script>alert('error in connecting to the database');</script>";
header('location:index.php');
?>