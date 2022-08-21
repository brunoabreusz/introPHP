<h1>Músicas do álbum <?=$_GET['album']?></h1>

<br>

<a href="?page=new_music&album=<?=$_GET['album']?>" class="btn btn-dark">Cadastrar nova música</a>

<?php

$album = $_GET['album'];
$musics = getMusics($album);
foreach($musics as $music):
?>

<div class="col-12">
    <img src="" alt="">
    <audio src="<?=$music?>" controls></audio>
</div>

<?php
endforeach;
?>

<a href="?page=albuns" class="btn btn-warning">Voltar</a>