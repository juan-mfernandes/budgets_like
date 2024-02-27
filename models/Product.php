<?php

class Product {

    private string $name;
    private float $value;
    private int $quantity;


    public function setName($name): void {
       
       if(strlen($name) <= 2 || preg_match('/^[0-9]+$/', $name)){
            throw new InvalidArgumentException("Nome inválido!");
        }
        
        $this->name = $name;
    }

    public function setValue($value): void {
        if ($value <= 0 ) {
            throw new InvalidArgumentException("O valor precisa ser maior que 0.");
        }
        $this->value = $value;
    }

    public function setQuantity($quantity): void {
        if ($quantity <= 0) {
            throw new InvalidArgumentException("A qunatidade precisa ser maior que 0.");
        }
        $this->quantity = $quantity;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getValue(): float {
        return $this->value;
    }
};