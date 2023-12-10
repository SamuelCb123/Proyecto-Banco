<?php
include('conexion.php');
include('consultaniciarsesion.php');

$tipodemovimiento = $_POST['tipodemovimiento'];
$cantidad = $_POST['cantidad'];


$consulta_saldo = "SELECT COALESCE(SUM(cantidad), 0) AS saldo_actual FROM ingresos_retiros WHERE id_usuario = ?";
$stmt_saldo = mysqli_prepare($conexion, $consulta_saldo);
mysqli_stmt_bind_param($stmt_saldo, 'i', $_SESSION['id_usuario']);
mysqli_stmt_execute($stmt_saldo);
$resultado_saldo = mysqli_stmt_get_result($stmt_saldo);
$saldo_actual = ($row = mysqli_fetch_assoc($resultado_saldo)) ? $row['saldo_actual'] : 0;
mysqli_stmt_close($stmt_saldo);


if ($tipodemovimiento == 'Retirar' && $saldo_actual == 0) {
    echo "Error: No puedes retirar más dinero. El saldo actual es 0.";
    exit(); 
}

if ($tipodemovimiento == 'Ingresar') {
    $nuevo_saldo = $saldo_actual + $cantidad;
    $saldo_retiro = 0; 
} elseif ($tipodemovimiento == 'Retirar') {
    if ($cantidad <= $saldo_actual) {
        $nuevo_saldo = $saldo_actual - $cantidad;
        $saldo_retiro = $cantidad; 
    } else {
        echo "Error: Saldo insuficiente.";
        exit(); 
    }
} else {
    echo "Error: Tipo de movimiento no válido.";
    exit(); 
}

$consulta_movimiento = "INSERT INTO ingresos_retiros (cantidad, fecha_movimiento, id_usuario, id_admin, tipo_movimiento, saldo_retiro) VALUES (?, NOW(), ?, ?, ?, ?)";
$stmt_movimiento = mysqli_prepare($conexion, $consulta_movimiento);
mysqli_stmt_bind_param($stmt_movimiento, 'dissd', $cantidad, $_SESSION['id_usuario'], $id_admin, $tipodemovimiento, $saldo_retiro);
mysqli_stmt_execute($stmt_movimiento);
mysqli_stmt_close($stmt_movimiento);


$consulta_actualizar_saldo = "UPDATE ingresos_retiros SET saldo_actual = ? WHERE id_usuario = ?";
$stmt_actualizar_saldo = mysqli_prepare($conexion, $consulta_actualizar_saldo);
mysqli_stmt_bind_param($stmt_actualizar_saldo, 'di', $nuevo_saldo, $_SESSION['id_usuario']);
mysqli_stmt_execute($stmt_actualizar_saldo);
mysqli_stmt_close($stmt_actualizar_saldo);


$consulta_transacciones = "SELECT cantidad, fecha_movimiento, saldo_retiro FROM ingresos_retiros WHERE id_usuario = ? ORDER BY fecha_movimiento DESC";
$stmt_transacciones = mysqli_prepare($conexion, $consulta_transacciones);
mysqli_stmt_bind_param($stmt_transacciones, 'i', $_SESSION['id_usuario']);
mysqli_stmt_execute($stmt_transacciones);
$resultado_transacciones = mysqli_stmt_get_result($stmt_transacciones);
mysqli_stmt_close($stmt_transacciones);

echo "<table border='1'>
        <tr>
            <th>Fecha de Movimiento</th>
            <th>Cantidad</th>
            <th>Saldo Retirado</th>
        </tr>";

while ($row_transaccion = mysqli_fetch_assoc($resultado_transacciones)) {
    echo "<tr>
            <td>{$row_transaccion['fecha_movimiento']}</td>
            <td>{$row_transaccion['cantidad']}</td>
            <td>{$row_transaccion['saldo_retiro']}</td>
          </tr>";
}

echo "</table>";

echo "<p>Operación realizada con éxito. ID del Usuario: {$_SESSION['id_usuario']}, Nuevo saldo: $nuevo_saldo</p>";
$_SESSION['nuevo_saldo'] = $nuevo_saldo;
?>

