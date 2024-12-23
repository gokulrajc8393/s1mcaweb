<html>
<body>
<?php
$students=array("105"=>"gokul","102"=>"ashi","101"=>"abhi","103"=>"gopika","104"=>"thomas");
foreach($students as $x=>$value)
{
echo "roll no=".$x.",name=".$value;
echo "<br>";
}
echo "<br>";
asort($students);
foreach($students as $x=>$value)
{
echo "roll no=".$x.",name=".$value;
echo "<br>";
}
echo "<br>";
ksort($students);
foreach($students as $x=>$value)
{
echo "roll no=".$x.",name=".$value;
echo "<br>";
}
echo "<br>";
rsort($students);
foreach($students as $x=>$value)
{
echo "roll no=".$x.",name=".$value;
echo "<br>";
}
?>
</body>
</html>