<html>
<body>
<style>
table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
}
</style>
<body>
<h1>Mark Details</h1>

<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="college";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="SELECT * FROM student";
$res=mysqli_query($conn,$sql);
echo '<table style="width:50%">
<tr>
<th><h1>SI No</h1></th>
<th><h1>Roll No</h1></th>
<th><h1>Student Name</h1></th>
<th><h1>DS Mark</h1></th>
<th><h1>ASE Mark</h1></th>
<th><h1>DFCA Mark</h1></th>
<th><h1>MFC Mark</h1></th>
</tr>';
while($row=mysqli_fetch_assoc($res))
{
echo 
'<tr>
<th><h1>'.$row["si_no"].'</h1></th>
<th><h1>'.$row["roll_no"].'</h1></th>
<th><h1>'.$row["name"].'</h1></th>
<th><h1>'.$row["ds"].'</h1></th>
<th><h1>'.$row["ase"].'</h1></th>
<th><h1>'.$row["dfca"].'</h1></th>
<th><h1>'.$row["mfc"].'</h1></th>
</tr>';
}
echo '</table>';
?>
</body>
</html>