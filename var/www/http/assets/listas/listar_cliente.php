<?php
	require '../conexao/conexao.php';
	$cliente = pg_query($conexion,"SELECT codigo, nome, email, celular, senha
	FROM public.tb_cliente");
?>