<?php
    
    require_once './clases/Persona.php';

    //final se bloquea para  que nadie pueda herredar de ella.
    final class Cliente extends Persona
    {

        private $numero;
        public $fechaAlta;

        function __construct() 
        {
            $this->numero = 0;
            $this->fechaAlta = new DateTime();
        }

        // Se utiliza por que es private y no es publico desde afuera
        public function setNumero($numero)
        {
            $this->numero = $numero;
        }

        public function getNumero()
        {
            return $this->numero;
        }

        public function imprimir()
        {
            $salida = '';
            $salida .= "Numero: {$this->numero} <br>";
            $salida .= "Nombre: {$this->nombre} <br>";
            $salida .= "Apellido: {$this->apellido} <br>";
            $salida .= "Edad: {$this->edad} <br>";
            $salida .= "Fecha de Alta: " . 
                        $this->fechaAlta->format('Y-m-d') . "<br>";

            echo $salida;

        }
    }
