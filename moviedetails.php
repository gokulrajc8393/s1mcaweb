<html>
    <body>
        <style>
table,th,td{
    border:3px solid black;
    border-collapse:collapse;
}
.error{
    color:red;
    font-size: 14px;
    margin-bottom: 10px;
}
        </style>
        <h2>Ticket Booking</h2>
        <form method="POST" onsubmit="return formvalidate()">
            <label for="bookingid">Enter Booking Id:</label>
            <input type="text" id="bookingid" name="bookingid">
            <div id="iderror" class="error"></div><br><br>
            <label for="moviename">Enter Movie Name:</label>
            <input type="text" id="moviename" name="moviename">
            <div id="nameerror" class="error"></div><br><br>
            <label for="seatno">Enter Seat No:</label>
            <input type="text" id="seatno" name="seatno">
            <div id="seaterror" class="error"></div><br><br>
            <label for="moviedate">Enter Date:</label>
            <input type="date" id="moviedate" name="moviedate">
            <div id="dateerror" class="error"></div><br><br>
            <input type="submit" name="submit" value="submit">
        </form>
        <script>
            function formvalidate()
            {
                let isvalid=true;
                document.getElementById("iderror").innerHTML="";
                document.getElementById("nameerror").innerHTML="";
                document.getElementById("seaterror").innerHTML="";
                document.getElementById("dateerror").innerHTML="";

                const mid=document.getElementById("bookingid").value;
                const name=document.getElementById("moviename").value;
                const seat=document.getElementById("seatno").value;
                const mdate=document.getElementById("moviedate").value;

            if(mid==="")
            {
                document.getElementById("iderror").innerHTML="Enter Valid Id";
                isvalid=false;
            }
            if(name==="")
            {
                document.getElementById("nameerror").innerHTML="Enter Valid Name";
                isvalid=false;
            }
            if(seat==="")
            {
                document.getElementById("seaterror").innerHTML="Enter Valid Seat No";
                isvalid=false;
            }
            if(mdate==="")
            {
                document.getElementById("dateerror").innerHTML="Enter Valid date";
                isvalid=false;
            }
            return isvalid;
            }
        </script>
       <h2>Booking Details</h2>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
$bid=$_POST['bookingid'];
$name=$_POST['moviename'];
$seat=$_POST['seatno'];
$bdate=$_POST['moviedate'];
$sql="insert into booking(booking_id,movie_name,seat_no,date) values ('$bid','$name','$seat','$bdate')";
if(mysqli_query($conn,$sql))
{
    echo '<script>alert("booking entered");</script>';
}
else
{
    die("failed".mysqli_error());
}
}

$sql1="select * from booking";
$res=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res)>0)
{
    echo'<table style="width:50%">
    <tr>
    <th>Booking Id</th>
    <th>Movie Name</th>
    <th>Seat No</th>
    <th>Date</th>';
    while($row=mysqli_fetch_assoc($res))
    {
        echo'<tr>
        <th>'.$row["booking_id"].'</th>
        <th>'.$row["movie_name"].'</th>
        <th>'.$row["seat_no"].'</th>
        <th>'.$row["date"].'</th>
        </tr>';
    }
    echo'</table>';
}

?>
</body>
</html>