<?php require_once("../conexao/conexao.php"); ?>
<?php require_once("incluir/funcoes.php"); ?>

<?php
    if ( isset($_POST['enviar']) ) {
        if ( enviarMensagem($_POST) ) {
            $mensagem = "Mensagem enviada com sucesso!";
        } else {
            $mensagem = "Erro no envio";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Contato</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../lib/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../lib/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../lib/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../lib/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../lib/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../lib/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../lib/css/util.css">
	<link rel="stylesheet" type="text/css" href="../lib/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact2" style="background-image: url('../lib/images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form" action="contato.php" method="post">
					<span class="contact2-form-title">
						Contato
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="nome" required>
						<span class="focus-input2" data-placeholder="NOME"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="email" required>
						<span class="focus-input2" data-placeholder="EMAIL"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="mensagem" required></textarea>
						<span class="focus-input2" data-placeholder="MENSAGEM"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								Enviar sua mensagem
							</button>
						</div>
					</div>

					<?php
                        if( isset($mensagem) ) {
                            echo "<p>" . $mensagem . "</p>";
                        }
                    ?>  
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="../lib/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../lib/vendor/bootstrap/js/popper.js"></script>
	<script src="../lib/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../lib/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../lib/js/main.js"></script>

</body>
</html>

<?php
    //Fechar conexão
    mysqli_close($conecta);
?>
