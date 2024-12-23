<html>
<body>
<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="fname"><br><br>
Email:<input type="text" name="email"><br><br>
Phone:<input type="text" name="phone"><br><br>
<input type="submit" value="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="GET")
{
$name=$_GET["fname"];
echo $name;
echo "<br>";
$email=$_GET["email"];
echo $email;
echo "<br>";
$phone=$_GET["phone"];
echo $phone;
}
?>
</body>
</html>