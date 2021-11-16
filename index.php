<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <!-- esta sequecção é destinada ao nome central da app. -->
      <header>Real Time WebChat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
              <!-- aqui abaixo temos o primeira solicitação ao usuario por intermedio de uma caixa de texto, 
                        neste caso o seu nome.  -->
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
           <!-- aqui abaixo temos a segunda solicitação por intermedio de uma caixa de texto, 
                        que é o ultimo nome do usuario. -->
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
         <!-- aqui temos uma div que solicitará dentro dela pela caixa de texto o e-mail do usuario. -->
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
              <!-- aqui temos uma div que recebe a palavra passe do usuario por intermedio de uma 
                    caixa de texto especifica para password. -->
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <!-- esta classe recebe um objecto que representa um olho
                         para dar um efeito mais realista, meramente estetico. -->
          <i class="fas fa-eye"></i>
        </div>
                   <!-- este campo abaixo é detalhado para receber um arquivo de imagem do usuario. -->
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
           <!-- este campo abaixo,  é um botão de envio de elementos para o cadastro final. -->
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
            <!-- aqui temos um espaço do link de inscrição.  -->
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
