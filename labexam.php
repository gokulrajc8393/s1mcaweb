<html>
<head>
<style>
table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>


<?php
$servername="localhost";
$username="root";
$password="";
$dbname="college";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submit']))
{
$bookid=$_POST['bookid'];
$booktitle=$_POST['booktitle'];
$bookauthor=$_POST['bookauthor'];
$bookedition=$_POST['bookedition'];
$bookpublisher=$_POST['bookpublisher'];

$sql="INSERT INTO book (`book_id`, `book_title`, `book_author`, `edition`, `publisher`) VALUES('$bookid','$booktitle','$bookauthor','$bookedition','$bookpublisher')";
if(mysqli_query($conn,$sql))
{
echo "<script>alert('New Record Created Successfully');</script>";
}

}
mysqli_close($conn);
?>
<h3>Enter Book Details</h3>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label for="bookid">Enter Book Id:</label>
<input type="text" id="bookid" name="bookid"><br><br>
<label for="booktitle">Enter Book Title:</label>
<input type="text" id="booktitle" name="booktitle"><br><br>
<label for="bookauthor">Enter Author Name:</label>
<input type="text" id="bookauthor" name="bookauthor"><br><br>
<label for="bookedition">Enter Book Edition:</label>
<input type="text" id="bookedition" name="bookedition"><br><br>
<label for="bookpublisher">Enter Publisher Name:</label>
<input type="text" id="bookpublisher" name="bookpublisher"><br><br>
<input type="submit" name="submit" value="Add Book">
</form>

<h2>Book Details</h2>

<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="college";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="SELECT * FROM book";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
  // Display table if data exists

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
} else {
  // Display message if no records are found
  echo '<h1>No records found</h1>';
}

// Close the connection
mysqli_close($conn);
?>


</body>
</html>
