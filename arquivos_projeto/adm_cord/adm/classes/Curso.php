<?php

class Curso
{
    public $curso_id;
    public $nome_curso;
    public $sigla_curso;
    public $desc_curso;

    public function __construct($curso_id = false)
    {
        if ($curso_id){

            $this->curso_id = $curso_id;

            $this->carregar();
        }
    }

    public function inserir()
    {

        $sql = "INSERT INTO tb_cursos (nome_curso, sigla_curso, desc_curso) VALUES (
            '" .$this->nome_curso. "',
            '" .$this->sigla_curso. "',
            '" .$this->desc_curso. "'
        )";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $conexao->exec($sql);

        echo "registrado com sucesso";
    }

    public function listar()
    {
        $sql = "SELECT * FROM tb_cursos";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $resultado = $conexao->query($sql);

        $lista = $resultado->fetchALL();

        return $lista;
    }

    public function excluir()
    {
        $sql = "DELETE FROM tb_cursos WHERE curso_id=".$this->curso_id;

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $conexao->exec($sql);
    }

    public function carregar()
    {
        $sql = "SELECT * FROM tb_cursos WHERE curso_id=" . $this->curso_id;

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $resultado = $conexao->query($sql);

        $linha = $resultado->fetch();

        $this->nome_curso = $linha['nome_curso'];
        $this->sigla_curso = $linha['sigla_curso'];
        $this->desc_curso = $linha['desc_curso'];
    }

    public function atualizar()
    {
        // Query SQL para atualizar uma turma no banco de dados pelo id
        $sql = "UPDATE tb_cursos SET
                    nome_curso = '$this->nome_curso' ,
                    sigla_curso = '$this->sigla_curso' ,
                    desc_curso = '$this->desc_curso' 
                WHERE curso_id = $this->curso_id ";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');
        $conexao->exec($sql);
    }

}