<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banco de dados para WEB</title>
</head>
<body>
  <h1>Sistema WEB</h1>

  <?php 
    $nome = "Tiago";
    $idade = "23";
    $altura = "1.75";
    echo "Meu primeiro nome é " .$nome "tenho" .$idade "anos e " .$altura "de altura.";
    echo "<br> soma " .($idade + $altura);
    $texto ="Era uma vez um programador. ";
    echo "<p>Tamanho: " .strlen($texto) . "</p>";
  ?>

  <?php
  $servername = "sql100.epizy.com";
  $username = "epiz_30944840";
  $password = "fiBnu3RYi8P";
  $dbname = "epiz_30944840_teste";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM usuario";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " " . $row["email"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();

  ?>
</body>
</html>