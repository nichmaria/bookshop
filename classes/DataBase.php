<?php
class DataBase
{
    private $dbh;
    private $sth;

    public function __construct(string $dsn, string $login, string $password)
    {
        $this->dbh = new PDO($dsn, $login, $password);
    }

    public function getAll(): array
    {
        $sql = 'SELECT * FROM books';
        $this->sth = $this->dbh->prepare($sql);

        try {
            $this->sth->execute();
        } catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
        }

        return $this->sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getFeedback(int $id): array
    {
        $sql = "SELECT feedback.name, feedback.opinion 
        FROM books INNER JOIN feedback  
           ON books.id = feedback.bookid
           WHERE books.id = $id";
        $this->sth = $this->dbh->prepare($sql);

        try {
            $this->sth->execute();
        } catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
        }

        return $this->sth->fetchAll(PDO::FETCH_ASSOC);
    }
}
