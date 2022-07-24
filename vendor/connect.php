<?php

    //mysqli_connect

    $connect = mysqli_connect('localhost', 'root', 'root', 'registracion');

    if (!$connect) {
        die('ERROR connect to DataBase');
    }