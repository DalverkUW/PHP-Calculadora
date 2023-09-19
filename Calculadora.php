<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <h1>Calculadora en php</h1>
        <label>Numero 1: </label>
        <input type="number" name="num1" required><br><br>
        <label>Numero 2: </label>
        <input type="number" name="num2" required><br><br>
        <label>Operación: </label>
        <select name="operacion" >
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="mult">Multiplicar</option>
            <option value="div">Dividir</option>
        </select>
        <input type="submit" name="submit">
    </form>  
    
    <?php    
    if (isset($_POST['submit'])) {        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;

            case 'resta':
                $resultado = $num1 - $num2;
                break;

            case 'mult':
                $resultado = $num1 * $num2;
                break;
            
            case 'div':
                $resultado = $num1 / $num2;
                break;

            default:
                $resultado = 'Sin resultado';
                break;
        }

        echo "<br> Resultado: ".$resultado;
    }
?>

</body>
</html>