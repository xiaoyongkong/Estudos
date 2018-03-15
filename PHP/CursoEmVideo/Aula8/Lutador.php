<?php
/**
 * Created by PhpStorm.
 * User: Xiao Yong Kong
 * Date: 14/03/2018
 * Time: 22:52
 */

class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    function apresentar(){
        echo " <p>-----------------------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador </p>" . $this->getNome();
        echo "veio diretamente de " . $this->getNacionalidade();
        echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "Kg ";
        echo "<br>Ele tem " . $this->getVitorias() . "vitórias, ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates . </p>";
    }

    function status(){
        echo " <p>-----------------------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes, ";
        echo " perdeu " . $this->getDerrotas() . " vezes e ";
        echo " empatou " . $this -> getEmpates() . " vezes!";
    }

    function ganharLutar(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getNacionalidade(){
        return $this->nacionalidade;
    }

    function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    function getIdade(){
        return $this->idade;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }

    function getAltura(){
        return $this->altura;
    }

    function setAltura($altura){
        $this->altura = $altura;
    }

    function getPeso(){
        return $this->peso;
    }

    function setPeso($peso){
        $this->peso = $peso;
    }

    function getCategoria(){
        return $this->categoria;
    }

    function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    function getVitorias(){
        return $this->categoria;
    }

    function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    function getDerrotas(){
        return $this->vitorias;
    }

    function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }

    function getEmpates(){
        return $this->empates;
    }

    function setEmpates($empates){
        $this->empates = $empates;
    }
}