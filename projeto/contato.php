<?php
include 'bootstrap.php';
include 'cabecalho.php';
include 'menu.php';
?>

<head>
<link rel="stylesheet" href="css/contato.css">
</head>

<body style="background-color:#313538 ">
      <section>
        <h2>Contato</h2>
        <form action="https://api.staticforms.xyz/submit" method="post">
          <label>Nome</label>
          <input type="text" name= "name" placeholder="Digite seu nome" autocomplete="off">
          <label>Email</label>
          <input type="email" name="email" placeholder="Digite seu email" autocomplete="off">
          <label>Mensagem</label>
          <textarea name="message" cols="30" rows="10" placeholder="Digite sua mensagem"></textarea>
          <button type="submit">Enviar</button>

          <input type="hidden" name="accessKey" value="735c687e-567f-4b06-8891-0020220cc22b"> 
          <input type="hidden" name="redirectTo" value="">
        </form>
      </section>     
</body>
</html>