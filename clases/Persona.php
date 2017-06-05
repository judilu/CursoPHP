<?php

    /*
        * Clase persona 
        una clase abstract no se puede instanciar
     */
    abstract class Persona
    {
        public $nombre;
        public $apellido;
        public $edad;
        function __construct()
        {
            $this->nombre = '';
            $this->apellido = '';
            $this->edad = 0;
        }

    }
    