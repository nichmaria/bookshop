<?php
class DataBase
{
    private $dbh;
    private $sth;

    public function __construct($dsn, $login, $password)
    {
        $this->dbh = new PDO($dsn, $login, $password);
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM books';
        $this->sth = $this->dbh->prepare($sql);

        try {
            $this->sth->execute();
        } catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
        }

        return $this->sth->fetchAll();
    }

    public function getByID($id)
    {
        $sql = "SELECT * FROM books WHERE id = $id";
        $this->sth = $this->dbh->prepare($sql);

        try {
            $this->sth->execute();
        } catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
        }

        return $this->sth->fetchAll();
    }

    public function orderByPrice()
    {
        $sql = 'SELECT * FROM books ORDER BY price';
        $this->sth = $this->dbh->prepare($sql);

        try {
            $this->sth->execute();
        } catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
        }

        return $this->sth->fetchAll();
    }

    public function save($name, $comment)
    {
        $sql = "INSERT INTO opinions (NAME, COMMENT) VALUES ('$name', '$comment')";
        //echo $sql;
        $this->sth = $this->dbh->prepare($sql);
        try {
            $this->sth->execute();
        } catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
        }
    }
}
