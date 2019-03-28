<?php
	if (isset($_POST['nome'])){
		$nome=$_POST['nome'];
	}else {
		$nome="";
	}
	if (isset($_POST['sobrenome'])){
		$sobrenome=$_POST['sobrenome'];
	}else {
        $sobrenome="";
	}
	if (isset($_POST['senha'])){
		$senha=$_POST['senha'];
	}else{
		$senha="";
	}
	if (isset($_POST['check1'])){
		$check1=$_POST['check1'];
	}else{
		$check1="Esse ingresso não foi escolhido";
	}
	if (isset($_POST['check2'])){
		$check2=$_POST['check2'];
	}else{
		$check2="Esse ingresso não foi escolhido";
	}
	if (isset($_POST['cidade'])){
		$cidade=$_POST['cidade'];
	}else {
		$cidade="";
	}
	if (isset($_POST['datanascimento'])){
		$datanascimento=$_POST['datanascimento'];
	}else{
		$datanascimento="Sem data selecionada";
	}
	if (isset($_POST['come'])){
		$come=$_POST['come'];
	}else{
		$come="Não disse nada";
	}
	if (isset($_POST['sexo'])){
		$sexo=$_POST['sexo'];
	}else {
		$sexo="";
	}

	 $cd = 'Nome:' . $nome . ', senha:' . $senha . 'checkbox'. $check1 . ', checkbnox:' . $check2 . ', Cidade:'. $cidade .', Data de nascimento:'. $datanascimento . ', Comentario:' . $come .', Sexo:' .$sexo;

	$fp = fopen("Ingresso.txt", "a");

	$escreve = fwrite ( $fp , $cd); 

	fclose ($fp);
	
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
	  <li><a href="orcamento.html">ORÇAMENTO</a></li>
	  <li><a href="team.html">TEAM</a></li>
	  <li><a href="">CLIENT</a></li>
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
<body  class="index is-preload" >
	<div id="page-wrapper" >



		
		<!-- Footer -->
		<footer id="footer" style="text-align: center;">
		<p><u>Seus dados pessoais</u></p>
          <p>Nome: <?php echo $nome; ?></p>
		<p>Sobrenome: <?php echo $sobrenome; ?></p>
	<p>Sexo: <?php echo $sexo; ?></p>
		<p>Senha: <?php echo $senha; ?></p>
		<p> escolhido: <?php echo $check1; ?></p>
		<p> escolhido: <?php echo $check2; ?></p>
		<p>Cidade: <?php echo $cidade; ?></p>
		<p>Data de nascimento: <?php echo $datanascimento; ?></p>
		<p>Comentário: <?php echo $come; ?></p>
	
			
		</footer>

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
