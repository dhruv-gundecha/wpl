<?php
session_start();
$conn = mysqli_connect('localhost','root','','test');
if (!$conn) {
    echo 'Connection Failed';
}
?>