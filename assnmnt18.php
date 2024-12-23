<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Navigation Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 1000px;
            height: 400px;
        }
        
        button {
            font-size: 20px;
            padding: 15px 30px;
            margin: 20px;
            cursor: pointer;
            background-color:rgb(173, 70, 6);
            color: white;
            border: none;
            border-radius: 10px;
            width: 250px;
            height: 70px;
        }
        
    </style>
</head>
<body>

    <div class="container">
        <h1>Online Book</h1>

        <button onclick="window.location.href='newbook.php'">Enter Book</button>
        <br>
        <button onclick="window.location.href='viewbook.php'">View All Book</button>
        <br>
        <button onclick="window.location.href='searchbook.php'">Search Book</button>
    </div>

</body>
</html>
