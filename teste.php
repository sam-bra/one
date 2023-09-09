<?php
$counterFile = "counter.txt";

// Verifica se o arquivo existe, se não, cria o arquivo e inicia o contador com zero.
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0");
}

// Lê o número atual de visitantes do arquivo.
$counter = (int)file_get_contents($counterFile);

// Incrementa o contador.
$counter++;

// Salva o novo valor no arquivo.
file_put_contents($counterFile, $counter);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contador de Visitantes</title>
</head>
<body>
    <h1>Bem-vindo à minha página!</h1>
    <p>Esta página já foi visitada <?php echo $counter; ?> vezes.</p>
</body>
</html>
