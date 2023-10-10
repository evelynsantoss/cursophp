<?php 
session_start();
print_r($_SESSION);
?>

<p> 
     <b>Nome: </b> <?= $_SESSION['nome'] ?> <br>
     <b>Email: </b> <?= $_SESSION['email'] ?> <br>
</p>

<?php 
   $_SESSION['email'] = "guilhermefilho@hotmail.com";
?>

<p>
   <a href="/sessao/basico_sessao_alterar.php">
      Voltar
   </a>
</p>

<p>
  <a href="/sessao/basico_sessao_limpar.php">
      Limpar Sessão
  </a>
</p>