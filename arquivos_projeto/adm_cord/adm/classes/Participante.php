<?php

class Participante
{
    public $part_id;
    public $prof_id;
    public $edital_id;

    public function __construct($part_id = false)
    {
        if ($part_id){

            $this->part_id = $part_id;

            $this->carregar();
        }
    }

    public function inserir()
    {

        $sql = "INSERT INTO tb_participantes (prof_id, edital_id) VALUES (
            '" .$this->prof_id. "',
            '" .$this->edital_id. "'
        )";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $conexao->exec($sql);

        echo "registrado com sucesso";
    }

   public function listar()
    {
        $sql = "SELECT pa.part_id, p.nome, p.cpf, p.cep, p.tel FROM tb_participantes pa JOIN tb_prof p ON pa.prof_id = p.prof_id ORDER BY part_id";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');
        $query = $conexao->query($sql);

        $lista = $query->fetchALL();

        return $lista;
    }
   public function listar2()
    {
        $sql = "SELECT c.sigla_curso, e.num_edital FROM tb_participantes pa JOIN tb_edital e ON pa.edital_id = e.edital_id JOIN tb_cursos c ON e.curso_id = c.curso_id ORDER BY part_id";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');
        $query = $conexao->query($sql);

        $lista = $query->fetchALL();

        return $lista;
    }

    public function excluir()
    {
        $sql = "DELETE FROM tb_edital WHERE edital_id=".$this->edital_id;

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $conexao->exec($sql);
    }

    public function carregar()
    {
        $sql = "SELECT e.edital_id, c.curso_id, d.disci_id, e.num_edital FROM tb_edital e JOIN tb_disciplinas d ON e.disci_id = d.disci_id JOIN tb_cursos c ON e.curso_id = c.curso_id WHERE edital_id={$this->edital_id} ORDER BY edital_id";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $resultado = $conexao->query($sql);

        $linha = $resultado->fetch();

        $this->edital_id = $linha['edital_id'];
        $this->curso_id = $linha['curso_id'];
        $this->disci_id = $linha['disci_id'];
        $this->num_edital = $linha['num_edital'];
    }

    public function atualizar()
    {
        // Query SQL para atualizar uma turma no banco de dados pelo id
        $sql = "UPDATE tb_edital SET
                    edital_id = '$this->edital_id' ,
                    curso_id = '$this->curso_id' ,
                    disci_id = '$this->disci_id' ,
                    num_edital = '$this->num_edital' 
                WHERE edital_id = $this->edital_id ";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');
        $conexao->exec($sql);
    }

    public function listarpdf()
    {
        $sql = "SELECT pdf, tipo FROM tb_edital WHERE edital_id={$this->edital_id}";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $resultado = $conexao->query($sql);

        $lista = $resultado->fetch($resultado);
        $tipo = $lista['tipo'];
        $arquivo = $lista['pdf'];

        header("Content-type: $tipo");
        echo $arquivo;
    }

}