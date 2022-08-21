<h1>Cadastrar novo álbum</h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group col-md-12">
    <input type="text" name="name" placeholder="nome" class="form-control">
    </div>
    <br>
    <div class="form-group col-md-12">
    <input type="file" name="image" class="form-control">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="?page=albuns" class="btn btn-warning">Voltar</a>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $album = $_POST['name'];
    $path = "albums/{$album}";
    if(!is_dir($path)){
        mkdir($path);
    }

    $file = $_FILES['image'];
    $fileInfo = explode('.', $file['name']);
    $extension = $fileInfo[1];
    $nameImage = $_POST['name'] . '.'. $extesion;

    if(move_uploaded_file($file['tmp_name'], $path.'/'.$nameImage)){
        header('Location: ?page=albums');
    }else{
       echo 'Falha no upload'; 
    }

} 

?>