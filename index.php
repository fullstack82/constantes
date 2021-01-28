<?php


// Constantes
// Es un contenedor de información que no puede variar 


// Como se define una constante;

define('nombre', 'María');
define('web', 'master');


echo nombre; // Una constante se muestra sin el simbolo $, solo el nombre de la constante;
echo '<h1>'.web.'</h1>'; // Una constante concatenada;


// Constantes predefinidas

// echo PHP_OS;     // Nos mostraria el sistema operativo que estamos usando;

// echo PHP_VERSION;    // Nos mostrara el numero de la version de PHP;

// echo PHP_EXTENSION_DIR; // Nos muestra donde estan las extensiones aqui instaladas;

// echo __LINE__ ;  // Nos muestra el numero de linea donde estamos imprimiendo este valor;

// echo __FILE__ ;    // Nos muestra la ruta directa de este archivo ;

// echo __FUNCTION__ ;    // Nos muestra el nombre de la función que estamos usando;

