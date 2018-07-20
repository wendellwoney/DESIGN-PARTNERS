<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Bridge\ProfessorGraduacao;
use Bridge\ProfessorImplGraduacao;

$professorGraduacao = new ProfessorGraduacao(new ProfessorImplGraduacao());

print $professorGraduacao->op();