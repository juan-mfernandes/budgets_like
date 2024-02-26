<?php 

class Product {

    private string $name;
    private float $value;


    public function setName($name): void {
       
       if(strlen($name) <= 2){
            throw new InvalidArgumentException("Nome inválido!");
        }
        $this->name = $name;
    }

    public function setValue($value): void {
        if ($value <= 0 ) {
            echo "Insira um valor válido";
        }
        $this->value = $value;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getValue(): float {
        return $this->value;
    }
};