<?php
$mensagem = "
	Nome: $_POST[nome]
	E-mail: $_POST[email]
	Linkedin: $_POST[linkedin]
	GitHub: $_POST[git]
    Áreas: $_POST[areas]
    Curriculo: $_POST[impCurriculo]
	Foto: $_POST[impFoto]";


$dest = 'wilsonvieira1994@gmail.com';

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
		alert( 'Erro o e-mail não foi enviado, tente novamente mais tarde.' );
		history.go( -1 );
	</script>
	<?php
}
?>