<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
}
.error {
    color: red;
    font-size: 14px;
    margin-bottom: 10px;
}
</style>
</head>
<body>

<h3>Enter Book Details</h3>
<form method="POST" onsubmit="return validateForm()">
    <label for="bookid">Enter Book Id:</label>
    <input type="text" id="bookid" name="bookid">
    <div id="iderror" class="error"></div><br><br>

    <label for="booktitle">Enter Book Title:</label>
    <input type="text" id="booktitle" name="booktitle">
    <div id="nameerror" class="error"></div><br><br>

    <label for="bookauthor">Enter Author Name:</label>
    <input type="text" id="bookauthor" name="bookauthor">
    <div id="authorerror" class="error"></div><br><br>

    <label for="bookedition">Enter Book Edition:</label>
    <input type="text" id="bookedition" name="bookedition">
    <div id="editionerror" class="error"></div><br><br>

    <label for="bookpublisher">Enter Publisher Name:</label>
    <input type="text" id="bookpublisher" name="bookpublisher">
    <div id="publishererror" class="error"></div><br><br>

    <input type="submit" name="submit" value="Add Book">
</form>

<script>
    function validateForm() {
        let isValid = true;
        document.getElementById("iderror").innerHTML = "";
        document.getElementById("nameerror").innerHTML = "";
        document.getElementById("authorerror").innerHTML = "";
        document.getElementById("editionerror").innerHTML = "";
        document.getElementById("publishererror").innerHTML = "";

        const bid = document.getElementById("bookid").value;
        const btitle = document.getElementById("booktitle").value;
        const bauth = document.getElementById("bookauthor").value;
        const bedit = document.getElementById("bookedition").value;
        const bpub = document.getElementById("bookpublisher").value;

        if (bid === "") {
            document.getElementById("iderror").innerHTML = "Please enter valid Book ID";
            isValid = false;
        } 

        if (btitle === "") {
            document.getElementById("nameerror").innerHTML = "Please enter valid Book Title";
            isValid = false;
        } 

        if (bauth === "") {
            document.getElementById("authorerror").innerHTML = "Please enter valid Author Name";
            isValid = false;
        } 

        if (bedit === "") {
            document.getElementById("editionerror").innerHTML = "Please enter valid Book Edition";
            isValid = false;
        } 

        if (bpub === "") {
            document.getElementById("publishererror").innerHTML = "Please enter valid Publisher Name";
            isValid = false;
        } 

        return isValid;
    }
</script>

<h2>Book Details</h2>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $bookid = $_POST['bookid'];
    $booktitle = $_POST['booktitle'];
    $bookauthor = $_POST['bookauthor'];
    $bookedition = $_POST['bookedition'];
    $bookpublisher = $_POST['bookpublisher'];

    $sql = "INSERT INTO booknew (book_id, book_title, book_author, edition, publisher) 
            VALUES ('$bookid', '$booktitle', '$bookauthor', '$bookedition', '$bookpublisher')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New Record Created Successfully');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}

$sql = "SELECT * FROM booknew";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    // Display table if data exists
    echo '<table style="width:50%">
            <tr>
                <th>SI No</th>
                <th>Book Id</th>
                <th>Book Title</th>
                <th>Author</th>
                <th>Edition</th>
                <th>Publisher</th>
            </tr>';
    while($row = mysqli_fetch_assoc($res)) {
        echo '<tr>
                <td>' . $row["si_no"] . '</td>
                <td>' . $row["book_id"] . '</td>
                <td>' . $row["book_title"] . '</td>
                <td>' . $row["book_author"] . '</td>
                <td>' . $row["edition"] . '</td>
                <td>' . $row["publisher"] . '</td>
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
