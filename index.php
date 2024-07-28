<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .form-group label {
            font-weight: bold;
        }
        img {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 5px;
            width: 150px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h1 class="text-center">QR Code Generator</h1>
            <h3 class="text-center">กรุณาสแกนคิวอาร์โค็ตเพื่อรับToken</h3>
            <form action="index.php" method="post" class="mt-4">
                <div class="form-group">
                    <label for="text">กรอกเว็ปที่คุณต้องการจะสร้าง QRCODE:</label>
                    <input type="text" class="form-control" id="text" name="text" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Generate QR Code</button>
            </form>
            <div class="mt-4 text-center">
                <?php if (isset($_POST['text'])): ?>
                    <?php
                    $text = urlencode($_POST['text']);
                    $url = "generate_qr.php?text=$text";
                    ?>
                    <img src="<?php echo $url; ?>" alt="QR Code">
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
