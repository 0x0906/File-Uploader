<?php
    if(!isset($_SERVER['HTTP_HOST']) || $_SERVER['HTTP_HOST'] !== "localhost")
    {
        error404("Access denied");
    }

    ini_set('post_max_size', '50M');
    set_error_handler('errorHandler');
    session_start();
    
    $privateDir = "Private/";
    if(!is_dir($privateDir))
    {
        mkdir($privateDir);
    }
    
    $htaccess = "
    Options -Indexes
    Order deny,allow
    Deny from all
    ErrorDocument 404 /404.html
    ";
    $htaccessFile = $privateDir . "/.htaccess";
    if(!file_exists($htaccessFile)){
        file_put_contents($htaccessFile, $htaccess);
    }

    $jsonFile = $privateDir . "/uploadInfo.json";
    $jsonData = array();

    $errlogFile = $privateDir . "error.log";

    $storageDir =  $privateDir . '/Storage/';
    if(!is_dir($storageDir))
    {
        mkdir($storageDir);
    }

    loadJson();

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    function errorHandler($errno, $errstr, $errfile, $errline) {
        $dateTime =  date('Y-m-d  H:i:s A');
        $logMessage = "[$dateTime]   $errstr in $errfile on line $errline";
        error_log($logMessage . "\n", 3, $errlogFile);
        error404("One or more error occured on server side, Contact admins.");
    }

    
    function error404($msg){
        ob_clean();
        http_response_code(404);
        echo $msg;
        exit();
    }

    function loadJson(){
        global $jsonFile;
        global $jsonData;
        
        if(!file_exists($jsonFile)){
            $jsonData = json_encode($jsonData, JSON_PRETTY_PRINT);
            file_put_contents($jsonFile, $jsonData);
        }

        $jsonData = file_get_contents($jsonFile);
        $jsonData = json_decode($jsonData, true);
    }

    function UploadInfo($alias, $fileName, $date){
        global $jsonFile;
        global $jsonData;
        $newJsonData = array($alias => array(
            "fileName" => $fileName, 
            "date" => $date
        ));
        if($jsonData === null){
            $jsonData = json_encode($newJsonData, JSON_PRETTY_PRINT);
        }else{
            $jsonData = json_encode(array_merge($jsonData, $newJsonData), JSON_PRETTY_PRINT);
        }
        file_put_contents($jsonFile, $jsonData);
        loadJson();
    }
?>  