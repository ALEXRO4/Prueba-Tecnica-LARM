<?php
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

$consulta_sql = "SELECT * FROM user";

$resultado = $conexion->query($consulta_sql);

$count = mysqli_num_rows($resultado);

echo "<table border='2'>
    <tr>
        <th>Nombre</th>
        <th>APaterno</th>
        <th>AMaterno</th>
        <th>Dirección</th>
        <th>Email</th>
        <th>Acciones</th>
        
    </tr>";

if ($count > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['apaterno'] . "</td>";
        echo "<td>" . $row['amaterno'] . "</td>";

        $direccion = $row['calle'] . " " . $row['numero'] . ", " . $row['cp'] . ", " . $row['municipio'] . ", " . $row['estado'];
        echo "<td>" . $direccion . "</td>";

        echo "<td>" . $row['email'] . "</td>";
        
        echo "<td>
            <a href='actualizarUsuario.php?id=" . $row['id'] . "' class='btn waves-effect waves-light'>
                Actualizar <i class='material-icons right'>border_color</i>
            </a>
        </td>";
       
    }
    echo "</table>";
} else {
    echo "<h1 style='color:red'>Sin Ningún registro</h1>";
}

?>
