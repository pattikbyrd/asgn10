<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare ("select firstName, lastName from personnel");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
}

}