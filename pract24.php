<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 24</title>
</head>
<body>
    <center>
    <header><h1>Numeros par o inpar</h1></header>
    <main>
     <section>
<form action="" method="POST">
<label for="num">Ingresa un numero</label>
<input type="number" id="num" name="num"><br><br>
<button type="submit">VERIFICAR</button><br><br>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $num=$_POST['num'];
    if($num %2== 0){
        echo "El numero $num es PAR";
    } else {
        echo "El numero $num es INPAR";
    }
}

?>

     </section>
     </main>
     <a href="pract25.php">Siguiente practica</a>
     <footer> Griselda Alvarez Santiago </footer>
     </center>
</body>
</html>