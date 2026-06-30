<?php
// IMPORTANTE: Este script necesita permisos de administrador
// y que el usuario de Apache (por ejemplo, SYSTEM en Windows) pueda ejecutar shutdown.

$comando = "shutdown /s /t 0"; // Apagar inmediatamente
exec($comando, $output, $result);

if ($result === 0) {
    echo "La computadora se está apagando...";
} else {
    echo "Error al intentar apagar la computadora.";
}
?>
