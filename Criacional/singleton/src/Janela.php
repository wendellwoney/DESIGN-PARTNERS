<?php
namespace Singleton;

class Janela
{
    private static $instance = null;

    //Impede que o usuario instancie a classe pelo new
    private  function __construct()
    {
    }
    //Impede que o usuario clone a classe
    private function __clone()
    {
    }
    //Impede que o usuario guarde estado
    private function __wakeup()
    {
    }

    public static function getInstance()
    {
        if(static::$instance == null)
            static::$instance = new Janela();

        return static::$instance;
    }
}