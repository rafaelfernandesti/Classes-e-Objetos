<?php
    class notas{
        private $r;
        public function __construct($argNota1=0, $argNota2=0, $argNota3=0, $argNota4=0){
            $this->a = $argNota1;
            $this->b = $argNota2;
            $this->c = $argNota3;
            $this->d = $argNota4;
        }
        public function getNota1(){
            return $this->a;
        }
        public function setNota1($argNota1){
            $this->a = $argNota1;
        }
        public function getNota2(){
            return $this->b;
        }
        public function setNota2($argNota2){
            $this->b = $argNota2;
        }
        public function getNota3(){
            return $this->c;
        }
        public function setNota3($argNota3){
            $this->c = $argNota3;
        }
        public function getNota4(){
            return $this->d;
        }
        public function setNota4($argNota4){
            $this->d = $argNota4;
        }
        public function media(){
            $this->r = ($this->a+$this->b+$this->c+$this->d)/4;
            if($this->r >=9){
                echo "Média: MB</br>";
            }else if($this->r >=7 && $this->r<9){
                echo "Média: B</br>";
            }else if($this->r >=5 && $this->r<7){
                echo "Média: R</br>";
            }else if($this->r < 5){
                echo "Média: I</br>";
            }
        }
    }