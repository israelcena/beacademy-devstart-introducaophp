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
    $result = $value1 + $value2;
    echo "O resultado da soma é: $result";
}

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para Home</button>";
?>
