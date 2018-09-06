<?php

class Cadastro
{
    private $nome;
    private $sobrenome;
    private $usuario;
    private $cpf;
    private $email;
    private $senha;
    private $genero;

    public function __construct ($nome, $sobrenome, $usuario, $cpf, $email, $senha, $genero)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->usuario = $usuario;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
        $this->genero = $genero;

    }

    public function cadastrar()
    {
        $dsn = 'mysql:host=localhost;dbname=loginsystem;charset=utf8mb4';
        $db_user = 'root';
        $db_pass = 'root';
        $db = new PDO ($dsn, $db_user, $db_pass);

        $senhaBD = password_hash($this->senha, PASSWORD_DEFAULT);

        $query =$db->prepare("INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, CPF, genero) VALUES (:nome, :sobrenome, :email, :usuario, :senha, :cpf, :genero)");
        $resultado = $query->execute([
            ':nome' => $this->nome,
            ':sobrenome' => $this->sobrenome,
            ':usuario' => $this->usuario,
            ':cpf' => $this->cpf,
            ':email' => $this->email,
            ':senha' => $senhaBD,
            ':genero' => $this->genero

        ]);
            if ($resultado) {
                echo "<h2>Cadastro efetuado com sucesssssoooooo!!!</h2>";
            } else {
                echo "deu ruim";
            }
    }
}


?>
