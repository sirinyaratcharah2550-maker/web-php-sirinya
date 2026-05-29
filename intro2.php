<?php
$name = "ศิริญญา ราชรักษ์";
$age = 25;
$occupation = "โปรแกรมเมอร์";
$location = "ประเทศไทย";
$skills = ["PHP", "HTML", "CSS", "JavaScript"];
$email = "sirinya@email.com";
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>นำเสนอตัวเอง - ศิริญญา ราชรักษ์</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            width: 100%;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5em;
        }
        .info {
            margin: 20px 0;
            padding: 15px;
            background: #f9f9f9;
            border-left: 4px solid #667eea;
            border-radius: 5px;
        }
        .label {
            font-weight: bold;
            color: #667eea;
        }
        .value {
            color: #555;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>👋 นำเสนอตัวเอง</h1>
        
        <div class="info">
            <span class="label">ชื่อ:</span>
            <span class="value"><?php echo $name; ?></span>
        </div>
        
        <div class="info">
            <span class="label">อายุ:</span>
            <span class="value"><?php echo $age; ?> ปี</span>
        </div>
        
        <div class="info">
            <span class="label">อาชีพ:</span>
            <span class="value"><?php echo $occupation; ?></span>
        </div>
        
        <div class="info">
            <span class="label">สถานที่:</span>
            <span class="value"><?php echo $location; ?></span>
        </div>
        
        <div class="info">
            <span class="label">ทักษะ:</span>
            <span class="value"><?php echo implode(", ", $skills); ?></span>
        </div>
        
        <div class="info">
            <span class="label">อีเมล:</span>
            <span class="value"><?php echo $email; ?></span>
        </div>
    </div>
</body>
</html>