<?php
$mensagem = "

	nome: $_POST[nome]
	email: $_POST[email]
	areas: $_POST[areas]
	git: $_POST[git]
	linkedin: $_POST[linkedin]
	impCurriculo: $_POST[impCurriculo]
	impFoto: $_POST[impFoto]";

$dest = 'c.henrique1309@gmail.com';

$enviar = mail( $dest, 'Banco SPW', $mensagem);


if($enviar){
	?>
<script>
	alert( 'Enviado com Sucesso!');
	history.go(-1);
</script>
<?php
}else{
?>
<script>
	alert( 'Erro');
	history.go(-1);
</script>
<?php
}
?>