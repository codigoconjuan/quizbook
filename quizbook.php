<?php
/*
 Plugin Name: Quizbook
 Plugin URI: 
 Description: Plugin para añadir quizes o cuestionarios con WordPress
 Version: 1.0
 Author: Juan Pablo De la torre Valdez
 Author URI: 
 License: GPL2
 License URI: https://www.gnu.org/licences/gpl-2.0.html
 Text Domain: quizbook
*/
if(! defined('ABSPATH')) exit;


/*
* Añade el Post Type de Quizes
*/
require_once plugin_dir_path(__FILE__) . 'includes/posttypes.php';


/*
* Regenera las reglas de las URLS al activar
*/
register_activation_hook(__FILE__, 'quizbook_rewrite_flush');


/*
* Añade Metaboxes a los Quizes
*/
require_once plugin_dir_path(__FILE__) . 'includes/metaboxes.php';

/*
* Añade Roles  a Quizes
*/
require_once plugin_dir_path(__FILE__) . 'includes/roles.php';
register_activation_hook(__FILE__, 'quizbook_crear_role');
register_deactivation_hook(__FILE__, 'quizbook_remover_role');

/*
* Añade Capabilities a Quizes
*/
register_activation_hook(__FILE__, 'quizbook_agregar_capabilities');
register_deactivation_hook(__FILE__, 'quizbook_remover_capabilities');

/*
* Añade un Shortcode
*/
require_once plugin_dir_path(__FILE__) . 'includes/shortcode.php';

/*
* Funciones 
*/
require_once plugin_dir_path(__FILE__) . 'includes/funciones.php';


/*
* Añade Hojas de Estilo y Archivos JavaScript 
*/
require_once plugin_dir_path(__FILE__) . 'includes/scripts.php';


/*
* Da los resultados del Examen
*/
require_once plugin_dir_path(__FILE__) . 'includes/resultados.php';







