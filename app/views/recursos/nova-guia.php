<?php require_once __DIR__ . '/header.php'; ?>
<h1 class="sub_titulo"><small>Nova Guia</small></h1>
<hr>
<form>
	<dir class="grid">
		<div class="row">
			<div class="cell">
				<div class="form-group">
			        <label>Título da Guia</label>
			        <input type="text" name="nome_guia"/>
			    </div>
			    <div class="form-group">
			        <input type="checkbox" name="ativacao" data-role="switch" data-material="true" data-caption="Ativado" checked>
			    </div>
			    <div class="form-group">
			        <button class="button success">Gravar e adicionar Links</button>
			        <input type="button" class="button" value="Cancel">
			    </div>
			</div>
			<div class="divider"></div>
			<div class="cell">
				<div class="form-group">
			        <label>Título da Guia</label>
			        <input type="text" name="nome_guia"/>
			    </div>
			    <div class="form-group">
			        <input type="checkbox" name="ativacao" data-role="switch" data-material="true" data-caption="Ativado" checked>
			    </div>
			    <div class="form-group">
			        <button class="button success">Gravar e adicionar Links</button>
			        <input type="button" class="button" value="Cancel">
			    </div>
			</div>

		</div>
	</dir>
</form>

<?php require_once __DIR__ . '/footer.php'; ?>
