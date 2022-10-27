<!DOCTYPE html>
<html>
  <head>	
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  </head>
        
<body id="body">
   <!-- Corpo -->
   <div id="corpo">
      <!-- Formulário -->
      <div id="formulario">
         <form name="form_cadastro" method="get" action="cadastro.php" autocomplete="off">
           <fieldset>
            <legend>Cadastro</legend>
            <div class="data direita">
               <label for="data_de_nascimento">Data de Nascimento:</label>
               <br>
               <input type="date" name="data_nascimento" required/>
            </div>

            <div class="esquerda">
               <label for="nome">Nome Completo:</label><br>
               <input type="text" name ="nome" size="35" placeholder="Nome Completo">
            </div>
            <div class="direita">
             <label for="genero">Gênero</label><br>
             <select name ="genero" required>
                <option selected disabled="disabled"></option>
                <option value="H">Homem</option>
                <option value="M">Mulher</option>
                <option value="N">Outro</option>
             </select>
            </div>
            <div class="esquerda">
               <label for="telefone">Senha:</label><br>
               <input type="password" id="password" name="password" minlength="6" maxlength="20" size="20" placeholder="De 6-20 caracteres" class="inp_psw" required/>
            </div>
            <div class="esquerda" >
               <label for="celular">Confirmar senha:</label><br>
               <input type="password" id="confirmar_password" name="confirmar_password" minlength="6" maxlength="20" size="20" placeholder="De 6-20 caracteres" class="inp_psw" required/>
            </div>  
            <div class="esquerda" id="">
               <label for="email">E-mail:</label><br>
               <input type="text" name="email" size="35" placeholder="exemplo@email.com">
            </div>
            <br>
            <input type="reset" value="Limpar Campos" class="botao">
            <a href="login.php"><input type="button" value="Voltar" class="botao"></a>
            <input type="submit" value="Cadastrar" class="botao"> 
            </fieldset>
        </form>
      </div>
      <!-- /Formulário -->
   </div>
   <!-- /Corpo -->
   </body>
   </html>