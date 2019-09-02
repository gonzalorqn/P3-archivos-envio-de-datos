<?php
    class Producto
    {
        private $nombre;
        private $cod_barra;

        public function __construct(string $n = null,string $c = null)
        {
            if($n != null)
            {
                $this->nombre = $n;
            }
            if($c != null)
            {
                $this->cod_barra = $c;
            }
        }

        public function ToString()
        {
            if($this->nombre == null || $this->cod_barra == null)
            {
                return null;
            }
            else
            {
                return $this->cod_barra . " - " . $this->nombre . "\r\n";
            }
        }

        public static function Guardar(Producto $obj)
        {
            $retorno = false;
            $path = "./archivos/productos.txt";
            $file = fopen($path,"a");
            $int = fwrite($file,$obj->ToString());
            fclose($file);
            if($int > 0)
            {
                $retorno = true;
            }
            return $retorno;
        }

        public static function TraerTodosLosProductos()
        {
            $productos;
            $path = "./archivos/productos.txt";
            $file = fopen($path,"r");
            while(!feof($file))
            {
                $cadena = fgets($file);
                $array = explode(" - ",$cadena);
                array_push($productos,new Producto($array[1],$array[0]));
            }
        }
    }