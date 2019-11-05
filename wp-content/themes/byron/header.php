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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    


    <!-- Apple Web App Meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <?php wp_head();?>

</head>

<body>
    <header>
        <div class="navbar-fixed">
            <nav class="nav-wrapper">
                <div >
                    <a href="home"><img href="" class="brand-logo" src="<?php the_field('logo');?>"></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#home" ><?php the_field('campo_1');?></a></li>
                        <li><a href="#serviços" ><?php the_field('campo_2');?></a></li>
                        <li><a href="#empresa" ><?php the_field('campo_3');?></a></li>
                        <li><a href="#clientes" ><?php the_field('campo_4');?></a></li>
                        <li><a href="" ><?php the_field('campo_5');?></a></li>
                        <li><a href="" ><?php the_field('campo_6');?></a></li>
                    </ul>
                </div>
            </nav>
        </div>

</header>