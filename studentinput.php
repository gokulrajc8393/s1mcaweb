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
if(isset($_POST['submit']))
{
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$age=$_POST['age'];
$course=$_POST['course'];
echo "roll no:".$rollno."<br>";
echo "name:".$name."<br>";
echo "age:".$age."<br>";
echo "course:".$course."<br>";

$sql="INSERT INTO student VALUES('$rollno','$name','$age','$course')";
if(mysqli_query($conn,$sql))
{
echo "<br>New Record Created Successfully";
}
else
{
echo "error: ".$sql."<br>".mysqli_error($conn);
}
}


if(isset($_POST['search']))
{
$rollno=$_POST['rollno'];
$sql1="SELECT * FROM student WHERE roll_no='$rollno'";
$res=mysqli_query($conn,$sql1);

$totalrows=mysqli_num_rows($res);
if($totalrows==0)
{
echo "no value found<br>";
}
while($row=mysqli_fetch_assoc($res))
{
echo "<br>";
echo "roll no:".$row["roll_no"]."<br>";
echo "name:".$row["name"]."<br>";
echo "age:".$row["age"]."<br>";
echo "course:".$row["course"]."<br>";
}
}
mysqli_close($conn);
?>