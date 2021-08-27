<?php
error_reporting(0);

$host = "127.0.0.1";
$port = 8085;

if (isset($_POST['txtSnd'])) {
    $msg = $_REQUEST['txtMsg'];
    $sock = socket_create(AF_INET, SOCK_STREAM, 0);
    socket_connect($sock, $host, $port);

    socket_write($sock, $msg, strlen($msg));

    $reply = socket_read($sock, 1924);
    $reply = trim($reply);
    $reply = "Admin : \t" . $reply;
}
