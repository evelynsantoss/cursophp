<?php 
session_start();
session_destroy();
header('Location: basico_sessao.php');//Acessar a pagina basico_sessao.php
?>