<?php
    require('./DAO/bookDAO.php');
    require_once('./models/book.php');

    class homeController{

        public function __construct($method)
        {
            if($method == "GET"){
                $this->index();
            }else if($method == "POST"){
                $this->store();
            }
        }
        public function index()
        {
  
            $book = new bookDAO();
            $books = $book->fetch();
            
            require_once("./views/home.php");
        }

        public function store(){
           $bookdao = new bookDAO();
           $book = new book($_POST["title"],$_POST["author"]);
           $bookdao->insert($book);
           header('Location: /home'); 
        }
    }