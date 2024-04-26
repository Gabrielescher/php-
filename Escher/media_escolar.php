<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apresentando dados da média escolar</title>
</head>
<body>
  <div id="container">
    <h3>Média Escolar </h3>
<form>
       <label>RA:</label>
       <input type="number" name="RA"required><br>

       <label>Aluno:</label>
      <select>
    <option value="Gabriel Escher">Gabriel Escher</option>
    <option value="Silvio Santos">Silvio Santos</option>
    <option value="Junior Silva">Junior Silva</option>
    <option value="Beatriz Fernanda">Beatriz Fernanda</option>
    </select>
    
    <label>DataNascimento:</label>
    <input type="date" name="DataNascimento"required><br>
    
    <label>CPF:</label>
    <input type="text" name="CPF" required><br>

    <label>GRAU:</label>
    <select>
    <option value="Alto aprendizado">Alto aprendizado</option>
    <option value="Medio aprendizado">Medio aprendizado</option>
    <option value="Baixo aprendizado">Baixo aprendizado</option>
</select>
    <label>Média:</label>
    <input type="number" name="Media"><br>

    <label>Falta1:</label>
    <input type="number" name="Falta1" min="0" max="200"><br>
    
    <label>Falta2:</label>
    <input type="number" name="Falta2"min="0" max="200"><br>
    
      <label>calcular:</label>
    <input type="submit" name="calcular"><br>

</form>
<?php
if(isset($_POST["calcular"]))
{
    $aluno = $_POST["aluno"];
    $grau = $_POST["grau"];
    $media = $_POST["media"];
    $faltas1 = $_POST["faltas1"];
    $faltas2 = $_POST["faltas2"];

echo "<strong>Nome do aluno: </strong>" .$aluno;
echo "<br><strong>Grau: </strong>" .$grau;
echo "<br><strong>media: </strong>" .$media;
echo "<br><strong>faltas2: </strong>" .$faltas1;
$Total_Faltas = $faltas1 + $faltas2;

echo "hr size ='3' color = 'red'>";
echo "<strong>Total de faltas: </strong>" .$Total_Faltas;
if($media >=6) {
    echo "<p style = 'color:blue'>Aprovado";
}
else {
    echo "<p style = 'color:red'>Reprovado";
}
}
?>





    
    
    
</body>
</html>