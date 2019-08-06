<?php
    require_once("./DAO/DAO.php");
    class bookDAO
    {
        private $con;

        public function __construct()
        {
            try{
                $this->con = new PDO("mysql:host=localhost;dbname=livraria","root","");
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        public function insert($book)
        {
            $stmt = $this->con->prepare("INSERT INTO livro(titulo, autor)VALUES(:titulo,:autor)");
            $stmt->bindValue(":titulo",$book->getTitulo());
            $stmt->bindValue(":autor",$book->getAutor());
            $stmt->execute();

        }

        public function fetch()
        {
            $stmt = $this->con->prepare("SELECT * FROM livro");
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }