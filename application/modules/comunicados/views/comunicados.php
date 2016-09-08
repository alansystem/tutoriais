<h1 style="color:green">Comunicados</h1>
<hr>


<?php 
foreach ($comunicados as $key => $value) {
	echo '<h3>'.$value->titulo.'</h3>';
	echo $value->conteudo;
	echo '<hr>';
}
?>
