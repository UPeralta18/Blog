<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Página Inicial</title>
	<link href="./estilo.css" rel="stylesheet" /><!--Estilo CSS padrão todas as páginas-->
</head>
<body>
	<?php require('./head.php');//Cabeçalho padrão ?>

	<div id="conteudo">
		<?php
			
			$totalNoticias = "5";

			if(isset($_GET['pagina']))
	    		$pagina=$_GET['pagina'];
	    	else
	    		$pagina = "1";

			$inicial = $pagina - 1;
			$inicial = $inicial * $totalNoticias;

			//Busca usada mais de uma vez
			$sql = "SELECT * FROM noticia";

		    $limite = $bd->query("$sql ORDER BY id_noticia desc LIMIT $inicial, $totalNoticias");
		    $todasNoticias = mysqli_num_rows($bd->query($sql)); //numero total de noticias
		    $totalPagina = $todasNoticias / $totalNoticias;

		    //Visualização de Noticia
		    while ($noticias = mysqli_fetch_array($limite))
		    {
		    	echo '<a href="./leitura.php?id_noticia='.$noticias['id_noticia'].'"><div id="noticia"><h1>'.$noticias['titulo'].'</h1>';
		    	echo '<h2>'.$noticias['resumo'].'</h2></div></a>';
		    }

		    
		    
		?>
			<div id="paginacao">
				<?php
					//links para passar de página
					$anterior = $pagina -1;
					$proximo = $pagina +1;
					if ($pagina>1)
						echo '<a href="?pagina='.$anterior.'"><- Anterior</a>';

					echo ' (°u°) ';

					if($pagina < $totalPagina)
						echo '<a href="?pagina='.$proximo.'">Próxima -></a> ';
				?>
			</div>
	</div>

</body>
</html>