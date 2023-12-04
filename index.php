<?php
// Obtén la versión de Apache
$apacheVersion = apache_get_version();

// Obtén la versión de PHP
$phpVersion = phpversion();

// Imprime la información
echo "Versión de Apache: $apacheVersion<br>";
echo "Versión de PHP: $phpVersion";
?>
