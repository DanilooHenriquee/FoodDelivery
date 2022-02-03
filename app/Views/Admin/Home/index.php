<?php echo $this->extend('Admin/layout/principal'); ?>


<?php echo $this->section('titulo'); ?>
<?php echo $titulo;   ?>
<?php echo $this->endSection(); ?>





<?php echo $this->section('estilos'); ?>
<!-- Aqui enviamos para o temaplate principal os estilos -->
<?php echo $this->endSection(); ?>





<?php echo $this->section('conteudo'); ?>
<!-- Aqui enviamos para o temaplate principal os conteudos -->
<h1>Hello World!</h1>
<?php echo $titulo;   ?>
<?php echo $this->endSection(); ?>





<?php echo $this->section('scripts'); ?>
<!-- Aqui enviamos para o temaplate principal os scripts -->
<?php echo $this->endSection(); ?>