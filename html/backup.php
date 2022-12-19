<?php
include "settings.php";
$rootPath = realpath('/var/www/html/node/database');

$zip = new ZipArchive();
$zip->open('backup-'. date('d-m-Y') .'.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    if (!$file->isDir())
    {
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);
        $zip->addFile($filePath, $relativePath);
    }
}
$zip->close();

$caption = "Backup за " . date('d-m-Y'); 
$uploadfile = __DIR__ . '/backup-'. date('d-m-Y') .'.zip';
$document = new CURLFile($uploadfile);
    $response = array(
        'chat_id' => KODER,
        "document" => $document,
        'caption' => "Backup за " . date('d-m-Y') . " число."
        );
        $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendDocument');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);

unlink(__DIR__ . '/backup-'. date('d-m-Y') .'.zip');
?>