<?php
    class Triangulo{
    private $r;
    private $a;
    private $b;
    public function __construct($argBase=0, $argAlt=0){
        $this->b = $argBase;
        $this->a = $argAlt;
    }
    public function getBase(){
        return $this->b;
    }
    public function setBase($argBase){
        $this->b = $argBase;
    }
    public function getAlt(){
        return $this->a;
    }
    public function setAlt($argAlt){
        $this->a = $argAlt;
    }
    public function area(){
        $this->r = ($this->a*$this->b)/2;
    }
    public function imprime(){
        echo "Base: ".$this->a."</br>Altura: ".$this->b."</br>Área: ".$this->r;
    }
    }
?>
