<?php
include 'bootstrap.php';
include 'cabecalho.php';

session_start();
?>

<section class="vh-100 gradient-custom" style="background-color: 00285f;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <?php
            if(isset($_SESSION['result'])):
            ?>
            <div class="alert alert-success" role="alert">
              Cadastro realizado com sucesso!
            </div>
            <?php
            unset($_SESSION['result']);
            endif;
            if(isset($_SESSION['nao_autenticado'])):
            ?>
          <div class="alert alert-danger" role="alert">
            Usuario ou senha invalidos! 
          </div>
          <?php
          endif;
          unset($_SESSION['nao_autenticado']);
          ?>
          <form name="form_login" method="get" action="entrar.php" autocomplete="off">
            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Digite seu login e senha!</p>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">E-mail</label>
                <input type="email" name="email_login" id="typeEmailX" class="form-control form-control-lg" placeholder="Digite aqui o seu e-mail" />
              </div>
              <br>
              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX">Senha</label>
                <input type="password" name="senha_login" id="typePasswordX" class="form-control form-control-lg" placeholder="Digite aqui a sua senha" />
              </div>

              <div>
              <p class="mb-0">Não tem conta? 
              <a href="form.php" class="text-white-50 fw-bold">Cadastre-se</a>
              </p>
              <br>
            </div>              
              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
            </div>
          <form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>