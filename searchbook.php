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
        table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
}
        
    </style>
</head>
<body>


<div class="container">
<h1>Search Book</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label for="bookauthor">Enter Author Name:</label>
<input type="text" id="bookauthor" name="bookauthor" placeholder="Enter Author Name">
<input type="submit" name="search" value="Search Book">
</form>
<form action="assnmnt18.php" method="post">
<input type="submit" name="submit" value="View Home">
</form>
</div>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="college";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['search']))
{
$bookauthor=$_POST['bookauthor'];
$sql1="SELECT * FROM book WHERE `book_author`='$bookauthor'";
$res=mysqli_query($conn,$sql1);

$totalrows=mysqli_num_rows($res);
if($totalrows==0)
{
echo "<script>alert('No Book Found');</script>";
}
else
{
    echo '<center>';
    echo '<br><br>';
    echo '<table style="width:50%">
    <tr>
    <th><h1>Book ID</h1></th>
    <th><h1>Book Title</h1></th>
    <th><h1>Book Edition</h1></th>
    <th><h1>Publisher</h1></th>
    </tr>';
    while($row=mysqli_fetch_assoc($res))
    {
    echo 
    '<tr>
    <th><h1>'.$row["book_id"].'</h1></th>
    <th><h1>'.$row["book_title"].'</h1></th>
    <th><h1>'.$row["edition"].'</h1></th>
    <th><h1>'.$row["publisher"].'</h1></th>
    </tr>';
    }
    echo '</table>';
    echo '</center>';

}
}
mysqli_close($conn);
?>

</body>
</html>
