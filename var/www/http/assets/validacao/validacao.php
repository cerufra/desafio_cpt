<?php
require '../conexao/conexao.php';
     
    
       $email_login = $_POST['email_login'];
       $senha_login = $_POST['senha_login'];
       $login = pg_query($conexion,"SELECT codigo, nome, email, celular, senha FROM public.tb_cliente where email='$email_login', senha='$senha_login' ");
       $fila = pg_num_rows($login);
       if ( $fila>0) {

header('Location: routing.php/?menu=cliente');
      }
 ?>