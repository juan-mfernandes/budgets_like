<?php   
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $clientName = $_POST['nome_cliente'];
    var_dump($clientName);
    $dateBudget = $_POST['data_budget'];
    $productName = $_POST['nome_produto'];
    $productQuantity = $_POST['quantidade_produto'];
    $productValue = $_POST['valor_produto'];


    $_SESSION['nome_cliente'] = $clientName; 
    $_SESSION['data_budget'] = $dateBudget;

    $products = [
        "name" => $productName,
        "value" => $productValue,
        "quantity" => $productQuantity
    ];

    if(isset($_SESSION['products'])) { 
        array_push($_SESSION["products"], $products);
    } else { 
        $_SESSION['products'] = [$products];
    }
};

    header("Location: add.php");
    exit();
