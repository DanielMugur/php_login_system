<?php
$rows['id']=$_GET['id'];

$sql="DELETE FROM 'my_db.users' WHERE 'id'=" .$rows['id'];
include("../db_conn.php");

$conn->query($sql);

header("location:../home.php");
?>

<!-- No he conseguido que la funcion erase del programa funcione. No se porque no lo hace.
La variable es correcta y el id se meustra claramente con el GET pero no llega a borrar la linea.
Es posible que sea algun efecto secundario o algun elemento que lo impida sin yo saberlo.