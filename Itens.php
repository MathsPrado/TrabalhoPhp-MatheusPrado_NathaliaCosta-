<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Compra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/cssItens.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
    <header class="header">

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


  </nav>
 
  <header class="special container" >

    <h1 style="width: 63%; height:19%; text-align: -webkit-right;"> Lista de Compras</h1>
    <br></br>

    <form action="orcamento.php" style="text-align: center; width: 100%;  padding: 46px 359px; " method="post">
        
   
    
  
    <div class="prod-card">
      <div class="img">
        <img src="css/img/papel.jpg" alt="">
      </div>
      <div class="prod-info">
        <h2>TRIAX PAPEL DE PAREDE </h2>
        <span class="desc">Cor: cinza/bege   52 CM X 10 M <br> ID:332675</span>
        <br>
        <span class="price"><i class="ion-icon-logo-usd"></i>R$ 200.00</span>
        <h3>Especificações
        </h3>
        <h5> Papel decorativo vinilizado, para parede, em rolo de 52cm x 10m. <br>Necessita de cola para instalação (vendida separadamente).</p>
          <p>Limpeza: Pano levemente umedecido com água e sabão neutro.</p>
          <p> Cuidados: Não utilizar produtos químicos ou abrasivos na limpeza.</p>
        <span>
        
          <br>
      
    
        </span>
        <br>
       
        <!-- <a class="addbtn" href="#"><i class=""></i>Add to Cart</a> -->
        <input type="checkbox" name="prod1" style=" -webkit-transform: scale(2);" value="200.00">
      </div>

    
    </form>
    <div class="prod-card2">
      <div class="img">
        <img src="css/img/cime.jpg" alt="">
      </div>
      <div class="prod-info">
        <h2>Cimento Todas As Obras 50kg </h2>
        <span class="desc">Cód: 604691</span>
        <br>
        <span class="price"><i class="ion-icon-logo-usd"></i>R$ 170.00</span>
        <h3>Especificações
        </h3>
        <h5> O único com propriedades de Silicatos de cálcio, alumínio e ferro, 
          <br> trazendo maior resistência, aderência, elasticidade e economia.
  
   
       
   </h5>
        <span>
    
          <br>
      
     
        </span>
        <br>
        <br>
        <input type="checkbox" name="prod2" style=" -webkit-transform: scale(2);" value="170.00">

      </div>
      <br></br>
      <br></br>
      <div class="prod-card3">
        <div class="img">
          <img src="css/img/piso.jpg" alt="">
        </div>
        <div class="prod-info">
          <h2>Piso Bold Ethios Cinza 45x45cm </h2>
          <span class="desc">Cód: 715337</span>
          <br>
          <span class="price"><i class="ion-icon-logo-usd"></i>R$ 180.00</span>
          <h3>Especificações
          </h3>
          <h5> Produto possui uma variação de tonalidade leve, <br>
            e/ou no padrão dentro de cores similares. </p>
 
          <span>
    
            <br>
          </span>
       
          <br>
          <br>
          <input type="checkbox" name="prod3" style=" -webkit-transform: scale(2);" value="180.00">
  
          <br> <br></br></br>
          <p>
						<input type="submit" class="btn btn-success"  name="enviar" value="Enviar" />
					</p>

        </div>
        
				
</header>

</header>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
    
        
   
     $(function() {
   $(".navigation__icon").click(function() {
     $(".navigation").toggleClass('navigation-open');
   });
 });
  
    

</script>
    </div>
</body>
</html>