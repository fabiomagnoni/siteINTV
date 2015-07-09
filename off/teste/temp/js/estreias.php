

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:::PUBLICIDADE EM CINEMA:::</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery-unobtrusivelib.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
        <script src="js/jquery-1.1.3.1.pack.js" type="text/javascript"></script>
        <script src="js/jquery.history_remote.pack.js" type="text/javascript"></script>
        <script src="http://www.pimentaria.org/js/jquery.tabs.pack.js" type="text/javascript"></script>
		<script type="text/javascript" src="http://www.pimentaria.org/js/thickbox.js"></script>

        <link href="css/css.css" rel="stylesheet" type="text/css">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        
	<link media="all" type="text/css" rel="stylesheet" href="css/estilo.css">
	<link media="all" type="text/css" rel="stylesheet" href="css/complexos.css">
	<link media="all" type="text/css" rel="stylesheet" href="css/jquery.fancybox.css">
    
        <link href="./teste_files/css" rel="stylesheet" type="text/css">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        
        	<link media="all" type="text/css" rel="stylesheet" href="./teste_files/representantes.css">
	<link media="all" type="text/css" rel="stylesheet" href="./teste_files/jquery.fancybox.css">
        <script async src="./teste_files/analytics.js"></script><script src="./teste_files/modernizr-2.6.2.min.js"></script>
    <style type="text/css">.fancybox-margin{margin-right:16px;}</style></head>
        
<script type="text/javascript" src="jquery/jquery.js"></script>
<script type='text/javascript' src='jquery/jquery-main.js'></script>
    <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" href="css/bjqs.css">

    <!-- some pretty fonts for this demo page - not required for the slider -->
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 

    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    <link rel="stylesheet" href="css/demo.css">

    
	<!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" href="css/bjqs.css">

    <!-- some pretty fonts for this demo page - not required for the slider -->
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 

    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    <link rel="stylesheet" href="css/demo.css">

    <!-- load jQuery and the plugin -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>

<script type="text/JavaScript">
<!--
function chamar_pagina(url){
		 if (url.value != "")
			  self.location = url.value;
	}
//-->
</script>

        <script type="text/javascript">
$(function() {

                $('#container-1').tabs();
                $('#container-2').tabs(2);
                $('#container-3').tabs({ fxSlide: true });
                $('#container-4').tabs({ fxFade: true, fxSpeed: 'fast' });
                $('#container-5').tabs({ fxSlide: true, fxFade: true, fxSpeed: 'normal' });
                $('#container-6').tabs({
                    fxFade: true,
                    fxSpeed: 'fast',
                    onClick: function() {
                        alert('onClick');
                    },
                    onHide: function() {
                        alert('onHide');
                    },
                    onShow: function() {
                        alert('onShow');
                    }
                });
                $('#container-7').tabs({ fxAutoHeight: true });
                $('#container-8').tabs({ fxShow: { height: 'show', opacity: 'show' }, fxSpeed: 'normal' });
                $('#container-9').tabs({ remote: true });
                $('#container-10').tabs();
                $('#container-11').tabs({ disabled: [3] });

                $('<p><a href="#">Disable third tab<\/a><\/p>').prependTo('#fragment-28').find('a').click(function() {
                    $(this).parents('div').eq(1).disableTab(3);
                    return false;
                });
                $('<p><a href="#">Activate third tab<\/a><\/p>').prependTo('#fragment-28').find('a').click(function() {
                    $(this).parents('div').eq(1).triggerTab(3);
                    return false;
                });
                $('<p><a href="#">Enable third tab<\/a><\/p>').prependTo('#fragment-28').find('a').click(function() {
                    $(this).parents('div').eq(1).enableTab(3);
                    return false;
                });

            });
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<link rel="stylesheet" href="js/jquery.tabs.css" type="text/css" media="print, projection, screen">
<!-- Additional IE/Win specific style sheet (Conditional Comments) -->
        <!--[if lte IE 7]>
        <link rel="stylesheet" href="jquery.tabs-ie.css" type="text/css" media="projection, screen">
        <![endif]-->
        <style type="text/css" media="screen, projection">

            /* Not required for Tabs, just to make this demo look better... */

            body {
                font-size: 16px; /* @ EOMB */
            }
            * html body {
                font-size: 100%; /* @ IE */
            }
            body * {
                font-size: 87.5%;
                font-family: "Trebuchet MS", Trebuchet, Verdana, Helvetica, Arial, sans-serif;
            }
            body * * {
                font-size: 100%;
            }
            h1 {
                margin: 1em 0 1.5em;
                font-size: 18px;
            }
            h2 {
                margin: 2em 0 1.5em;
                font-size: 16px;
            }
            p {
                margin: 0;
            }
            pre, pre+p, p+p {
                margin: 1em 0 0;
            }
            code {
                font-family: "Courier New", Courier, monospace;
            }
        </style>

<link href='http://www.pimentaria.org/font/condil.ttf' rel='stylesheet' type='text/css' />
<link href="http://www.pimentaria.org/css/jquery.jqzoom.css" rel="stylesheet" type="text/css" />



<link  href="css/estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include("include/analyticstracking.php"); ?>


<!--go madre-->
<div id="madre">

<div id="topo">
    <div id="topo-logo"><img src="images/logo-cinema3.png"  /></div>    	<div id="topomenu-anuncie">
		<ul>
		<li><a href="anuncie.php?KeepThis=true&amp;TB_iframe=true&amp;height=200&amp;width=600" title="ANUNCIE" class="thickbox">ANUNCIE</a></li>
            <li><a href="parceiros.php?KeepThis=true&amp;TB_iframe=true&amp;height=200&amp;width=600" title="ANUNCIE" class="thickbox">PARCEIROS</a></li>            
        </ul>
    </div>

<div id="topoinfo">
<p>(14)3202.7161 / (14)99776.9889</p>
</div>


<div id="topomenu">
	<ul>
<li><a href="index.php" title="HOME" target="_self">HOME</a></li>
		<li><a href="quemsomos.php" title="QUEM SOMOS" >QUEM SOMOS</a></li>
        <li><a href="complexos.php" title="COMPLEXOS">COMPLEXOS</a></li>
        <li><a href="estreias.php" title="COMPLEXOS">ESTRÉIAS</a></li>        
        <li><a href="clientes.php" title="CLIENTES" >CLIENTES</a></li>
        <li><a href="" title="FALE CONOSCO">FALE CONOSCO</a></li>
	</ul>
</div>



				 <!--go corpo_box1///demobox1-->
                <div id="corpo_box1" class="demobox1">
			 
                <!--go slider-->
                <div id="slider">

                <!--  Outer wrapper for presentation only, this can be anything you like -->
                <div id="banner-fade" >

                <!-- start Basic Jquery Slider -->
                <ul class="bjqs">
                  <li style=" width:2000px; height:447px; background-image:url(images/img-slider03.png); background-position:center;" >
                <div class="details1">
                    <h1>MÍDIA EM TELA</h1>
                    <p>
O cinema, a cada dia, prova que é uma das mídias mais eficazes.
O clima de suspense antes de começar o filme, o ar refrigerado, a
pipoca, a boa companhia, o som, a pouca iluminação e o ambiente
envolvente são fatores que deixam o consumidor extremamente
relaxado e apto a receber as informações de forma positiva e
absorvente, com baixíssimo índice de dispersão.</p>
                </div> 
                  </li>
                  <li style=" width:2000px; height:447px; background-image:url(images/img-slider04.png); background-position:center;"  >
                  
                                  <div class="details1">
                    <h1>M&M’S - PERSONALIZAÇÃO DE SALA</h1>
                    <p>
PERSONALIZAÇÃO DE SALA
M&M’s precisava causar impacto no cinema, nenhuma ação melhor que a personalização da sala inteira. Com as capas de poltronas
coloridas, o adesivo no chão da sala e os displays ela conseguiu. Só de entrar na sala, já dá vontade de ter os coloridinhos nas mãos.
</p>
                </div> 

                  
                  </li>


                </ul>
                <!-- end Basic jQuery Slider -->
        

        
              </div>
              <!-- End outer wrapper -->
        
              <script class="secret-source">
                jQuery(document).ready(function($) {
        
                  $('#banner-fade').bjqs({
                    height      : 447,
                    width       : '100%',
                    responsive  : true
                  });
        
                });
              </script>
        </div>
            <!--end slider-->
            


        


			</div>
            <!--end topo-box1///topo-demobox1--> 
            
</div>
            <!--end topo-->             

	 <!--go corpo-->
  <div id="corpo">


		<div id="box-estreias" >
		<h1>ESTRÉIAS.</h1>
		<h2>JANEIRO</h2>
    	

      
      
				<div id="container-3" style="width:100%; border-bottom: #FFFFFF dotted 1PX; padding-bottom:1PX;">
				<ul>

                    <li style="list-style:none; margin:0;"><a href="#fragment-7" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btn_mudas','','images/aba_mudas2.png',1)"><img src="images/aba_mudas.png" alt="MUDAS PIMENTARIA" name="btn_mudas"  border="0" /></a></li>

                    <li style="list-style:none; margin:0;"><a href="#sementes" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btn_sementes','','images/aba_sementes.png',2)"><img src="images/aba_sementes2.png" alt="SEMENTES PIMENTARIA" name="btn_sementes"  border="0" /></a></li>


                    <li style="list-style:none; margin:0;"><a href="#fragment-9" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btn_ferramentas','','images/aba_ferramentas.png',1)"><img src="images/aba_vasos.png" alt="VASOS PIMENTARIA" name="btn_ferramentas"  border="0" /></a></li>


                    <li style="list-style:none; margin:0;"><a href="#fragment-10" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btn_ferramentas','','images/aba_ferramentas.png',1)"><img src="images/aba_ferramentas.png" alt="FERRAMENTEAS PIMENTARIA" name="btn_ferramentas"  border="0" /></a></li>

                    

				</ul>
				<!--go 7-->
                <div id="fragment-7" class="tit_cases">

               <!--go produto-->
                <div id="produto" style=" width:100%">
        <ul>
			<li>
			<h1>QUI, 01/01/15<h1>
			<h2>Uma noite no museu 3</h2>
			<p>[Night at the Museum: Secret of the Tomb, Estados Unidos, 2014], de Shawn Levy (Fox). Gênero: comédia. Elenco: Ben Stiller, Owen Wilson, Robin Williams, Ben Kingsley</p>
            
            </li>
		</ul>

                </div>
                <!--end produto-->

  </div>
            
     <!--end 7-->       
            


			<div id="sementes" class="tit_cases">
               <!--go produto-->
                <div id="produto" style=" width:100%">
                    <h1>[EM CONSTRUÇÃO]</h1>
                </div>
                <!--end produto-->





            </div>
			
            <div id="fragment-9" class="tit_cases">
               <!--go produto-->
                <div id="produto" style=" width:100%">
                    <h1>[EM CONSTRUÇÃO]</h1>
                </div>
                <!--end produto-->
            </div>


            <div id="fragment-10" class="tit_cases">
               <!--go produto-->
                <div id="produto" style=" width:100%">
                    <h1>[EM CONSTRUÇÃO]</h1>
                </div>
                <!--end produto-->
            </div>


            
            
	      	</div>
      
 

</div>





<div id="box-d">
<input type="hidden">
<!-- e-mail do destinatario 
<? 
if (!$_POST){ 
?> -->
<form action="#" method=post> 


       <h1>ANUNCIANTES/PARCEIROS</h1>
    
		<input name="assunto" type="hidden" value="NEWSLETTER ACARABRASIL" />



        <input type=text name=email  onblur="MM_validateForm('email','','RisEmail');return document.MM_returnValue"  class="input_newsletter"  value="Usuario" size="30" onFocus="this.value='';" >
        <br />
        <br />

        <!--
<? 
}else{ 
   //Estou a receber o formulário, componho o corpo 
   $corpo = "NEWSLETTER ACARABRASIL\n"; 
//   $corpo .= "Nome: " . $_POST["nome"] . "\n"; 
   $corpo .= "Email: " . $_POST["email"] . "\n"; 


   //envio o correio... 
   mail("rrchagas@pimentaria.org","NEWSLETTER ACARABRASIL",$corpo); 

   //agradeço pelo envio 

  		echo "<script>alert('NEWS CADASTRADA COM SUCESSO');</script>";
		echo "<script>window.open('index.php','_self')</script>";
		
} 
?> 

        
 -->
<input type="hidden" name="redirect" value="index.html">
<input type="text" name="email2"  onblur="MM_validateForm('email','','RisEmail');return document.MM_returnValue"  class="input_newsletter"  value="Senha" size="30" onfocus="this.value='';" />
<input type=submit value="" class="input_btn" />
</form>
</div>
        







      

  </div>
	<!--end corpo-->









</div>
<!--end madre-->
<?php include("footer.php"); ?>
</body>
</html>
