<?php
	switch($_REQUEST["acao"]){
		case 'cadastrar':
			$cep = $_POST["cep"];
			$bairo = $_POST["bairo"];
			$quadra = $_POST["quadra"];
			$rua = $_POST["rua"];
			$complemento = $_POST["complemento"];

			$sql = "INSERT INTO enderecos (cep,bairo,quadra,rua,complemento) VALUES ('{$cep}','{$bairo}','{$quadra}','{$rua}','{$complemento}')";
			$res = $conn->query($sql);
			if ($res==true) {
				print "<script>alert('Novo endereço cadastrado com sucesso');</script>";
				print "<script>location.href='?page=lista';</script>";
			}else {
				print "<script>alert('Erro');</script>";
				print "<script>location.href='?page=lista';</script>";
			}
		break;
	}
?>