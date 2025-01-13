<html>
    <body>
        
        <h2>Numbers</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="num1">Enter Number 1:</label>
            <input type="text" id="num1" name="num1">
            <label for="num2">Enter Number 2:</label>
            <input type="text" id="num2" name="num2">
            <label for="num3">Enter Number 3:</label>
            <input type="text" id="num3" name="num3">
            <input type="submit" name="submit" value="submit">
        </form>
   

<?php 

if(isset($_POST['submit']))
{
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$num3=$_POST['num3'];
if($num1>$num2 && $num1>$num3)
{
    echo "$num1 is greater";
}
elseif($num2>$num1 && $num2>$num3)
{
    echo "$num2 is greater";
}
elseif($num3>$num1 && $num3>$num2)
{
    echo "$num3 is greater";
}
elseif($num1==$num2)
{
    echo "$num1 and $num2 equal";
}
elseif($num1==$num3)
{
    echo "$num1 and $num3 equal";
}
elseif($num2==$num3)
{
    echo "$num3 and $num2 equal";
}
else
{
    echo "all equal";
}
}

?>
</body>
</html>