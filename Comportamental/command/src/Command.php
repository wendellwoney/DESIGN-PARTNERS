<?php
namespace Command;


abstract class Command
{
    abstract public function execute();
    abstract public function undo();
}