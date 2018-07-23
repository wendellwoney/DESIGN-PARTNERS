<?php
namespace Composite;


class Manager extends Employee
{
    private $arvore = array();

    public function __construct($id, $nome, $salario)
    {
        parent::__construct($id, $nome, $salario);
    }

    public function printer()
    {
        if($this->id != 1)
            print "&nbsp";
        print $this->nome . ", $" . $this->salario . "<br>";
        foreach ($this->arvore as $subordinado) {
             $subordinado->printer();
        }
    }

    public function add(Employee $employee)
    {
        $this->arvore[$employee->id] = $employee;
    }

    public function remove(Employee $employee)
    {
        unset($this->arvore[$employee->id]);
    }
}