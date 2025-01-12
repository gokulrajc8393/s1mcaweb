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
  
  // Fetch and display each row of the result
  while($row = mysqli_fetch_assoc($res)) {
      echo '<tr>
              <td><h1>' . $row["si_no"] . '</h1></td>
              <td><h1>' . $row["book_id"] . '</h1></td>
              <td><h1>' . $row["book_title"] . '</h1></td>
              <td><h1>' . $row["book_author"] . '</h1></td>
              <td><h1>' . $row["edition"] . '</h1></td>
              <td><h1>' . $row["publisher"] . '</h1></td>
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