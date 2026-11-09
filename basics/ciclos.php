<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos en PHP</title>
</head>
<body>
    <?php
    $limite = 50;
    // CICLO FOR
    for ($i=0; $i <= $limite; $i++) { 
        # Impresión de los números del 0 al 50
        echo "Número: $i<br>";
    }

    // CICLO WHILE
    $limite = rand(50, 100);
    $inicio = 1;
    echo "<hr>";
    # Impresión de números del 1 al limite aleatorio (entre50 y 100)
    while ($inicio <= $limite) {
        echo "[WHILE] Número: ".$inicio."<br>";
        $inicio++;
    }

    // DO WHILE
    $dia = date("d");
    $inicio = rand(10,20);
    # Mostrar los números de un número random (entre 10 y 20) a la fecha actual
    do {
        echo "[DO..WHILE] Número: $inicio";
        $inicio++;
    } while ($inicio <= $dia);

    # Mostrar la Tabla de multiplicar del 2.
    # Utilizar FOR, WHILE y DO...WHILE
    ?>
</body>
</html>