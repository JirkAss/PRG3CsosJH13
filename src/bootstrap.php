<?php
ini_set( 'mbstring.func_overload' , 3 );
mb_internal_encoding( 'utf-8' );
mb_http_output( 'utf-8' );
date_default_timezone_set( "Europe/Prague" );

/* Teorie - Jirka */
/* Tady by se měla použít funkce autoload, která requireuje třídy. Bootstrap je "naindludovaný" v indexu */


/* Načítá třídy buď z modelů, nebo controllerů */
function __autoload($class_name) {
    if ((mb_strlen($class_name) >= mb_strlen("controller")) && (mb_strpos($class_name, "controller", mb_strlen($class_name) - mb_strlen("controller"))) !== false)
        require("controller/" . $class_name . ".php");
    else
        require("model/" . $class_name . ".php");               
}
