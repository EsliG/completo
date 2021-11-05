<?php
/* Permitimos a cualquier origen acceder a este API de manera remota */
header('Access-Control-Allow-Origin: *');
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    /* No debe ejecutarse el resto del script mediante la consulta OPTIONS previa */
    die();
}

class conexion
{

    public static function conectar()
    {
        $usuario = 'u182762282_cio';
        $clave = 'Avila1326';
        $server = 'localhost';
        $db = 'u182762282_cio';

        try {
            $conexion = new PDO("mysql:host=$server;dbname=$db", "$usuario", "$clave", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            return $conexion;
        } catch (PDOException $Exception) {
            print("<pre style='font-size: 1.6rem'>" . print_r($Exception, true) . "</pre>");
            echo "Error al conectar con la Base de Datos";
        }

        return $conexion;
    }


    public static function conectar_sqlServer()
    {
        $serverName = "\COMPAC14"; //serverName\instanceName

        $contraseña = '*Svt$Sql';
        $usuario = "ecommerce";
        $nombreBaseDeDatos = "EC_Sanvite";
        # Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
        $rutaServidor = "187.189.193.98";
        try {
            $base_de_datos = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos", $usuario, $contraseña);
            $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo "Ocurrió un error con la base de datos: " . $e->getMessage();
        }
    }


    public static function conectar_sqlServer2()
    {
        $serverName = "\COMPAC14"; //serverName\instanceName
        ini_set('mssql.charset', 'UTF-8');
        $host = "187.189.193.98";
        $username = "ecommerce";
        $password = '*Svt$Sql';
        $database = "EC_Sanvite";

        $con = mssql_connect($host, $username, $password);
        $con = mssql_select_db($database);

        return $con;
    }


    public static function conectar_sqlServer3()
    {
        $serverName = "187.189.193.98\COMPAC14, 1433"; //serverName\instanceName, portNumber (1433 by default)
        $connectionInfo = array("Database" => "EC_Sanvite", "UID" => "ecommerce", "PWD" => '*Svt$Sql');
        $conn = sqlsrv_connect($serverName, $connectionInfo);

        if ($conn) {
            echo "Successfuly connected.<br />";
        } else {
            echo "Connection error.<br />";
            die(print_r(sqlsrv_errors(), true));
        }

        return $con;
    }
}

$conexion = conexion::conectar_sqlServer2();

//print_r($conexion);

$query = "SELECT * FROM Productos";
$result = mssql_query($query);

while ($record = mssql_fetch_array($result, MYSQL_ASSOC)) {
    // ...
    $record['CodigoProducto'] = trim($record['CodigoProducto']);
    $record['NombreProducto'] = trim($record['NombreProducto']);

    $array[] = $record;
}

//print("<pre>".print_r($array, true)."</pre>");

$json = json_encode($array);

//var_dump($array);
//var_dump($json);

echo $json;

exit();
switch (json_last_error()) {
    case JSON_ERROR_NONE:
        echo "No errors";
        break;
    case JSON_ERROR_DEPTH:
        echo "Maximum stack depth exceeded";
        break;
    case JSON_ERROR_STATE_MISMATCH:
        echo "Invalid or malformed JSON";
        break;
    case JSON_ERROR_CTRL_CHAR:
        echo "Control character error";
        break;
    case JSON_ERROR_SYNTAX:
        echo "Syntax error";
        break;
    case JSON_ERROR_UTF8:
        echo "Malformed UTF-8 characters";
        break;
    default:
        echo "Unknown error";
        break;
}
