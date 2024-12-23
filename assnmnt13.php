<?php
$students=array("101"=>"Gokul","102"=>"Abhijith","103"=>"Ashitha","104"=>"Gopika");
echo "Orginal Array";
echo "<br>";
print_r($students);
asort($students);
echo "<br><br>";
echo "Array after asort";
echo "<br>";
print_r($students);
arsort($students);
echo "<br><br>";
echo "Array after arsort";
echo "<br>";
print_r($students);
