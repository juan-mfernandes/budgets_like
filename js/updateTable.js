function addProductTable(name, quantity, value) {
    let table = document.getElementById("products-table");
    let newLine = table.insertRow();


    let nameCell = newLine.insertCell(0);
    let quantityCell = newLine.insertCell(1);
    let valueCell = newLine.insertCell(2);

    // assigning values ​​to cells
    nameCell.textContent = name;
    quantityCell.textContent = quantity;
    valueCell.textContent = parseFloat(value).toFixed(2);    
    
    calculeTotal();

};

function addProduct() {

    let clientName = document.getElementById("nome_cliente").value;
    let data = document.getElementById("data_budget").value;
    let productName = document.getElementById("nome_produto").value;
    let quantity = document.getElementById("quantidade_produto").value;
    let value = document.getElementById("valor_produto").value;

    if(!data || !clientName || !productName || value <= 0 || quantity <= 0) {
        alert('Preencha todos os campos corretamente.');
        return;
    };

    let tableRows =  document.querySelectorAll("#products-table tr:not(:first-child)");
    console.log(tableRows)
    for (let i = 0; i < tableRows.length; i++) {
        let nameCell = tableRows[i].cells[0];
        console.log(nameCell);
        if (nameCell.textContent === productName) {
            alert("Este produto ja foi cadastrado!");
            return;
        };
    };
    addProductTable(productName, quantity, value);

};

function calculeTotal() {
    let totalItems = 0;
    let totalValue = 0;
    let tableRows =  document.querySelectorAll("#products-table tr:not(:first-child)");

    tableRows.forEach(function(row) {
        let quantity = parseInt(row.cells[1].textContent);
        let value = parseFloat(row.cells[2].textContent);
        totalItems += quantity;
        totalValue += quantity * value;
    });


    document.getElementById('totalItems').textContent = 'Total de Itens: ' + totalItems;
    document.getElementById('totalValue').textContent = 'Valor Total: R$ ' + totalValue.toFixed(2);
};

//event listener to add new item
// document.getElementById("addButton").addEventListener('click', addProduct, calculeTotal);