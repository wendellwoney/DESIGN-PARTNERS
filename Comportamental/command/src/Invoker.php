<?php
/**
 * Created by PhpStorm.
 * Invoker: wende
 * Date: 25/07/2018
 * Time: 07:24
 */

namespace Command;


class Invoker
{
    private $comandos = array();
    private $current = 0;

    public function computer(Command $command)
    {
        $command->execute();
        array_push($this->comandos, $command);
        $this->current++;
    }

    public function undo(int $levels)
    {
        for ($i = 0; $i < $levels; $i++) {
            if ($this->current > 0) {
                $this->current--;
                $this->comandos[$this->current]->undo();
                unset($this->comandos[$this->current]);
            }
        }
    }
}