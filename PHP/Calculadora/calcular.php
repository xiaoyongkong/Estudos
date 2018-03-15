<?php
/**
 * Created by PhpStorm.
 * User: Xiao Yong Kong
 * Date: 23/02/2018
 * Time: 19:52
 */

    require_once 'classes/calculadora.php';

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    echo $operacao = $_POST['operacao'];

    echo '<br>O resultado é: ';


    $calculadora = new calculadora();


    $calculadora -> setNumero1($numero1);
    $calculadora -> setNumero2($numero2);



    switch ($operacao){
        case 'somar':
            $calculadora -> soma();
            break;
        case 'subtrair':
            $calculadora -> subtracao();
            break;
        case 'multiplicar':
            $calculadora -> multiplicacao();
            break;
        case 'dividir':
            $calculadora -> divisao();
            break;
    }

    echo $calculadora -> getResultado();





?>