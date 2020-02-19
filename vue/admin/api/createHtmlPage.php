<?php 
$action = $_POST['action'];

$path = "../pages/";
$newFile = $path . $_POST["name"] . ".html";
$delFile = $path . $_POST["file"];

switch($action) {
    case 'add':
        if(file_exists($newFile)) {
            header("HTTP/1.0 400 Bad Request");
        } else {
            fopen($newFile, "w");
        }
    break;
    case 'del':
        if(!file_exists($delFile)) {
            header("HTTP/1.0 400 Bad Request");
        } else {
            unlink($delFile);
        }
    break;
}
