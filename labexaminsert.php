<html>
<head>
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


</body>
</html>
