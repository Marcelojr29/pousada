<?php  
	
	try {
		//faz a conexao com o banco

		$conectar = new PDO("mysql:host=localhost; port=3306;dbname=chalehotel;", "root", "");
		
	} catch (PDOException $e) {
		echo "Falha ao conectar com o banco de dados: " . $e->getMessage();
		
	}
?>