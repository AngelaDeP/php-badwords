<?php

$paragrafo = 'Ecco il mio primo paragrafo tramite PHP';
$lunghezzaParagrafo = strlen($paragrafo);

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
    <h1>PARAGRAFO</h1>
    <p><?php echo $paragrafo ?></p>
    <h4>La lunghezza di questo paragrafo è di <?php echo $lunghezzaParagrafo ?></h4>
</body>
</html>