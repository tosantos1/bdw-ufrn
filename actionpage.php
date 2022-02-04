<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <title>BDW - Cadastro</title>
</head>

<body>
  <header>
    <nav>
      <img src="/image/logo.png" alt="Logo Tiago Oliveira">
      <h1>Tiago Oliveira</h1>
    </nav>
  </header>
  <main>
    <h1> Salvando... </h1>
    <br>

    <?php
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = sha1($_POST['senha']);

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

            $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('".$nome."', '".$email."', '".$senha."')";

            if ($conn ->query($sql) === TRUE) {
                header('Location: cadastro.php?msg=Usuario cadastro com sucesso!');
                die();
            } else {
                echo "Error: " .$sql ."<br>" . $conn->error;
            }
            
            $conn->close();
        ?>
    <br>

        <a href="index.php" class="bnt-voltar-cadastro" > Voltar </a>
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