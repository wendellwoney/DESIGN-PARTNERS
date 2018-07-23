<?php
namespace Composite;

class Developer extends Employee
{

    public function __construct($id, $nome, $salario)
    {
        parent::__construct($id, $nome, $salario);
    }

    public function printer()
    {
        print "&nbsp&nbsp&nbsp" . $this->nome . ", $" . $this->salario . "<br>";
    }

    public function add(Employee $employee)
    {
        print "Não é possivel adicionar empregado subordinado do programador";
    }

    public function remove(Employee $employee)
    {
        print "Não é possivel remover empregado subordinado do programador";
    }

}