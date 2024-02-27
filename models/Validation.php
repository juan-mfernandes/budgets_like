<?php 

class Validation {

    //client validate
    public static function validateClient(Client $client) {
        $name = $client->getName();
        if(strlen($name) < 3 || !$name) {
            throw new InvalidArgumentException("O nome precisa ter pelo menos 3 caracteres.");
        }
    }

    //data validate
    public static function validateDate($date) {
        if (!preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $date)) {
            return 0;
        }

        list($month, $day, $year) = explode('-', $date);

        if (!checkdate($month, $day, $year)) {
            return 0;
        }
        
        return 1;
    }

    //product validate
    public static function validateProduct(Product $product) {
        $name = $product->getName();
        if(strlen($name) < 3) {
            throw new InvalidArgumentException("O nome do produto precisa ter ao menos 3 caracteres.");
        }

        $value = $product->getValue();
        if($value <= 0) {
            throw new InvalidArgumentException("O valor do produto precisa ser maior que 0.");
        }
    }

    //budget validate
    public static function validateBudget(Budget $budget) {
        $client = $budget->getClient();
        self::validateClient($client);

        $date = $budget->getDate();
        self::validateDate($date);

        $products = $budget->getProducts();
        foreach ($products as $product) {
            self::validateProduct($product);
        }
    }

};
