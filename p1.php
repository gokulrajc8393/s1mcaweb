<html>
<body>
<?php
echo'<h1>hello world</h1>';
//phpinfo();
$txt="hello world!!...";
$x=5;
$y=7.5;
echo "$txt<br>";
echo "$x<br>";
echo "$y<br>";
define("GREETING","welcome.....");
echo GREETING;
echo"<br>";
define("CARS",["audi","benz","bmw"]);
echo CARS[1];
echo"<br>";
echo strlen("hellooooo");
echo"<br>";
echo strrev("hellooooo");
echo"<br>";
echo strpos("hello all","all");
echo"<br>";
$caar=array("a"=>"benz","b"=>"audi","c"=>"bmw");
echo"i like ".$caar["c"]." cars.";
echo"<br>";
$age=array("peter"=>"35","ben"=>"37","joe"=>"43");
foreach($age as $x=>$value)
{
echo "key=".$x.",value=".$value;
echo "<br>";
}
echo "<br>";
ksort($age);
foreach($age as $x=>$value)
{
echo "key=".$x.",value=".$value;
echo "<br>";
}
echo "<br>";
asort($age);
foreach($age as $x=>$value)
{
echo "key=".$x.",value=".$value;
echo "<br>";
}
echo "<br>";
$a=array("abc","def","ghi");
print_r($a);
echo "<br>";
print_r($age);

?>
</body>
</html>