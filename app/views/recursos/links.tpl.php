<?php include_once __DIR__ . "/../includes/header.tpl.php"; ?>

<h1><small>Links</small></h1>
<hr>
<div class="grid">
	<div class="row no-gap">
<?php
	if(isset($guias)):
	foreach($guias as $g):
?>
		<div class="cel placa">
			<div
				data-title-caption="<?= $g['nome'] ?>"
				class="painel" 
				data-role="panel" 
				data-collapsible="true" 
				data-cls-panel="shadow-1">
				<ul class="lista-links d-menu open pos-static">
			<?php
				foreach($g['links'] as $link):
			?>
	                <li>
						<a href="<?= $link['endereco'] ?>" target="_blank" class="list-group-item list-group-item-action">
							<?= $link['nome'] ?>
						</a>
					</li>
			<?php
				endforeach;
			?>
	            </ul>
			</div>
		</div>
<?php 
	endforeach;
	endif;
?>
	</div>
</div>

<?php include_once __DIR__ . '/../includes/footer.tpl.php'; ?>
