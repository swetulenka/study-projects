<?php 
$_POST = json_decode(file_get_contents('php://input'), true);

$path = "../pages/";
$newFile = $path . $_POST["name"] . ".html";
$delFile = $path . $_POST["name"];
$action = $_POST['action'];

switch($action) {
    case 'add':
        if(file_exists($newFile)) {
            header("HTTP/1.0 400 Bad Request");
        } else {
            fopen($newFile, "w");
        }
    break;
    case 'delete':
        if(!file_exists($delFile)) {
            header("HTTP/1.0 400 Bad Request");
        } else {
            unlink($delFile);
        }
    break;
}
