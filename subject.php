<?php 
$c=mysqli_connect("localhost","root","","timetable");
if($c)
{
    $sql="CREATE TABLE sub(subject_name varchar(20),score int(10))";
    if(mysqli_query($c,$sql))
        echo "<script>alert('table created');</script>";
    if(mysqli_query($c,"INSERT INTO sub(subject_name,score) VALUES ('$_POST[Sname]','$_POST[Score]')"))
        echo "<script>alert('data inserted');</script>";
    else
        echo "<script>alert('error in inserting data');</script>";
}
else
    echo "<script>alert('error in connecting to the database');</script>";
header('location:index.php');
?>