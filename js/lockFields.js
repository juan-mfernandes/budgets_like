let formBudget = document.getElementById("form-budget");

formBudget.addEventListener("submit", (e) => {
    // no reload page
    e.preventDefault();

    document.getElementById("nome_cliente").disabled = true;
    document.getElementById("data_budget").disabled = true;
   
});