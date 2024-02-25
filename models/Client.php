<?php 

class Client {
    private string $name;

    public function setName(string $name): void {
        if (strlen($name) <= 2) {
            throw new InvalidArgumentException("O nome precisa ter ao menos 3 caracteres.");
        }
        $this->name = $name;
    }

    // public function setPhone($phone): void {
    //     if(!ctype_digit($phone) || strlen($phone) < 6) {
    //         throw new InvalidArgumentException("Numero de telefone invalido.");
    //     }
    //     $this->phone = $phone;
    // }

    // public function getPhone(): string {
    //     return $this->phone;
    // }

    public function getName(): string {
        return $this->name;
    }

}