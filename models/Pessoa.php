<?php

require "../dtabase/Conexao.php";

class Pessoa {
    
    private $conexao = null;
    protected $nomeTabela = "pessoas";
    
    public $id = 0;
    public $name = "";
    public $CEP = 0;
    public $mail = "";
    public $phone = 0;
    public $socialweb = "";
    public $status = true;
    

    public function __construct()
    {
        global $conexao; // acessamos (global) a variavel $conexao do arquivo Conexao.php
        $this->conexao = $conexao;
    }

    public function desconectar()
    {
        $this->conexao->close();
        $this->conexao = null;
    }

    public function create($pessoa){

        $sql = "INSERT
        INTO
            {$this->nomeTabela}
        (
            nome,				
            email,
            senha,
            status,
            redes sociais,
            phone,
            cpf,
            cnpj,
            genero
        )
        VALUES(
            '{$nome}',				
            '{$email}',				
            '{$status}',
            '{$redesSociais}',
            '{$phone}',
            '{$cpf}',
            '{$cnpj}',
            '{$genero}'	

        );";

        
    }

    public function update($pessoa){
        $sql = "UPDATE
                {$this->nomeTabela}
            SET
                nome = '{$nome}',				
                email = '{$email}',				
                status = '{$status}',
                redes sociais = '{$redesSociais}',
                phone = '{$phone}',
                cpf = '{$cpf}',
                cnpj = '{$cnpj}',
                genero = '{$genero}'
                
            WHERE
                id = {$idUsuario};";

        $result = $this->conexao->query($sql);

        if ($result) {
            return $this->conexao->affected_rows; // retorna o numero de linhas atualizadas.
        }

        return 0;

    }

    public function read($id){
        $sql = "SELECT * FROM {$this->nomeTabela} WHERE id={$idUsuario} LIMIT 1";
        $result = $this->conexao->query($sql);

        return $result ?? [];

    }

    public function read_all(){
        $sql = "SELECT * FROM {$this->nomeTabela}";
        $result = $this->conexao->query($sql);

        return $result ?? [];     


    }

    public function delete($id){
               
        $sql = "DELETE FROM {$this->nomeTabela} WHERE id={$idUsuario}";
        $result = $this->conexao->query($sql);

        return $result;


    }
    
}

// $pessoa = new Pessoa();
// $dadosPessoa = [];

// $result = $pessoa->read_all();

// if($result->num_rows > 0)
// {
//     while($row = $result->fetch_assoc())
//     {
//         $dadosPessoa[] = $row;
//     }
// }

header('Content-Type: application/json; charset=utf-8');
echo json_encode($dadosPessoa);
exit();
// 20151012