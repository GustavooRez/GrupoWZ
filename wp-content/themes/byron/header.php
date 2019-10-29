<!--
    Arquivo para o código do header da página,
    header = cabeçalho do site
-->

<?php
// Inserir: caso tenha alterado o nome da variavel do redux, alterar o nome aqui tbm
if (class_exists('Redux')) {
    global $redux_fields;
}
?>

<!DOCTYPE html>
<html lang="en">
<title>Grupo WZ</title>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/img/logo.png">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php get_bloginfo('name');?> </title>
    <meta name="description" content="<?php get_bloginfo('description');?>">
    <link rel="icon" type="image/png" href="">
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ruluko&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" rel="stylesheet" type="text/css">
    


    <!-- Apple Web App Meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <?php wp_head();?>

</head>

<body>
    <header>
        <div class="navbar-fixed">
            <nav class="nav-white">
                <div class="nav-wrapper">
                    <a href="home"><img href="" class="brand-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo_grupo_wz.png"></img></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#home" >HOME</a></li>
                        <li><a href="#serviços" >SERVIÇOS</a></li>
                        <li><a href="#empresa" >A EMPRESA</a></li>
                        <li><a href="#clientes" >CLIENTES</a></li>
                        <li><a href="" >CONTATO</a></li>
                        <li><a href="" >BLOG</a></li>
                    </ul>
                </div>
            </nav>
        </div>

    </header>