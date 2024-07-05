<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gudang Pesanan</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-size: 1.7rem;
            font-family: 'Merriweather Sans', sans-serif;
            background: #2c3e50;
            color: #ececec;
            padding: 4rem;
        }

        h1 {
            text-align: center;
            margin-bottom: 5rem;
            font-size: 4rem;
        }

        pre {
            background: #34495e;
            padding: 2rem;
            border-radius: 1rem;
            color: #ececec;
            white-space: pre-wrap;
            word-wrap: break-word;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <h1>Keranjang Pesanan</h1>

    <?php
    $filePath = 'orders.txt';

    if (file_exists($filePath)) {
        $fileContent = file_get_contents($filePath);
        echo "<pre>$fileContent</pre>";
    } else {
        echo "<p>File tidak ditemukan.</p>";
    }
    ?>
</body>
</html>
