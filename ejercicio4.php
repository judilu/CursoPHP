<?php
    /*
        Realizar las operaciones de lectura, actualización y borrado sobre la siguiente tabla cat_clientes
        Borrado, lectura y actualizado
    */
    require './conexion.php';

    function altaCliente($cliente)
    {
         $db = obtenerConexion();
        /* EOD me permite poner texto en multiples lineas yo puedo ponerle el nombre que yo quiera en vez de EOD Apartir
        del primer EDO no debe haber ningun caracter despues 
        y el EOD final debe estar hasta la horilla y no debe tener nada despues del ;
        si una función recibe más de 3 parametros enviarlo por un STDclass*/
        $query = <<<EOD
            INSERT INTO cat_clientes (nom_cliente, nom_apellido, num_tipocredito)
            VALUES (:nombre, :apellido, :tipo);

EOD;

        $statement = $db->prepare($query);
        /*nombre del parametro que le puse en la instrucción, el valor, y el tipo de parametro
        Esto nos permite evitar la inyección de código el tipo de parametro es opcional y si no le mando nada
        toma por default el param-string
        */
        $statement->bindValue('nombre',$cliente->nombre, PDO::PARAM_STR);
        $statement->bindValue('apellido',$cliente->apellido, PDO::PARAM_STR);
        $statement->bindValue('tipo',$cliente->tipoCredito, PDO::PARAM_INT);
        
        $statement->execute();

        return $statement->rowCount() > 0;
    }

    function bajaCliente($cliente)
    {
        $db = obtenerConexion();

        $query = <<<EOD
            DELETE FROM cat_clientes
            WHERE idu_cliente = :idCte;
EOD;

        $statement = $db->prepare($query);

        $statement->bindValue('idCte',$cliente->idu_cliente, PDO::PARAM_INT);

        $statement->execute();

        return $statement->rowCount() > 0;
    }

    function actualizarCliente($cliente)
    {
        $db = obtenerConexion();

        $query = <<<EOD
            UPDATE cat_clientes SET nom_cliente = :nombre, nom_apellido = :apellido
            WHERE idu_cliente = :idCte;
EOD;

        $statement = $db->prepare($query);

        $statement->bindValue('nombre',$cliente->nombre, PDO::PARAM_STR);
        $statement->bindValue('apellido',$cliente->apellido, PDO::PARAM_STR);
        $statement->bindValue('idCte',$cliente->idu_cliente, PDO::PARAM_INT);
        
        $statement->execute();

        return $statement->rowCount() > 0;
    }

    function mostrarClientes()
    {
         $db = obtenerConexion();

        $query = <<<EOD
            SELECT  idu_cliente AS iduCliente,
                    nom_cliente as nombre,
                    nom_apellido as apellido,
                    num_tipoCredito as tipoCredito
            FROM    cat_clientes;
EOD;

        $statement = $db->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /*
        ALTA
    $cliente = new stdClass();
    $cliente->nombre = 'Jose';
    $cliente->apellido = 'Lopez';
    $cliente->tipoCredito = 2;

    var_dump(altaCliente($cliente)); */

    /* BAJA 

    $cliente = new stdClass();
    $cliente->idu_cliente = 5;
    $cliente->nombre = 'Jose';
    $cliente->apellido = 'Lopez';
    $cliente->tipoCredito = 2;

    var_dump(bajaCliente($cliente)); */

    /* MODIFICACION */

    $cliente = new stdClass();
    $cliente->idu_cliente = 1;
    $cliente->nombre = 'Judi';
    $cliente->apellido = 'Zazueta';
    $cliente->tipoCredito = 2;

    var_dump(actualizarCliente($cliente));

   /* echo (json_encode(mostrarClientes())); */