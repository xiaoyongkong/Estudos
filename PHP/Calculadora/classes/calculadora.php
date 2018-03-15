<?php
/**
 * Created by PhpStorm.
 * User: Xiao Yong Kong
 * Date: 23/02/2018
 * Time: 20:58
 */

class calculadora{

    private $resultado;
    private $numero1;
    private $numero2;

    function _construct(){
        $this -> $resultado = 0;
        $this -> $numero1 = 0;
        $this -> $numero2 = 0;
    }


    public function setNumero1($primeiroNumero){
        $this->numero1 = $primeiroNumero;
    }


    public function setNumero2($segundoNumero){
        $this -> numero2 = $segundoNumero;
    }

    public function getResultado(){
        return $this -> resultado;
    }

    public function soma(){
        $this -> resultado = $this -> numero1 + $this -> numero2;
    }

    public function subtracao(){
        $this -> resultado = $this -> numero1 - $this -> numero2;
    }

    public function multiplicacao(){
        $this -> resultado = $this -> numero1 * $this -> numero2;
    }

    public function divisao(){
        $this -> resultado = $this -> numero1 / $this -> numero2;
    }

}

?>