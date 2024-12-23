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
$sql="SELECT * FROM mark";
$res=mysqli_query($conn,$sql);
echo '<table style="width:50%">
<tr>
<th><h1>Roll No</h1></th>
<th><h1>ASE Mark</h1></th>
<th><h1>DS Mark</h1></th>
<th><h1>WPL Mark</h1></th>
<th><h1></h1></th>
<th><h1></h1></th>
</tr>';
while($row=mysqli_fetch_assoc($res))
{
echo 
'<tr>
<td><h1>'.$row["roll_no"].'</h1></td>
<td><h1>'.$row["ase"].'</h1></td>
<td><h1>'.$row["ds"].'</h1></td>
<td><h1>'.$row["wpl"].'</h1></td>
<th><h1><input type="submit" name="update" value="Update" action=""></h1></th>
<th><h1><input type="submit" name="delete" value="Delete"></h1></th>
</tr>';
}
echo '</table>';
?>
</body>
</html>