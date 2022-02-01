<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <title>BDW</title>
</head>

<body>
  <header>
    <nav>
      <img src="/image/logo.png" alt="Logo Tiago Oliveira">
      
      <a href="index.php"><h1>Tiago Oliveira</h1></a>
    </nav>
  </header>
  <main>
    <h1> Pratica PHP e MySQL </h1>
     <?php 
        $nome = "Tiago";
        $idade = "23";
        $altura = "1.75";
        echo "Meu primeiro nome é " .$nome. " tenho " .$idade. " anos e " .$altura. " de altura. ";
        echo "<br> soma " .($idade + $altura);
        $texto ="Era uma vez um programador. ";
        echo "<p>Tamanho: " .strlen($texto). "</p>";
    ?>

     <?php
  $servername = "sql205.epizy.com";
  $username = "epiz_30955639";
  $password = "yKCtZAz4Nk2Z";
  $dbname = "epiz_30955639_meubanco";

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

  </main>
  
  <footer>
    <h1>Banco de dados para Web</h1>
    <h2>Sobre</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates est incidunt tenetur ab, nemo sed quia odio
      omnis eum cumque molestiae. Laborum a cum inventore et odit eveniet, expedita possimus.</p>
    <div class="linguagens">
      <h2>Tecnologias</h2>
      <div class="imgstech">
        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML"><img src="/image/HTML.png" alt="Logo HTML"></a>
        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS"><img src="/image/CSS.png" alt="Logo HTML"></a>


      </div>
    </div>
    <h2>Referências</h2>
    <div class="nameimg">
      <a href="https://www.youtube.com/channel/UCWUVAPzYPj1sk6krbnyIgMg"> Aquiles Burlamaqui <img
          src="/../../image/youtube.png" alt="Logo Youtube"></a>
    </div>

  </footer>

   
</body>

</html>