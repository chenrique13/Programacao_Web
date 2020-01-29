<?php
$mensagem = "
	Nome: $_POST[nome]
	E-mail: $_POST[email]
	Áreas: $_POST[areas]
	GitHub: $_POST[git]
	linkedin: $_POST[linkedin]
	Curriculo: $_POST[impCurriculo]
	Foto: $_POST[impFoto]";

$dest = 'c.henrique1309@gmail.com';

$enviar = mail( $dest, 'Banco SPW', $mensagem );


if ( $enviar ) {
	?>
	<script>
		alert( 'Enviado com Sucesso!' );
		history.go( -1 );
	</script>
	<?php
} else {
	?>
	<script>
		alert( 'Erro' );
		history.go( -1 );
	</script>
	<?php
}
?>