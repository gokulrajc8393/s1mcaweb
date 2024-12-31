<html>
<body>
<style>
table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
}
</style>
<body>
<h1>Book Details</h1>

<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="college";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="SELECT * FROM book";
$res=mysqli_query($conn,$sql);
echo '<table style="width:50%">
<tr>
<th><h1>SI No</h1></th>
<th><h1>Book Id</h1></th>
<th><h1>Book Title</h1></th>
<th><h1>Author</h1></th>
<th><h1>Edition</h1></th>
<th><h1>Publisher</h1></th>
</tr>';
while($row=mysqli_fetch_assoc($res))
{
echo 
'<tr>
<th><h1>'.$row["si_no"].'</h1></th>
<th><h1>'.$row["book_id"].'</h1></th>
<th><h1>'.$row["book_title"].'</h1></th>
<th><h1>'.$row["book_author"].'</h1></th>
<th><h1>'.$row["edition"].'</h1></th>
<th><h1>'.$row["publisher"].'</h1></th>
</tr>';
}
echo '</table>';
?>
</body>
</html>