<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/header.tpl.php"; ?>

<h1><small>Links</small></h1>
<hr>
<div class="grid">
	<div class="row">
<?php
	if($listaGrupos):
	foreach($listaGrupos as $grupo):
?>
		<div class="cel placa">
			<div
				data-title-caption="<?= $grupo->getNome() ?>"
				class="painel" 
				data-role="panel" 
				data-collapsible="true"
				data-cls-panel="shadow-1">
				<ul class="lista-links d-menu open pos-static">
				<?php foreach($grupo->getLinks() as $link): ?>
	                <li>
						<a href="<?= $link->getEndereco() ?>" target="_blank" class="list-group-item list-group-item-action">
							<?= $link->getNome() ?>
						</a>
					</li>
				<?php endforeach; ?>
	            </ul>
			</div>
		</div>
<?php 
	endforeach;
	endif;
?>
	</div>
</div>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/footer.tpl.php"; ?>
