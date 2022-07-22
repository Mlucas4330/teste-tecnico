<?php
class Usuario
{
    public $nome;
    public $sobrenome;

    function __construct($nome, $sobrenome)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }

    function listarNome()
    {
        return $this->nome . ' ' . $this->sobrenome;
    }
}


$listaUsuarios = array();

function addUsuario($nome, $sobrenome)
{
    $novoUsuario = new Usuario($nome, $sobrenome);
    array_push($GLOBALS['listaUsuarios'], $novoUsuario);
}

addUsuario("Lucas", "Medeiros");
addUsuario("Marcelo", "Eltz");
addUsuario("Elias", "Eltz");
addUsuario("Eduardo", "Eltz");
addUsuario("Marcelo", "Eltz");


function listar()
{
    foreach ($GLOBALS['listaUsuarios'] as $usuario) {
        echo $usuario->listarNome();
        echo '<br>';
    }
}

listar();
