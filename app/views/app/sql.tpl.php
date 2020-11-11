<?php include_once __DIR__ . "/../includes/header.tpl.php"; ?>
<?php //var_dump($sql_value); ?>
<h1 class="sub_titulo"><small>Comando SQL</small></h1>
<hr>

<form action="/sql" method="POST">
    <label>Editor</label>
    <div class="form-group">
        <textarea name="sql" data-role="textarea" data-clear-button-icon="<span class='mif-cancel'></span>" required="required"><?php echo(trim($sql_value ?? '')) ?></textarea>
    </div>
    <div class="form-group">
        <button class="button primary">Executar</button>
    </div>
</form>

<script>
    var options = {
        showTop: true,
        timeout: 3000,
        distance: 20,
        clsToast: 'ani-float'
    }
<?php
    $status = "light";
    if(isset($dados)):
        $status = $dados['resultado'] ? 'success' : 'warning';
    endif
?>
window.addEventListener('load', function(){
    Metro.toast.create("<?= $dados['msg'] ?>", null, null, "<?= $status ?>", options);
});
</script>

<?php include_once __DIR__ . '/../includes/footer.tpl.php'; ?>