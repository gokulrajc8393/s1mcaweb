<html>
<head>
<style>
table, th, td 
{
  border: 3px solid black;
  border-collapse: collapse;
}
td {
  height: 40px; 
  padding: 10px;
}

th {
  height: 40px;
  padding: 10px; 
}
</style>
</head>
<body>
<h2>Cricket Players</h2>
<?php
$players = array("Virat Kohli","Rohit Sharma","MS Dhoni","Shikhar Dhawan","KL Rahul","Jasprit Bumrah",
"Ravindra Jadeja","Hardik Pandya","Ravichandran Ashwin","Shreyas Iyer");
?>
<table style="width:30%">
<tr><th>Player Names</th></tr>
<?php
foreach ($players as $x) {
    echo "<tr><td>$x</td></tr>";
}
?>
</table>

</body>
</html>
