<?php

require "../database/Conexao.php"; // require - importa uma vez | require_once - importa toda vez que o arquivo usuários é acessado/chamado.

class UsuarioModel
{
    private $conexao = null;
    protected $nomeTabela = "pessoas";

    public function __construct()
    {
        global $conexao; // acessamos (global) a variavel $conexao do arquivo Conexao.php
        $this->conexao = $conexao;
    }

    // desconectamos do banco de dados.
    public function desconectar()
    {
        $this->conexao->close();
        $this->conexao = null;
    }

    public function listar()
    {
        $sql = "SELECT * FROM {$this->$nomeTabela}";
        $result = $this->conexao->query($sql);

        return $result ?? [];
    }

    public function obter($idUsuario)
    {
        $sql = "SELECT * FROM {$this->nomeTabela} WHERE id={$idUsuario} LIMIT 1";
        $result = $this->conexao->query($sql);

        return $result ?? [];
    }

    public function cadastrar($nome, $email, $status, $redesSociais, $phone, $cpf, $cnpj,$genero)
    {
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

        $result = $this->conexao->query($sql);

        if ($result) {
            return $this->conexao->insert_id; // retorna ultimo id gravado no banco.
        }

        return 0;
    }

    public function atualizar($nome, $email, $status, $idUsuario,$redesSociais,$phone, $cpf, $cnpj, $genero)
    {
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

    public function excluir($idUsuario)
    {
        $sql = "DELETE FROM {$this->nomeTabela} WHERE id={$idUsuario}";
        $result = $this->conexao->query($sql);

        return $result;
    }
}




?>