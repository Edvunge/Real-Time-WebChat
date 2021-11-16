<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
<!-- este é o formulario de login no webchat, onde o usuario pode se logar com o e-mail e a sua palavra passe. -->
  <div class="wrapper">
    <section class="form login">
<!-- esta sequecção é destinada ao nome central da app. -->
      <header>Real Time WebChat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
<!-- esta div a seguir representa uma mensagem de erro, apresentada ao usuario.  -->
        <div class="error-text"></div>
<!-- aqui temos uma div que solicitará dentro dela pela caixa de texto o e-mail do usuario. -->
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
<!-- aqui temos uma div que recebe a palavra passe do usuario por intermedio de uma caixa de texto 
                    especifica para password. -->
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
<!-- esta classe recebe um objecto que representa um olho para dar um efeito mais realista, 
                        meramente estetico. -->
          <i class="fas fa-eye"></i>
        </div>
<!-- este campo abaixo,  é um botão de envio de elementos para o cadastro final. -->
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
<!-- aqui temos um espaço do link de inscrição.  -->
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
</body>
</html>