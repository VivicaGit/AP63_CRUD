<?php
require_once "autoload.php";

$gestor = new GestorProtectora();
//Agregamos 50 animales
for ($i=1;$i<26;$i++){
    $animal = new Mamifero($i, "mam$i", $i*10, 4);
    $gestor->agregar($animal);
}
for ($i=26;$i<=50;$i++){
    $animal = new Reptil($i, "rep$i", $i*10, 12);
    $gestor->agregar($animal);
}


//Actualizamos 2 animales
$gestor->actualizar(10, "nuevoAnimal10", 99);
$gestor->actualizar(20, "nuevoAnimal20", 99);

//Eliminamos 2 animales
if ($gestor->eliminar(30)==true){
    echo "Animal eliminado correctamente";
}else{
    echo "No se ha podido eliminar el Animal";
}

$gestor->eliminar(40);

//Listamos
$animal = $gestor->listar();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP con POO y Arrays</title>
</head>
<body>

<!-- LISTADO -->
<h2>Listado de Animales</h2>

<?php if (empty($animal)): ?>
    <p>No hay animales aún.</p>
<?php else: ?>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Edad</th>
    </tr>

    <?php foreach ($animal as $p): ?>
    <tr>
        <td><?= $p->getId() ?></td>
        <td><?= $p->getNombre() ?></td>
        <td><?= $p->getEdad() ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php endif; ?>

</body>
</html>
