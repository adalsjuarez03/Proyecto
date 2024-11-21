<?php require_once('vista/layout/header.php'); ?>
<br>
<br>
<h1>Lista de paquetes</h1>
<div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Costo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (isset($datos) && !empty($datos)) {
                foreach ($datos as $paquete) {
                    echo "<tr>";
                    echo "<td>" . $paquete['Id_Paquete'] . "</td>";
                    echo "<td>" . $paquete['Nombre'] . "</td>";
                    echo "<td>" . $paquete['Costo'] . "</td>";
                    echo "<td>
                        <a href='index.php?a=editar&id=" . $paquete['Id_Paquete'] . "'>ACTUALIZAR</a> 
                        <a href='index.php?a=eliminar&id=" . $paquete['Id_Paquete'] . "'>ELIMINAR</a>
                    </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay paquetes para mostrar</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php require_once('vista/layout/footer.php'); ?>
