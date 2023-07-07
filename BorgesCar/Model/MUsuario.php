<?php

class MUsuario
{
    private $codigo;
    private $nome;
    private $funcao;
    private $email;
    private $username;
    private $password;
    private $telefone;
    private $cpf;
    private $rg;
    private $endereco;

    function __construct(
        $codigo,
        $nome,
        $funcao,
        $email,
        $username,
        $password,
        $telefone,
        $cpf,
        $rg,
        $endereco
    ) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->funcao = $funcao;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->endereco = $endereco;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getFuncao()
    {
        return $this->funcao;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
}
?>