<?php
include_once 'model/Conexao.class.php';
include_once 'model/Manager.class.php';
$manager = new Manager();
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'view/dependencias.php';?>
	</head>
	<body>
		<div class="container">
			<h2 class="text-center">
			List of Clients <i class="fa fa-list"></i>
			</h2>
			<h5 class="text-right">
			<a href="view/page_register.php" class="btn btn-primary btn-xs">
				<i class="fa fa-user-plus"></i>
			</a>
			</h5>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead class="thead">
						<tr>
							<th>ID</th>
							<th>NOME</th>
							<th>E-MAIL</th>
							<th>CPF</th>
							<th>DT. DE NASCIMENTO</th>
							<th>ENDEREÇO</th>
							<th>TELEFONE</th>
							<th colspan="3">AÇÕES</th>
						</tr>
					</thead>
					<?php foreach ($manager->listClient("registros") as $client): ?>
					<tr>
						<td><?php echo $client['id']; ?></td>
						<td><?php echo $client['name']; ?></td>
						<td><?php echo $client['email']; ?></td>
						<td><?php echo $client['cpf']; ?></td>
						<td><?php echo date("d/m/Y", strtotime($client['birth'])); ?></td>
						<td><?php echo $client['address']; ?></td>
						<td><?php echo $client['phone']; ?></td>
						<td>
							<form method="POST" action="view/page_update.php">
								<input type="hidden" name="id" value="<?=$client['id']?>">
								<button class="btn btn-warning  btn-xs">
								<i class="fa fa-user-edit"></i>
								</button>
							</form>
						</td>
						<td>
							<form method="POST" action="controller/delete_client.php" class="button_delete">
								<button class="btn btn-danger btn-xs">
								<input type="hidden" name="id" value="<?=$client['id']?>">
								<i class="fa fa-trash"></i>
								</button>
							</form>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/funcoes.js"></script>
	<script type="text/javascript">
		$(function(){
			$(removeLinha());
		})
	</script>
 </body>
</html>