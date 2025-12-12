<?php
function generarPassword() {
    $mayus = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $minus = 'abcdefghijklmnopqrstuvwxyz';
    $nums = '0123456789';
    $especiales = '!@#$%^&*()_+-=';
    $todos = $mayus . $minus . $nums . $especiales;
    $pwd = $mayus[rand(0,25)] . $minus[rand(0,25)] . $nums[rand(0,9)] . $especiales[rand(0,strlen($especiales)-1)];
    for ($i = 4; $i < 12; $i++) {
        $pwd .= $todos[rand(0, strlen($todos)-1)];
    }
    return str_shuffle($pwd);
}
echo generarPassword();
