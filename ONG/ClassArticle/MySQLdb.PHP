<?php

function getDBCon()
{
  return new PDO('mysql:host=localhost;dbname=Articulos', 'root', '');
}
 ?>
