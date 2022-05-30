<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title><?php bloginfo(show:'name');?></title>
    <?php wp_head();?>
    <link rel="stylesheet" href="<?= get_template_directory_uri().'/css/normalize.css'?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri().'/css/header.css'?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri().'/css/boorstrap.css'?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri().'/css/'. $estiloPagina?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri().'/css/footer.css'?>">
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container-alura">
        <?php the_custom_logo();?>
        <nav>
        <?php   
        wp_nav_menu(array('menu'=>'menu-navegacao', 'menu_id'=>'menu-principal'));
        ?>
        </nav>
    </div><!--container-alura-->
</header>

