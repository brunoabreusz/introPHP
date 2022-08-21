<h1>Cadastrar nova música para o álbum <?=$_GET['album']?></h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group col-md-12">
    <input type="file" name="audio" class="form-control">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="?page=albuns" class="btn btn-warning">Voltar</a>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $album = $_GET['album'];

    $path = "albums/{$album}/musics/";
   
    if(!is_dir($path)){
        mkdir($path);
    }

    if(move_uploaded_file($_FILES['audio']['tpm_name'], $path. $_FILES['audio']['name'])){
        header("Location: ?page=musics&album={$album}");
    }else{
        echo 'Falha';
    }
}

?>