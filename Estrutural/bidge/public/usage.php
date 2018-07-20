<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Bridge\ProfessorGraduacao;
use Bridge\ProfessorImplGraduacao;
use Bridge\ProfessorPosGraduacao;
use Bridge\ProfessorImplPosGraduacao;

$professorGraduacao = new ProfessorGraduacao(new ProfessorImplGraduacao());

print $professorGraduacao->op();
print "<br>";
$professorPosGraduacao = new ProfessorPosGraduacao(new ProfessorImplPosGraduacao());
$professorPosGraduacao->op();