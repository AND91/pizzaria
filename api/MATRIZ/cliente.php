<?php

	$url = 'http://localhost/pizzaria/api/v1';

	$classe = 'estoque';
	$metodo = 'mostrar';

	$montar = $url.'/'.$classe.'/'.$metodo;

	$retorno = file_get_contents($montar);

	var_dump(json_decode($retorno, 1));