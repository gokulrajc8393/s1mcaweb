<html>
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-size: 18px;
            margin-bottom: 10px;
            display: block;
        }
        input[type="text"] {
            width: 96%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
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

<div class="container">
<h1>Enter Book Details</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label for="bookid">Enter Book Id:</label>
<input type="text" id="bookid" name="bookid" placeholder="Enter Book Id">
<label for="booktitle">Enter Book Title:</label>
<input type="text" id="booktitle" name="booktitle" placeholder="Enter Book Title">
<label for="bookauthor">Enter Author Name:</label>
<input type="text" id="bookauthor" name="bookauthor" placeholder="Enter Author Name">
<label for="bookedition">Enter Book Edition:</label>
<input type="text" id="bookedition" name="bookedition" placeholder="Enter Book Edition">
<label for="bookpublisher">Enter Publisher Name:</label>
<input type="text" id="bookpublisher" name="bookpublisher" placeholder="Enter Publisher Name">
<input type="submit" name="submit" value="Add Book">
</form>
<form action="assnmnt18.php" method="post">
<input type="submit" name="submit" value="View Home">
</form>
</div>

</body>
</html>
