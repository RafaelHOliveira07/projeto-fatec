<?php

class Turma
{
    public $id;
    public $img_curso;
    public $nome_curso;
    public $sigla_curso;
    public $desc_curso;

    // Define um método construtor na classe com parâmetro opcional
    public function __construct($id = false)
    {
        // Verifica se a variável $id foi definida
        if ($id){
            // Atribui o valor de $id à propriedade $id do objeto
            $this->id = $id;
            // carrega as informações correspondentes ao $id do objeto
            $this->carregar();
        }
    }

    public function inserir()
    {
        // Define a string SQL de inserção de dados na tabela "tb_turmas"
        $sql = "INSERT INTO tb_curso (img_curso, nome_curso, sigla_curso, desc_curso) VALUES (
            '{$this->img_curso}',
            '{$this->nome_curso}',
            '{$this->sigla_curso}',
            '{$this->desc_curso}'
        )";

        // Cria uma nova conexão PDO com o banco de dados "sis-escolar"
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_fatec','root','');

        // Executa a string SQL na conexão, inserindo os dados na tabela "tb_turmas"
        $conexao->exec($sql);

        echo "Registro gravado com sucesso";
    }

    public function listar()
    {
        // Define a string SQL para selecionar todos os registros da tabela
        $sql = "SELECT * FROM tb_cursos";

        // Cria uma nova conexão PDO com o banco de dados "sis-escolar"
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_fatec','root','');

        // Executa a string SQL na conexão retornando um objeto de restultado
        $resultado = $conexao->query($sql);

        // Extrai todos os registros do objeto e os armazena em um array
        $lista = $resultado->fetchALL();

        // Retorna o array contendo todos os registros da tabela "tb_turmas"
        return $lista;
    }

    public function excluir()
    {
        // Define a string de consulta SQL para deletar um registro
        // da tabela "tb_turmas" com base ni seu ID
        $sql = "DELETE FROM tb_cursos WHERE id=".$this->id;

        // Cria uma nova conexão PDO com o banco de dados localizado
        // no servidor "127.0.0.1" e autentica com o usuário "root" (sem senha)
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_fatec','root','');

        // Executa a intrução SQL de exclusão utilizando o métedo
        // "exerc" do objeto de conexão PDO criado acima
        $conexao->exec($sql);
    }

    public function carregar()
    {
        // Query SQL para buscar uma turma no banco de dados pelo id
        $sql = "SELECT * FROM tb_cursos WHERE id=" . $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_fatec','root','');

        // Execução do query e armazenamento do resultado em uma variável
        $resultado = $conexao->query($sql);
        // Recuperação da primeira linha do resultado como um array associativo
        $linha = $resultado->fetch();

        // Atribuição dos valores dos campos recuperados do banco
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
                WHERE curso_id = $this->id ";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_fatec','root','');
        $conexao->exec($sql);
    }

}

?>