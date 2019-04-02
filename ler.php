<?php



date_default_timezone_set('America/Sao_Paulo');
$mes= date("M");

$dia =date("d");

$ano =date("Y");

	$dataat = date('d-m-Y');
 $datatxt = date('d-m-Y', strtotime('+1 week'));

$desconto = 0;
	if (isset($_POST['produto1'])){
		$produto1=$_POST['produto1'];
	}else {
		$produto1=0;
	}
	if (isset($_POST['produto2'])){
		$produto2=$_POST['produto2'];
	}else {
		$produto2=0;
	}
	if (isset($_POST['produto3'])){
		$produto3=$_POST['produto3'];
	}else {
		$produto3=0;
	}

	
	
	if (isset($_POST['qntd'])){
		$qtd1=$_POST['qntd'];
	}else {
		$qtd1=0;
	}
	if (isset($_POST['qntd1'])){
		$qtd2=$_POST['qntd1'];
	}else {
		$qtd2=0;
	}
	if (isset($_POST['qntd2'])){
		$qtd3=$_POST['qntd2'];
	}else {
		$qtd3=0;
	}
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

	if (isset($_POST['check2'])){
		$check1=$_POST['check2'];
		$desconto = 0.10;
	
	}else{
		$check1="";
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
	if (isset($_POST['holdname'])){
		$valorVamove=$_POST['holdname'];
	}else{
		$valorVamove="Sem valor selecionada";
	}

	$valorT=0;
	$valorP1=0;
	$valorP1= $produto1 * (double)$qtd1 ;
	$valorP1= number_format(($valorP1), 2);

	$valorP2=0;
	$valorP2= $produto2 * (double)$qtd2;
	$valorP2 = number_format(($valorP2), 2);

	$valorP3=0;
	$valorP3= $produto3 * (double)$qtd3;
	$valorP3 = number_format(($valorP3), 2);

	$valorT= $valorP3 + $valorP2 + $valorP1;
	$descontoTo = $desconto * $valorT; 
	$descontoTo = number_format(($descontoTo), 2);

	$valorTotal = $valorT - $descontoTo;
	$valorTotal = number_format(($valorTotal), 2);

	$cd = '   Nome: ' . $nome .  "  Jundiai " . $dia . " de " . $mes . " de " . $ano;

	if($qtd1>0){
	
		$cd .= ' ,  produto: ' . $produto1 .', valor total do produto: R$'. $valorP1 . " Quantidade: ". $qtd1 ;
	}

	if($qtd2>0){
		$cd .=  ',  produto:'. $produto2 .', valor total do produto: R$'. $valorP2  ;
	}
	if($qtd3>0){
		$cd .=  ',  produto:'. $produto3 .', valor total do produto: R$'. $valorP3  ;
	}

	 $cd .= ',  Valor de desconto: R$' . $descontoTo  .', Valor total do orçamento: R$'. $valorTotal .', Prazo do Orçamento: :' .$datatxt  ;

	$fp = fopen("Orçamento"."_". $nome . "_" . $dataat . ".txt", "a");

	$escreve = fwrite ( $fp , $cd); 

	fclose ($fp);


	
?>
<!DOCTYPE HTML>

<html>

<head>
	<title>Orçamento</title>
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
      <li><a href="Itens.php">ORÇAMENTO</a></li>
      <li><a href="team.html">TEAM</a></li>
      <li><a href=""></a></li>
      <li><a href=""></a></li>
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



		
		<!-- Footer -->
		<footer id="footer" style="text-align: center; color:aliceblue;">
		<p><u>Seus dados pessoais</u></p>
		<p> <?php echo " Jundiai " . $dia . " de " . $mes . " de " . $ano;?></p>
          <p>Nome: <?php echo $nome; ?></p>
		<p>Sobrenome: <?php echo $sobrenome; ?></p>
	<p>Sexo: <?php echo $sexo; ?></p>

		<p> Desconto de pagamento: <?php echo $check1; ?></p>
		<p>Cidade: <?php echo $cidade; ?></p>
		<p>Data de nascimento: <?php echo $datanascimento; ?></p>
		<p>Comentário: <?php echo $come; ?></p>
		<p> Valor Do orçamento: R$<?php echo number_format(($valorTotal), 2);  ?> </p>
	
			
			<?php  echo 'Prazo valido do orçamento é de até : '.  $datatxt  ."<br>"; ?>

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
