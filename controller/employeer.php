<?php
// Incluir a classe Employee
include_once '../model/employeer.php';
 
// Criar um novo objeto Employee

// Receber os dados do formulário
$name           = htmlspecialchars(strip_tags($_POST['name']));
$age            = htmlspecialchars(strip_tags($_POST['age']));
$job            = htmlspecialchars(strip_tags($_POST['job']));
$salary         = htmlspecialchars(strip_tags($_POST['salary']));
$admission_date = htmlspecialchars(strip_tags($_POST['admission_date']));

$employee       = new Employeer(NULL, $name, $age, $job, $salary, $admission_date);
// Inserir um novo registro na tabela employees
if($employee->create()){
    print "Funcionário inserido com sucesso!";
} else{
    print "Erro ao inserir o funcionário.";
}
?>
