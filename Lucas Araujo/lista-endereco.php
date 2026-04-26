<h1>Lista endereço</h1>
<?php
	$sql = "SELECT * FROM enderecos";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if ($qtd > 0) {
		print "<table class='table table-houver table-striped table-bordered'>";
			Print "<tr>";
			print "<th>CEP</th>";
			print "<th>BAIRO</th>";
			print "<th>QUADRA</th>";
			print "<th>RUA</th>";
			print "<th>COMPLEMENTO</th>";
			Print "</tr>";
		while ($row = $res->fetch_object()) {
			Print "<tr>";
			print "<td>".$row->cep."</td>";
			print "<td>".$row->bairo."</td>";
			print "<td>".$row->quadra."</td>";
			print "<td>".$row->rua."</td>";
			print "<td>".$row->complemento."</td>";
			Print "</tr>";
		} 
		print "</table>";
	}else {
			print "Não encontrou resultado";
		}
	?>