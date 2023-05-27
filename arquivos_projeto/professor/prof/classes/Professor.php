<?php

class Professor
{
    public $prof_id;
    public $nome;
    public $dataNasc;
    public $email;
    public $tel;
    public $cpf;
    public $cep;
    public $cidade;
    public $senha;

    public function __construct($prof_id = false)
    {
        if ($prof_id){

            $this->prof_id = $prof_id;

            $this->carregar();
        }
    }

    public function inserir()
    {

        $sql = "INSERT INTO tb_prof (nome, dataNasc, email, tel, cpf, cep, cidade, senha) VALUES (
            '" .$this->nome. "',
            '" .$this->dataNasc. "',
            '" .$this->email. "',
            '" .$this->tel. "',
            '" .$this->cpf. "',
            '" .$this->cep. "',
            '" .$this->cidade. "',
            '" .$this->senha. "'
        )";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $conexao->exec($sql);

        echo "registrado com sucesso";
    }

    public function listar()
    {
        $sql = "SELECT * FROM tb_prof";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $resultado = $conexao->query($sql);

        $lista = $resultado->fetchALL();

        return $lista;
    }

    public function excluir()
    {
        $sql = "DELETE FROM tb_prof WHERE prof_id=".$this->prof_id;

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $conexao->exec($sql);
    }

    public function carregar()
    {
        $sql = "SELECT * FROM tb_prof WHERE prof_id=" . $this->prof_id;

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $resultado = $conexao->query($sql);

        $linha = $resultado->fetch();

        $this->prof_id = $linha['prof_id'];
        $this->nome = $linha['nome'];
        $this->dataNasc = $linha['dataNasc'];
        $this->email = $linha['email'];
        $this->tel = $linha['tel'];
        $this->cpf = $linha['cpf'];
        $this->cep = $linha['cep'];
        $this->cidade = $linha['cidade'];
        $this->senha = $linha['senha'];
    }

    public function atualizar()
    {
        // Query SQL para atualizar uma turma no banco de dados pelo id
        $sql = "UPDATE tb_prof SET
                    nome = '$this->nome' ,
                    dataNasc = '$this->dataNasc' ,
                    email = '$this->email' ,
                    tel = '$this->tel' ,
                    cpf = '$this->cpf' ,
                    cep = '$this->cep' ,
                    cidade = '$this->cidade' ,
                    senha = '$this->senha' 
                WHERE prof_id = $this->prof_id ";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');
        $conexao->exec($sql);
    }

}