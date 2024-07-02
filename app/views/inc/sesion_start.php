
<?php
// Definir el nombre de la sesión
nombre_session(APP_SESSION_NAME);

// Iniciar la sesión solo si no ha sido iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Definición de funciones
function nombre_session($nombre) {
    session_name($nombre);
}