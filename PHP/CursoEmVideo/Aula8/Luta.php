<?php
/**
 * Created by PhpStorm.
 * User: Xiao Yong Kong
 * Date: 15/03/2018
 * Time: 17:51
 */

require_once 'Lutador.php';

class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($lutador1, $lutador2){
        if ($lutador1->getCategoria() === $lutador2->getCategoria() && ($lutador1 != $lutador2)){
            $this->aprovada = true;
            $this->desafiado = $lutador1;
            $this->desafiante = $lutador2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor){
                case 0:
                    echo "<p> Empatou!!!! </p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>" . $this->desafiado -> getNome() . " ganhou</p>";
                    $this->desafiado->ganharLutar();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>" . $this->desafiante -> getNome() . " ganhou</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLutar();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }


    }

    function getDesafiado(){
        return $this->desafiado;
    }

    function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }
}