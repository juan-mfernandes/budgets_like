<?php   

session_start();

var_dump($_POST); exit();

// $nameClient = $_POST['nome_cliente'];
// $dateBudget = $_POST['date_budget'];
// $productName = $_POST['nome_produto'];
// $productValue = $_POST['valor_produto'];


$pdo->beginTransaction();
        $sql = "INSERT INTO orcamento (id, nome_cliente, date) VALUES (NULL, ?, ?)";
        $statment = $pdo->prepare($sql);
        $statment->bindValue(1, $name, PDO::PARAM_STR);
        $statment->bindValue(2, $date, PDO::PARAM_STR);
        $statment->execute();
        $pdo->commit();
