<?php
    $servername = 'sql204.infinityfree.com';
    $username = 'if0_41899308';
    $pass = 'Saab20202020';
    $dbname = 'if0_41899308_katalog';

    $conn = mysqli_connect($servername, $username, $pass, $dbname);
    mysqli_set_charset($conn, 'utf8mb4');
    if (mysqli_connect_errno()) {
        echo 'Помилка підключення до бази даних ('.mysqli_connect_error().'):'.mysqli_connect_error();
        exit();

    }