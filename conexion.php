<?php 
    function obtenerConexion()
    {
        /*Se crea un objeto de conexión se le manda el manejador, la ip, la base de datos .- eso en una sola cadena
        además se manda el usuario y la contraseña y un array el cual es opcionales esto es para el manejo de errores
        los :: hacer referencia a un miembro estatico. */
        return new PDO('mysql:host=127.0.0.1;dbname=test',
        'root','',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }