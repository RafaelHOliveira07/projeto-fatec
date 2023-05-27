<?php

class Edital
{
    public $edital_id;
    public $curso_id;
    public $disci_id;
    public $num_edital;
    public $nome_pdf;
    public $pdf;
    public $tipo;

    public function __construct($edital_id = false)
    {
        if ($edital_id){

            $this->edital_id = $edital_id;

            $this->carregar();
        }
    }

    public function inserir()
    {

        $sql = "INSERT INTO tb_edital (edital_id, curso_id, disci_id, num_edital, nome_pdf, pdf, tipo) VALUES (
            '" .$this->edital_id. "',
            '" .$this->curso_id. "',
            '" .$this->disci_id. "',
            '" .$this->num_edital. "',
            '" .$this->nome_pdf. "',
            '" .$this->pdf. "',
            '" .$this->tipo. "'
        )";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $conexao->exec($sql);

        echo "registrado com sucesso";
    }

   public function listar(string $curso)
    {
        $sql = "SELECT e.edital_id, c.sigla_curso, d.nome_disci, d.area_disci,d.data_hora, e.num_edital  FROM tb_edital e JOIN tb_disciplinas d ON e.disci_id = d.disci_id JOIN tb_cursos c ON e.curso_id = c.curso_id WHERE c.sigla_curso = :curso ORDER BY edital_id";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');
        $query = $conexao->prepare($sql);
        $query->execute([':curso' => $curso]);

        $lista = $query->fetchALL();

        return $lista;
    }

    public function listardsm()
    {
        $sql = "SELECT e.edital_id, c.sigla_curso, d.nome_disci, d.area_disci,d.data_hora, e.num_edital  FROM tb_edital e JOIN tb_disciplinas d ON e.disci_id = d.disci_id JOIN tb_cursos c ON e.curso_id = c.curso_id WHERE c.sigla_curso = 'DSM' ORDER BY edital_id";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $resultado = $conexao->query($sql);

        $lista = $resultado->fetchALL();

        return $lista;
    }
    public function listargpi()
    {
        $sql = "SELECT e.edital_id, c.sigla_curso, d.nome_disci, d.area_disci,d.data_hora, e.num_edital  FROM tb_edital e JOIN tb_disciplinas d ON e.disci_id = d.disci_id JOIN tb_cursos c ON e.curso_id = c.curso_id WHERE c.sigla_curso = 'GPI' ORDER BY edital_id";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $resultado = $conexao->query($sql);

        $lista = $resultado->fetchALL();

        return $lista;
    }
    public function listarge()
    {
        $sql = "SELECT e.edital_id, c.sigla_curso, d.nome_disci, d.area_disci,d.data_hora, e.num_edital  FROM tb_edital e JOIN tb_disciplinas d ON e.disci_id = d.disci_id JOIN tb_cursos c ON e.curso_id = c.curso_id WHERE c.sigla_curso = 'GE' ORDER BY edital_id";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $resultado = $conexao->query($sql);

        $lista = $resultado->fetchALL();

        return $lista;
    }
    public function listargti()
    {
        $sql = "SELECT e.edital_id, c.sigla_curso, d.nome_disci, d.area_disci,d.data_hora, e.num_edital  FROM tb_edital e JOIN tb_disciplinas d ON e.disci_id = d.disci_id JOIN tb_cursos c ON e.curso_id = c.curso_id WHERE c.sigla_curso = 'GTI' ORDER BY edital_id";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $resultado = $conexao->query($sql);

        $lista = $resultado->fetchALL();

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