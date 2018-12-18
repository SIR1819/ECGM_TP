<?php
//var_dump($_FILES);
//echo ("<br>");
//var_dump($_POST);

$max = 1000000;

$upload_path ="uploads/";
$upload_filename = $_FILES['upfile']['name'];

$upload_filepath = $upload_path . $upload_filename;




// tamanho
if ($_FILES['upfile']['size']>$max) {
    exit("falha no upload - tamanho");
}

// check do mime type
if ($_FILES['upfile']['type'] !== "image/jpeg" && $_FILES['upfile']['type'] !== "image/png") {
    echo "falha no upload - nao é imagem png ou jpeg";
    exit();
}

$type = mime_content_type ($_FILES['upfile']['tmp_name']);

echo "<br>";
echo "tipo verdadeiro".$type;
echo "<br>";
echo "tipo files".$_FILES['upfile']['type'];
echo "<br>";

// check type mais seguro
if ($type !== "image/jpeg" && $type !== "image/png") {
echo "falha no upload - nao é imagem png ou jpeg";
exit();
}

//check if file already exists

if (file_exists($upload_filepath)) {
    echo "ficheiro já existente";
    exit;
}

if (move_uploaded_file($_FILES['upfile']['tmp_name'],$upload_filepath)) {
    echo "sucesso";
} else {
    echo "falha no upload";
}

?>