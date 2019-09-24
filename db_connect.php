<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("falha com à conncecção à base de dados." . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'login');
if (!$select_db){
    die("Falha ao seleccionar a base de dados." . mysqli_error($connection));
}

