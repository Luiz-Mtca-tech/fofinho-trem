<?php

session_start();


$_SESSION['filtro'] = array();
$valores = array(filter_input(INPUT_GET, 'culinaria'),
                 filter_input(INPUT_GET, 'informatica'),
                 filter_input_array(INPUT_GET, 'historia'),
                 filter_input(INPUT_GET, 'aventura'),
                 filter_input_array(INPUT_GET, 'f.cientifico'),
                 filter_input(INPUT_POST, 'academico'));

print_r($valores);

/*foreach ($valores as $item){
    if ($item != null) {
        array_push($_SESSION['filtro'], $item);
    }
}*/
