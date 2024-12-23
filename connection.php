<?php
$servername="localhost";
$username="root";
$password="";
$dbname="college";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed:".mysqli_connect_error());
}
echo "connection successful";
echo"<br>";
$sql="INSERT INTO student(roll_no,name,age,course) VALUES ('5','Adwaith','21','MCA')";
if(mysqli_query($conn,$sql))
{
echo "new record inserted";
}
else
{
echo "error: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>