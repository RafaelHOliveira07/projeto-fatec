<?php

class Disciplina
{
    public $disci_id;
    public $curso_id;
    public $nome_disci;
    public $area_disci;
    public $data_hora;

    public function __construct($disci_id = false)
    {
        if ($disci_id){

            $this->disci_id = $disci_id;

            $this->carregar();
        }
    }

    public function inserir()
    {

        $sql = "INSERT INTO tb_disciplinas (curso_id, nome_disci, area_disci, data_hora) VALUES (
            '" .$this->curso_id. "',
            '" .$this->nome_disci. "',
            '" .$this->area_disci. "',
            '" .$this->data_hora. "'
        )";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $conexao->exec($sql);

        echo "registrado com sucesso";
    }

    public function listar()
    {
        $sql = "SELECT * FROM tb_disciplinas";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $resultado = $conexao->query($sql);

        $lista = $resultado->fetchALL();

        return $lista;
    }

    public function excluir()
    {
        $sql = "DELETE FROM tb_disciplinas WHERE disci_id=".$this->disci_id;

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $conexao->exec($sql);
    }

    public function carregar()
    {
        $sql = "SELECT * FROM tb_disciplinas WHERE disci_id=" . $this->disci_id;

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $resultado = $conexao->query($sql);

        $linha = $resultado->fetch();

        $this->curso_id = $linha['curso_id'];
        $this->nome_disci = $linha['nome_disci'];
        $this->area_disci = $linha['area_disci'];
        $this->data_hora = $linha['data_hora'];
    }

    public function atualizar()
    {
        // Query SQL para atualizar uma turma no banco de dados pelo id
        $sql = "UPDATE tb_disciplinas SET
                    curso_id = '$this->curso_id' ,
                    nome_disci = '$this->nome_disci' ,
                    area_disci = '$this->area_disci' ,
                    data_hora = '$this->data_hora' 
                WHERE disci_id = $this->disci_id ";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');
        $conexao->exec($sql);
    }

}