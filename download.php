<?php
    include "utils.php";

    $alias = $_REQUEST["id"];

    if(!isset($alias)) {
        error404("Access denied");
    }

    global $jsonData;
    global $storageDir;

    if(count($jsonData) < 0 || !array_key_exists($alias, $jsonData)){
        error404("Invalid ID");
    }

    $file = $storageDir . $alias;
    $fileName = $jsonData[$alias]["fileName"];

    if(file_exists($file) && strlen($fileName) > 0)
    {
        ob_clean();
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
        header('Expires: 0');
        header('Content-Length: ' . filesize($file));
        readfile($file);
    }
    else
    {
        error404("File not found");
    }

?>