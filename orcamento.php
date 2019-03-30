<?php 
	if (isset($_POST['e'])){
        $e=$_POST['e'];
	}else {
		$e="";
	}
	if (isset($_POST['d'])){
		$d=$_POST['d'];
	}else {
        $d="";
	}
?>
    
<!DOCTYPE HTML>

<html>

<head>
	<title>Twenty by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
	 <link rel="stylesheet" href="css/cssCadastro.css"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">

</head>
<nav class="navigation">
    
	<section class="logo"></section>

	<section class="navigation__icon">
	  <span class="topBar"></span>
	  <span class="middleBar"></span>
	  <span class="bottomBar"></span>
	</section>

	<ul class="navigation__ul">
	  <li><a href="index.html">HOME</a></li>
	  <li><a href="orcamento.php">ORÇAMENTO</a></li>
	  <li><a href="team.html">TEAM</a></li>
	  <li><a href="Compra.html">Compra</a></li>
	  <li><a href="">FAQ</a></li>
	</ul>

	<section class="navigation__social">
	  <ul class="navigation__social-ul">
		<li>
		  <a href="" class="social-icon"></a>
		</li>
		<li>
		  <a href="" class="social-icon"></a>
		</li>
		<li>
		  <a href="" class="social-icon"></a>
		</li>
		<li>
		  <a href="" class="social-icon"></a>
		</li>
	  </ul>
	</section>

  </nav>
<body  class="index is-preload"  >
	<div id="page-wrapper" >


	<article id="main">

			<header class="special container" >

				<h1 style="width: 58%; height:19%; text-align: -webkit-right;"> Orçamento</h1>
				<br></br>

				<form action="ler.php" style="text-align: center; width: 100%;  padding: 46px 359px; " method="post">

					<p> Nome:
						<input type="text" style="border: solid;" name="nome" /> </p>
					<p> Sobrenome:
						<input type="text" style="border: solid; " name="sobrenome" /> </p>
					<p> Senha
						<input type="password" style="border: solid; " name="senha" /> </p>
					<p>SEXO:
						<input type="radio" name="sexo" value="Masculino" />Masculino
						<input type="radio" name="sexo" value="Feminino" />Feminino
					</p>
					<p> Formas de pagamento:</p>
						<input type="checkbox" name="check2" value="Ingresso2">á vista (10% de desconto)
						<br></br>
						<input type="checkbox" name="check3" value="Ingresso2"> cartao de crédito</p>
					<p> Escolha a cidade de retirada
						<Select name="cidade">
							<option value=""></option>
							<option value="Itupeva">Itupeva</option>
							<option value="Cabreúva">Cabreúva</option>
							<option value="Jundiaí">Jundiaí</option>
							<option value="Várzea Paulista">Várzea Paulista</option>
							<option value="Campo Limpo Paulista">Campo Limpo Paulista</option>
							<option value="Jarinu">Jarinu</option>
							<option value="Cajamar">Cajamar</option>
							<option value="Louveira">Louveira</option>
							<option value="Vinhedo">Vinhedo</option>

						</Select>
					</p>

					<label for="datanascimento">Data Nascimento: </label>
					<input type="date" class="form-control" value="datanascimento" style="width: 97%;" aria-describedby="DatanascimentoHelp" placeholder="Digite a data de nascimento">
					<br></br>

                    <input type="hidden" name="holdname" value="<?php echo "$e" ?>">  
                   
					<p>
						<textarea name="come" cols="40" rows="3">Deixe um comentário!!!</textarea>
					</p>


					<p>
						<input type="submit" name="enviar" value="Enviar" />
					</p>
					<p>
						<input type="reset" name="resetar" value="Limpar" />
					</p>
					<p>
						<input type="button" name="botao" value="BOTÃO" />
					</p>
				</form>
                <h4> <?php  echo $e; ?></h4>
                <h4 style=" padding-left: 237px;">Após a confirmação do cadasto ele será salvo como ingresso.txt</h4>
              

			</header>
		</article>
		<section id="cta">
			<footer>
		    </footer>
		</section>
		
	

	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script>
		
			
	   
		 $(function() {
	   $(".navigation__icon").click(function() {
		 $(".navigation").toggleClass('navigation-open');
	   });
	 });
	  
				   
		</script>
</body>

</html>
