<?php
include_once("MySQLdb.PHP");
//Cambiar el nombre de la base de datos, usuario y clave
$pdo = getDBCon();

    
// (1) Definir SQL

$comando = $pdo->prepare("select * from articulos where id = :Id");
// (2) Asignar valores a los parametros.

$Id = 1;
$comando->bindParam(':Id', $id);

// (3) Ejecutar SQL
$comando->execute();

// (4) Recuperar información
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

// Imprimir en pantalla
var_dump($resultado);


 ?>

