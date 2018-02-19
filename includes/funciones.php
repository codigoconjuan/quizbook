<?php
if(! defined('ABSPATH')) exit;

function quizbook_filtrar_preguntas( $llave ) {
    return strpos($llave, 'qb_');
}

