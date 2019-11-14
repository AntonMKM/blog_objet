<?php

class Connect {

    //put your code here
    protected $pdo;

    public function Connect() {
        $this->pdo = new PDO
                ('mysql:host=localhost;dbname=blog_objet', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
        );

        $this->pdo->exec("SET NAMES UTF8");
        return $this->pdo;
    }

}
