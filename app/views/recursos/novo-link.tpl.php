<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/header.tpl.php"; ?>

<h1><small>Novo Link</small></h1>
<hr>
<div class="grid">
	<div class="row">
		<div class="cell">

			<form method="POST">
				<div class="form-group">
					<label>Nome do Link é...</label>
					<input type="text" name="nome" data-role="input" required>
				</div>
				<div class="form-group">
					<label>E o endereço...</label>
					<input type="text" name="endereco" data-role="input">
				</div>
		
				<fieldset class="border border-dashed border-size-2">
  					<legend class="text-leader">Pertence ao Grupo</legend>
					<div class="form-group">
						<?php
							if($listaGrupos):
							foreach($listaGrupos as $grupo):
						?>
							<input type="radio" data-style="2" name="grupo_link_id" value="<?= $grupo->getId() ?>" data-caption="<?= $grupo->getNome() ?>" data-role="radio" >
						<?php 
							endforeach;
							endif;
						?>
					</div>
					<div class="inline-form">
					<div class="form-group">
						<input type="radio" data-style="2" name="grupo_link_id" value=0 data-role="radio" >
						<input type="text" name="novo_grupo" data-role="input" placeholder="Novo Grupo" disabled="disabled">
					</div>
					</div>
				</fieldset>

				<div class="form-group">
					<button type="submit" class="button cor-pri">Salvar</button>
					<button type="reset" class="button light">Limpar</button>
				</div>
			</form>

		</div>
	</div>
</div>

<script>
	const radios_grupo = document.querySelectorAll('input[name=grupo_link_id]');
	const input_novoGrupo = document.querySelector('input[name=novo_grupo]');
	radios_grupo.forEach(function(radio){
		radio.addEventListener('click', function(){
			if(!parseInt(radio.value)){
			input_novoGrupo.removeAttribute('disabled');
			} else {
				input_novoGrupo.setAttribute('disabled','disabled');
			}
		});
	});

<?php 
	if(isset($aviso)):
?>
	var options = {
		showTop: true,
		timeout: 3000,
		distance: 20,
		clsToast: "<?= $aviso['status'] ?> ani-bounce"
	}
	Metro.toast.create("<?= $aviso['msg'] ?>", null, null, null, options);
<?php 
	endif
?>
	
</script>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/footer.tpl.php"; ?>
