<?php
require_once "autoload.php";

$gestor = new Gestor();
//Agregamos 50 productos
for ($i=1;$i<26;$i++){
    $elemento = new Coche($i, "Coche$i", $i*10, 4);
    $gestor->agregar($elemento);
}
for ($i=26;$i<=50;$i++){
    $elemento = new Moto($i, "Moto$i", $i*10, 12);
    $gestor->agregar($elemento);
}

//Actualizamos 2 productos
$gestor->actualizar(10, "nuevoCoche10", 99);
$gestor->actualizar(20, "nuevaMoto20", 99);

//Eliminamos 2 productos
$gestor->eliminar(30);
$gestor->eliminar(40);

//Listamos
$productos = $gestor->listar();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP con POO y Arrays</title>
</head>
<body>

<h2>Listado de Productos</h2>

<?php if (empty($productos)): ?>
    <p>No hay productos aún.</p>
<?php else: ?>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
    </tr>

    <?php foreach ($productos as $p): ?>
    <tr>
        <td><?= $p->getId() ?></td>
        <td><?= $p->getNombre() ?></td>
        <td><?= $p->getPrecio() ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php endif; ?>

</body>
</html>