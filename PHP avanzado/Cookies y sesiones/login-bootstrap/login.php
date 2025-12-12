<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['usuario'] == 'admin' && $_POST['password'] = '1234') {
        echo "Usuario correcto. IP:".$_SERVER['REMOTE_ADDR'];
    } else {
        echo "Usuario incorrecto";
    }
}