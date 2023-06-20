<?php

class MUsuario
{
    private $codigo;
    private $typeuser;
    private $nome;
    private $email;
    private $senha;
    private $cpf;
    private $rg;
    private $endereco;

    function __construct(
        $codigo,
        $typeuser,
        $nome,
        $email,
        $senha,
        $cpf,
        $rg,
        $endereco
    ) {
        $this->codigo = $codigo;
        $this->typeuser = $typeuser;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->endereco = $endereco;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getTypeuser()
    {
        return $this->typeuser;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
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

    public function setTypeuser($typeuser)
    {
        $this->typeuser = $typeuser;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
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