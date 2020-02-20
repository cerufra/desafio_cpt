<?php
require '../conexao/conexao.php';


$pagina = isset($_GET['p'])?$_GET['p']:'';
switch ($pagina) {
    case "add":
       $nom_cliente = $_POST['nom_cliente'];
       $email_cliente = $_POST['email_cliente'];
       $senha_cliente = $_POST['senha_cliente'];
       $cel_cliente = $_POST['cel_cliente'];

       $login = pg_query($conexion,"INSERT INTO public.tb_cliente(nome, email, senha, celular)  VALUES ('$nom_cliente','$email_cliente','$senha_cliente','$cel_cliente')");
        break;
    case "edit":
       $nom_cliente = $_POST['nom_cliente'];
       $email_cliente = $_POST['email_cliente'];
       $senha_cliente = $_POST['senha_cliente'];
       $cel_cliente = $_POST['cel_cliente'];
              $cod_cliente = $_POST['cod_cliente'];
        $login = pg_query($conexion,"UPDATE public.tb_cliente  SET  nome='$nom_cliente', email='$email_cliente', senha='$senha_cliente', celular='$cel_cliente' WHERE codigo='$cod_cliente'");
        break;
    case "del":
    $cod_cliente = $_POST['cod_cliente'];
        $login = pg_query($conexion,"DELETE FROM public.tb_cliente  WHERE codigo ='$cod_cliente'");
        break;
        
    default:
        echo " ";
}
 ?>