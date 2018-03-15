<html>

<body>

<h2>Adicione uma Roupa</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('insert'); ?>
<?php
$timezone = "Brazil/East";
date_default_timezone_set($timezone);
$today = date("Y-m-d");
?>

<div id="container">
<?php if (isset($message)) { ?>
	<CENTER><h3 style="color:green;">Dados Inseridos com Sucesso</h3></CENTER><br>
<?php } ?>
<br>

	<label for="title"><b>Data :</b></label> <br>
	<input type="date" id = "data" name="data" value="<?php echo $today; ?>"/><br />

	<br>
	<label for="text"><b>Característica :</b></label><br>
	<input type="text" id = "tipo" name="tipo"><br>

	<br>
	<label for="text"><b>Cor :</b></label><br>
	<input type="text" id = "cor" name="cor"><br>

<br>
<input type="submit" name="submit" value="Adicionar Roupa" />


<?php echo form_close(); ?><br/>

</div>
</body>
</html>
