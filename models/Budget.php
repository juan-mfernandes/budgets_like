<?php 

class Budget {

    private Client $client;
    private string $date;
    private array $products = [];

    public function __construct(Client $client, string $date){
        $this->client = $client;
        $this->date = $date;
    }

    public function addProduct( Product $product ) {
        $this->products[] = $product;
    }

    public function calculeTotal(): float {
        $total = 0;
        foreach($this->products as $product) {
            $total += $product->getValue();
        }
        return $total;
    }

    public function getProducts(): array {
        return $this->products;
    }

    public function getClient(): Client {
        return $this->client;
    }

    public function getDate(): string {
        return $this->date;
    }
}


