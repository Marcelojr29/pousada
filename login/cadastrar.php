<?php 

	include_once "conexao.php";

	try {
		$nome = filter_var($_POST['nome']);
		$sobrenome = filter_var($_POST['sobrenome']);
		$email = filter_var($_POST['email']);
		$confemail = filter_var($_POST['conf']);
		$numero = filter_var($_POST['numero']);



		$insert = $conectar->prepare("insert into usuarios (nome, sobrenome, email, conf, numero) values (:nome, :sobrenome, :email, :conf, :numero)");
		$insert->bindParam(':nome', $nome);
		$insert->bindParam(':sobrenome', $sobrenome);
		$insert->bindParam(':email', $email);
		$insert->bindParam(':conf', $confemail);
		$insert->bindParam(':numero', $numero);

		$insert->execute();
		header("location: index.php");
	} catch (PDOException $e) {

		echo 'Error:' . $e->getMessage();

	}

?>