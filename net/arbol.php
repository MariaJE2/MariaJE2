<?php
if (isset($_POST['send'])) {
    $archivo = fopen('./a3.txt', 'r');
    $linea = fgets($archivo);
    echo $linea;
    if ($linea==4) {
        echo "Hola";
        fclose($archivo);
        $archivo = fopen('./a3.txt', 'w');
        fwrite($archivo, 3);
        fclose($archivo);
    } else {
        echo "chau";
        fclose($archivo);
        $archivo = fopen('./a3.txt', 'w');
        fwrite($archivo, 4);
        fclose($archivo);
    }
    // while (!feof($archivo)) {
    //     $linea = fgets(($fichero));

    // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="text">
        <button type="submit" name="send">send</button>
    </form>
</body>
</html>