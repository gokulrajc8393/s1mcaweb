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
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
        
    </style>
</head>
<body>

<?php
$amount=0;
$valueERR="";
$unit="";
$consumername="";
$consumerno="";
if($_SERVER["REQUEST_METHOD"]=="POST") 
{
$unit=$_POST['units'];
$consumerno=$_POST['consumerno'];
$consumername=$_POST['consumername'];

if ($unit=="") 
{
$valueERR= "Value Required";
}
else if ($unit<=0) 
{
$valueERR= "Value Cannot Be Null Or Zero";
}
else if ($unit<=100) 
{
$amount=$unit*5;
} 
elseif ($unit<=200) 
{
$amount=(100*5)+(($unit-100)*7.5);
} 
else 
{
$amount=(100*5)+(100*7.5)+(($unit-200)*10);
}
}
?>

<div class="container">
<h1>Electricity Bill</h1>

<div class="result">
<h2>Consumer No: <?php echo $consumerno ?></h2>
<h2>Consumer Name: <?php echo $consumername ?></h2>
<h2>Total Bill: Rs <?php echo $amount ?></h2>
</div>
</div>

</body>
</html>
