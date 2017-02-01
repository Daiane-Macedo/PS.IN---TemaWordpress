<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/assets/css/meucss.css" rel="stylesheet">
</head>

<body>
<header  id="h-header">

		<nav id ="navbar">	
				<div class="logomarca">
                    <a href="index.php"><b>Binary</b> by TEMPLATED</a>
				</div>
				
				<div class="botao">
				<input type="checkbox" id=navicon>
				<label class='botaoMenu' for="navicon"></label>
				<div class="menu">
				    <ol class='opcoes'>   
                        <a href="./index.html"> <li class='linha'> Home </li></a>
                        <a href="./news.html"> <li class='linha'> News </li></a>
                        <a href="./exemplo.html"> <li class='linha'> Exemplo </li></a>
                       </ol>
				</div>
                </div>
		</nav>
       
        <div class id=textoheader>
           <div class="col-md-12">
                <h1><b>This is Binary, a free and fully responsive
                website template by TEMPLATED </b></h1>
                <div class="botao"> <a href="####"><b>Continue</b></a>
                </div>
            </div>
        </div>       
</header>
