<?php
$repoPath = "C:\\xampp\\htdocs\\accessmrg"; // Cambia esto a la ruta de tu repositorio local

if (isset($_POST['update'])) {
    $command = "cd $repoPath && git pull";
    $output = shell_exec($command);

    // Devuelve solo un mensaje corto
    if (strpos($output, 'Already up to date') !== false) {
        echo "No hay cambios, ya está actualizado.";
    } else {
        echo "Repositorio actualizado correctamente.";
    }
}
?>
