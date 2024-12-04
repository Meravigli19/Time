<?php
$hostname = gethostname();

$client_ip = $_SERVER['REMOTE_ADDR'];

date_default_timezone_set('Asia/Jakarta');
$access_time = date('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Akses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            color: #555;
            margin: 10px 0;
        }
        .highlight {
            font-weight: bold;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Informasi Akses</h1>
        <p><strong>Hostname Server:</strong> <span class="highlight"><?php echo $hostname; ?></span></p>
        <p><strong>IP Client:</strong> <span class="highlight"><?php echo $client_ip; ?></span></p>
        <p><strong>Waktu Akses:</strong> <span class="highlight"><?php echo $access_time; ?></span></p>
    </div>
</body>
</html>