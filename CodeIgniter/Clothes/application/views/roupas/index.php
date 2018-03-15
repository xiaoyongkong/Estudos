<h2><?php echo $title; ?></h2>

<?php foreach ($roupas as $roupas_item): ?>

	<h3><?php echo $roupas_item['title']; ?></h3>
	<div class="main">
		<?php echo $roupas_item['text']; ?>
	</div>
	<p><a href="<?php echo site_url('roupas/'.$roupas_item['tipo']); ?>">View article</a></p>

<?php endforeach; ?>
