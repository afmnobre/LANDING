<?php

include_once 'Turma.php';
include_once 'Aluno.php';

$turmas = [];

$Aluno_1 = new Aluno('José', 123);
$Aluno_2 = new Aluno('Maria', 235);
$aluno_3 = new Aluno('Thiago', 312);

$turmas[] = new Turma('PHP', new \DateTime('today'), [$Aluno_1, $Aluno_2]);
$turmas[] = new Turma('JAVA', new \DateTime('yesterday'), [$Aluno_1, $Aluno_2, $Aluno_3]);
$turmas[] = new Turma('DATABASE', new \DateTime('-1 month'), [$Aluno_2, $Aluno_3]);


$serializacao = serialize($turmas);

try{	
	file_put_contents('dados.db', $serializacao);
	echo "Arquivo Criado com Sucesso!";
}catch(Exception $e) {
	echo "O erro é: ". $e->getMessage();
}

?>
