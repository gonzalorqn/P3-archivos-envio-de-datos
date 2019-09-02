<?php
    $path = "Saludo.txt";
    $file = fopen($path,"r");
    while(!feof($file))
    {
        $lectura = fgets($file);
        echo($lectura . "<br>");
    }
    fclose($file);