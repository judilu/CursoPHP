<?php
    $objeto = new stdClass();
   
    $objeto->nombre  = "Judith";
    $objeto->apellido = "Moreno";
    $objeto->direccion = new stdClass();
    $objeto->direccion->calle = "Alvaro Obregón";
    $objeto->direccion->numeroExt = 123;
    $objeto->direccion->colonia = "Centro";
    $objeto->telefonos = array();
    $objeto->telefonos[] = "6671895623";
    $objeto->telefonos[] = "6671326598";  
    //$objeto->telefonos = ["6677895623","6671326598"];
   
    //codifica a json un stdClass
    echo json_encode($objeto);