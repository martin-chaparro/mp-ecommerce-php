<?php
// Genero el log de la IPN
$main_data = file_get_contents('php://input');

if (!empty($main_data)) {
    $main_data .= "\n";
    $filename = 'log_main.txt';
    $handle = fopen($filename, "a");
    fwrite($handle, $main_data);
    fclose($handle);
}
if (isset($_POST) && !empty($_POST)){
    $linea = json_encode($_POST)."\n";
    $filename = 'log_post.txt';
    $handle = fopen($filename, "a");
    fwrite($handle, $linea);
    fclose($handle);
}

if (isset($_GET) && !empty($_GET)){
    $linea2 = json_encode($_GET)."\n";
    $filename = 'log_get.txt';
    $handle = fopen($filename, "a");
    fwrite($handle, $linea2);
    fclose($handle);
}





//error_log("===========  POST  ============== ".print_r($_POST, true));
//error_log("===========  GET  ============== ".print_r($_GET, true));
//error_log("===========  REQUEST  ============== ".print_r($_REQUEST, true));
//$entityBody = file_get_contents('php://input');
//error_log("===========  TODO  ============== ".print_r($entityBody, true));