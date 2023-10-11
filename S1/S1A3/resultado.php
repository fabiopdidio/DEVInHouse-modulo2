<?php 
    $peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT); // filter_input só permite o tipo de variável específico.
    $distancia = filter_input(INPUT_POST, 'distancia', FILTER_VALIDATE_FLOAT);

    $resultado = $peso * 0.8 + $distancia * 0.2;

    echo "O valor do frete é $resultado";
?>