CREATE DATABASE budgets;
USE budgets;

CREATE TABLE IF NOT EXISTS orcamento (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome_cliente VARCHAR(45) NOT NULL,
	data DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS produtoOrcamento (
	id INT PRIMARY KEY AUTO_INCREMENT,
	orcamento_id INT NOT NULL,
	nome VARCHAR(45) NOT NULL,
	valor DECIMAL(10,2) NOT NULL,
	FOREIGN KEY (orcamento_id) REFERENCES orcamento(id)
);