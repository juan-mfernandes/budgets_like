<?php 

class Connection {
    private string $host = 'localhost';
    private string $dbName = 'budgets';
    private string $user = 'root';
    private string $password = '';
    private PDO $pdo;

    public function __construct(){
        $dsn = "mysql:host={$this->host};dbName={$this->dbName}";
        $this->pdo = new PDO($dsn, $this->user, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getPdo() {
        return $this->pdo;
    }

}