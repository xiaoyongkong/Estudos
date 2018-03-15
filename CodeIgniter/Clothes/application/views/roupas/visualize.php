<style>
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
	}
</style>

<table>
	<tr>
		<th>Data</th>
		<th>Característica</th>
		<th>Cor</th>
	</tr>
	<?php foreach($roupas as $row){?>
		<tr>
			<td><?php echo $row->dataSemana ;?></td>
			<td><?php echo $row->tipo ;?> </td>
			<td ><?php echo $row->cor;?></td>
		</tr>
			<?php }?>
	</tr>
</table>

