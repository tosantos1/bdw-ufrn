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
    <h1> Cadastro </h1>
    <br>
    <form class="form" action="/actionpage.php" method="post">
        E-mail:
        <input type="text" name="email">
        Nome
        <input type="text" name="nome">
        Senha
        <input type="password" name="senha">
        <input type="submit" value="Cadastrar">
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