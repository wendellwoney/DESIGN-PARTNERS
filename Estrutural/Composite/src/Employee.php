<?php
/**
 * Created by PhpStorm.
 * User: wende
 * Date: 23/07/2018
 * Time: 12:40
 */

namespace Composite;


Abstract class Employee
{
    protected $id;
    protected $nome;
    protected $salario;

    public function __construct($id, $nome, $salario)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->salario = $salario;
    }

    abstract public function printer();
    abstract public function add(Employee $employee);
    abstract public function remove(Employee $employee);
}