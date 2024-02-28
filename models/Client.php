<?php 

class Client {
    private string $name;

    public function setName(string $name): void {
        if (strlen($name) <= 2) {
            throw new InvalidArgumentException("O nome precisa ter ao menos 3 caracteres.");
        }
        if (preg_match('/[0-9]/', $name) == true) {
            throw new InvalidArgumentException("O nome não pode conter números.");
        }

        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

}