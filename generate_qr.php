<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'phpqrcode/qrlib.php';

if (isset($_GET['text'])) {
    $text = $_GET['text'];
    $tempDir = 'temp/';

    // Make sure temp directory exists
    if (!is_dir($tempDir)) {
        mkdir($tempDir, 0777, true);
    }

    $fileName = 'qr_' . md5($text) . '.png';
    $filePath = $tempDir . $fileName;

    // Generate QR Code
    QRcode::png($text, $filePath, QR_ECLEVEL_L, 4);

    if (file_exists($filePath)) {
        // Display QR Code
        header('Content-Type: image/png');
        readfile($filePath);
    } else {
        echo 'QR code generation failed.';
    }
    exit();
} else {
    echo 'No text provided';
}
?>
