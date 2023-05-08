<?php
//Constantes
//Es un contenedor de información que no puede variar.

define('nombre','Giovanni Romero');
define('web','www.giovanni.com');

echo nombre.'<br>';

echo web.'<br>';

//Definiendo una variable con el mismo nombre que una constante
$web='www.giovanni.com';
echo $web;

//Constantes predefinidas
echo PHP_OS.'<br>';
echo PHP_VERSION.'<br>';
echo PHP_EXTENSION_DIR.'<br>';
echo __LINE__.'<br>';
echo __FILE__.'<br>';
echo __FUNCTION__.'<br>';
echo __CLASS__.'<br>';
?>