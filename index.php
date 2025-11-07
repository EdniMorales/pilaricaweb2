<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'autoload.php';
require_once 'config/parameters.php';

ob_start();

// Redirige si no hay controlador ni acción
if (!isset($_GET['controller']) && !isset($_GET['action'])) {
    header('Location: ' . base_url . 'Principal/index');
    exit();
}

// se coloca aqui por que si no no redirige
//require 'views/layout/head.php';  // cabecera de la pagina

function show_error(){
    // Incluye las vistas SOLAMENTE para la página de error
    require_once __DIR__ . '/views/layout/head.php';
    $error = new ErrorController();
    $error->index();
    require_once __DIR__ . '/views/layout/footer.php';

    // Detener la ejecucion
    exit();
}

function show_error_p(){
    // Limpia y borra todo el contenido capturado (incluyendo la potencial salida de cualquier vista)
    //Limpieza de buffer (Borra todo el contenido HTML previo que se haya capturado)
    if (ob_get_level() > 0) {
        ob_clean();
    }
    
    // Opcional: Establece el código de estado 500
    header('HTTP/1.1 500 Internal Server Error');

    $action_default = action_default; // Poner un controlador en la pagina
    require_once __DIR__ . '/views/layout/head.php';  // cabecera de la pagina

    // Incluye las vistas SOLAMENTE para la página de error
    $error = new ErrorController();
    $error->update();

    require_once 'views/layout/footer.php'; // Pie de pagina
    
    // si hay algo en la cabecera cerrar el buffer
    if (ob_get_level() > 0) {
        ob_end_flush(); // Cierra el búfer y envía todo el contenido capturado (Head, Error, Footer).
    }

    // Detener la ejecucion
    exit();
}

if(isset($_GET['controller'])){
    $nombreControlador = ucfirst($_GET['controller']).'Controller';
    
}elseif(!isset($_GET['controller'])  && !isset($_GET['action'])){
    $nombreControlador = controller_default;
}else{
    show_error();
    exit();
}
// comprobar si existe un controlador
if(class_exists($nombreControlador)){
    $controlador = new $nombreControlador();
    
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        require 'views/layout/head.php';  // cabecera de la pagina
        $controlador->$action();
    }elseif(!isset($_GET['controller'])  && !isset($_GET['action'])){
        $action_default = action_default;
        require 'views/layout/head.php';  // cabecera de la pagina
        $controlador->$action_default();
    }else{
        show_error();
    }
}else{
    show_error();
}

require_once 'views/layout/footer.php';

ob_end_flush();
?>