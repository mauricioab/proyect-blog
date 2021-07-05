<?php
//iniciar la sesion 
error_reporting(0);

session_start();
//conexion
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'blog';

$db = mysqli_connect($host,$user,$password,$database);

mysqli_query($db,"SET NAMES 'utf8'");



?>