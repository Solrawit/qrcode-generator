<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">QR Code Generator</h1>
        <form action="index.php" method="post" class="mt-4">
            <div class="form-group">
                <label for="text">Text to encode:</label>
                <input type="text" class="form-control" id="text" name="text" required>
            </div>
            <button type="submit" class="btn btn-primary">Generate QR Code</button>
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
</body>
</html>
