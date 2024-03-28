<?php
    include 'utils.php';

    global  $storageDir;
    $max_size =  1024 * 1024 * 20;

    $token = $_REQUEST["token"];

    if(!isset($token) || $token != $_SESSION["token"] || !isset($_SESSION["token"])){
        error404("Access denied");
    }

    if($_FILES['file']['size'] > $max_size || $_SERVER['CONTENT_LENGTH'] > $max_size){
        error404("File limit is upto 20mb");
    }

    $alias = generateRandomString(30);
    $fileName = basename($_FILES['file']['name']);
    $uploadFile = $storageDir . $alias;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        $dateTime =  date('Y-m-d  H:i:s A');
        UploadInfo($alias, $fileName, $dateTime);
        echo $_SERVER['HTTP_ORIGIN'] . "/download.php?id=" . $alias;
    } 
    else 
    {
        error404("Upload failed");
    }
?>
