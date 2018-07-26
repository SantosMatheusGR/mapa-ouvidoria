<?php

/**
 * sobre funções de ouvidoria:
 * material didático para aula de programação III conforme livro (outro autor)
 * 
 * funções recebem $connection e usam funções procedurais do mysqli (conforme livro)
 * dicas:
 * - conhecer mysqli OO (orientado a objetos)
 * - estudar e iniciar uso de prepare e bind param nos SQLs para aumentar segurança
 * - estudar e iniciar uso de PDO (ao invés de mysqli OO)
 */

/**
 * consulta protocolo em ouvidoria
 * usa mysqli procedural conforme livro
 */
function consultar($connection, $protocolo)
{
	// validando protocolo para apenas receber numeros e letras
	// usando expressao regular para filtro
	$protocolo = preg_replace("/[^a-zA-Z0-9]+/", "", $protocolo);

	// preparando SQL
	$sql = "select * from ouvidoria where protocolo = '%s'";
	$sql = sprintf($sql, $protocolo);

	// executando SQL
	$consulta = mysqli_query($connection, $sql);
	
	if ($consulta) {
		return mysqli_fetch_assoc($consulta);
	}

	return false;
}

