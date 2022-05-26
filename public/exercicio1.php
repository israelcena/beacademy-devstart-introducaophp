<h1>Calculadora</h1>
<form action="" method="post">
    <input type="number" name="value1" placeholder="Digite um Valor 1">
    <input type="number" name="value2" placeholder="Digite um Valor 2">
    <button> Calcular </button>
</form>
<?php
if(isset($_POST['value1']) && isset($_POST['value2'])){
    $value1 = $_POST['value1'];
    $value2 = $_POST['value2'];
    $resultSum = $value1 + $value2;
    $resultSub = $value1 - $value2;
    $resultMult = $value1 * $value2;
    $resultDiv = $value1 / $value2;
    $resultMod = $value1 % $value2;
    $resultExp = $value1 ** $value2;
    echo "O resultado da soma é: $resultSum" . "<br>";
    echo "O resultado da subtração é: $resultSub" . "<br>";
    echo "O resultado da multiplicação é: $resultMult" . "<br>";
    echo "O resultado da divisão é: $resultDiv" . "<br>";
    echo "O resultado do módulo é: $resultMod" . "<br>";
    echo "O resultado da exponenciação é: $resultExp" . "<br>";
}

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para Home</button>";
?>
