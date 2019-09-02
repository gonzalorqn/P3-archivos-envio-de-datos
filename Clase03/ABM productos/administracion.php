<?php
require "clases/producto.php";
    $op = $_POST["op"];
    $nombre = $_POST["nombre"];
    $cod_barra = $_POST["codigo"];
    switch($op)
    {
        case "ALTA":
            $p = new Producto($nombre,$cod_barra);
            if(Producto::Guardar($p))
            {
                echo("Se guardo el producto correctamente");
            }
            else
            {
                echo("No se pudo guardar");
            }
    }