<?php

class Login
{
    private $usuario;
    private $senha;

    public function __construct($usuario, $senha)
    {
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    public function logar()
    {
        $dsn = 'mysql:host=localhost;dbname=loginsystem;charset=utf8mb4';
        $db_user = 'root';
        $db_pass = 'root';
        $db = new PDO ($dsn, $db_user, $db_pass);

        $query =$db->prepare('SELECT * FROM users WHERE user_uid = :usuario');
        $resultado = $query->execute([
            ':usuario' => $this->usuario
        ]);

        if ($resultado) {
        $results = $query->fetch(PDO::FETCH_ASSOC);
        $senhaBD = $results['user_pwd'];

           if (password_verify($this->senha, $senhaBD))
           {
               session_start();
               $_SESSION["logado"] = true;
               $_SESSION["nome"] = $results['user_first'];


           } else{
               echo "<p> Digite a senha correta!!!</p>";
           }



        } else {
            echo "<p>Digite seu usuário</p>";
        }
    }


}
