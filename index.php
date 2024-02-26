<?php 

// require_once('../models/Client.php');
// require_once('../models/Product.php');
// require_once('../models/Budget.php');

// const client1 = new Client();
// client1->setName('Ana');
// client1->setPhone('151516');

// $product1 = new Product();
// $product1->setName('s22');
// $product1->setValue(150.00);

// $product2 = new Product();
// $product2->setName('s23');
// $product2->setValue(250.00);

// $product3 = new Product();
// $product3->setName('s24');
// $product3->setValue(250.00);

// const budget1 = new Budget(client1, '2023-02-02');
// budget1->addProduct($product2);
// budget1->addProduct($product1);
// budget1->addProduct($product3);
// echo 'Produtos Orçados: ' . '<br>Total da conta: ' . 'R$' . budget1->calculeTotal();
// var_dump(budget1->getProducts());
?>


<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="text/javascript" src="./js/updateTable.js" defer></script>
    <script type="text/javascript" src="./js/lockFields.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Budgets</title>
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid d-flex align-items-center justify-content-center">
    <span class="navbar-brand mb-0 h1 fs-1">Cadastro de Orçamentos</span>
  </div>
</nav>
    <main class="container">
        <form id="form-budget" action="./src/budgetRepository.php" method="post" >
            <div class="form-group row mt-5">
                <div class="col-5">
                    <label for="nome_cliente" class="form-label mb-0">Nome do Cliente</label>
                    <input 
                        type="text" 
                        name="nome_cliente" 
                        id="nome_cliente" 
                        class="form-control mb-2"
                        required
                        minlength="3"
                        placeholder="Nome"
                        autocomplete="off"
                        oninvalid="this.setCustomValidity('Por favor, preencha este campo vazio.')"
                    />
                </div>                
            </div>
            <div class="form-group col-5 me-3 pe-3">
                <label for="data_budget" class="form-label mb-0">Data do orçamento</label>
                <input 
                    type="date" 
                    name="data_budget" 
                    id="data_budget" 
                    class="form-control mb-2"
                    required
                    autocomplete="off"
                    min="<?php echo date('Y-m-d'); ?>"
                    oninvalid="this.setCustomValidity('Insira uma data valida.')"
                />
            </div>
            <div class="form-group row">
                <div class="col-5">
                    <label for="nome_produto" class="form-label mb-0">Nome do produto</label>
                    <input 
                        type="text" 
                        name="nome_produto" 
                        id="nome_produto" 
                        class="form-control mb-2"
                        required
                        minlength="3"
                        placeholder="Nome"
                        autocomplete="off"
                    />
                </div>
                <div class="form-group col p-0">
                    <div class="col-13">
                        <label for="quantidade_produto" class="form-label mb-0">Quantidade</label>
                        <input 
                            type="number"
                            step="1"
                            min="0" 
                            name="quantidade_produto" 
                            id="quantidade_produto" 
                            class="form-control mb-2"
                            required
                            placeholder="Quantidade"
                            autocomplete="off"
                        />
                    </div>
                </div>
                <div class="form-group col">
                    <div class="col-13">
                        <label for="valor_produto" class="form-label mb-0">Valor do produto</label>
                        <input 
                            type="number"
                            min="0"
                            step="any"
                            name="valor_produto" 
                            id="valor_produto" 
                            class="form-control"
                            required
                            minlength="3"
                            placeholder="Valor"
                            autocomplete="off"
                        />
                    </div>
                </div>
                <button type="submit" id="addButton" class="btn btn-success col-2 mt-4 mb-5">Adicionar</button>
            </div>
        </form>
        <div id="rf" class="table-responsive">
            <table id="products-table" class="table mt-2">
                <thead>
                    <tr>
                        <th scope="col">Lista de Produtos</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <!--function addProductTable-->
                </tbody>
            </table>
            <div id="totalItems"></div>
            <div id="totalValue"></div>
        </div>
        <form action="./src/budgetRepository.php" method="post">
            <button type="submit" class="btn btn-success mt-5 col-2 float-end">Salvar orçamento</button>
        </form>
    </main>
</body>
</html>

 