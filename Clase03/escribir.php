<?php
    $path = "Saludo.txt";
    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    $file = fopen($path,"a");
    fwrite($file,"Hola mundo\r\n");
    fwrite($file,$nombre."\r\n");
    fwrite($file,$apellido."\r\n");
    fclose($file);