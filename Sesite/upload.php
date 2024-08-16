<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uploadDir = 'uploads/';  // Diretório onde os arquivos serão armazenados
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);

    // Verifica se o diretório existe, se não, cria-o
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Tenta mover o arquivo carregado para o diretório de destino
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo "Arquivo enviado com sucesso! <a href='$uploadFile'>Clique aqui para baixar</a>";
    } else {
        echo "Erro ao enviar o arquivo!";
    }
}
?>
