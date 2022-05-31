<?php
$estiloPagina = 'destinos.css';
require_once 'header.php';
?>
<form action="#" class="container-alura formulario-pesquisa-paises">
<h2>Conheça nosso destinos</h2>
<select name="paises" id="paises">
    <option value="">-- Selecione --</option>
    <?php
        $paises = get_terms(array('taxonomy' => 'paises'));
        foreach ($paises as $pais):?>
            <option value="<?= $pais->name ?>"
            <?= !empty($_GET['paises']) && $_GET['paises'] === $pais->name ? 'selected' : '' ?>><?= $pais->name ?></option>
            
        <?php endforeach;
        if(!empty($_GET['paises'])){
            $paisSelecionado = array(array(
                'taxonomy' => 'paises',
                'field' => 'name',
                'terms' =>$_GET['paises']
        ));
        }
        
    ?>
</select>
<input type="submit" value="Pesquisar">
</form>
<?php


$args = array('post_type'=>'destinos', 'tax_query'=>!empty($_GET['paises']) ? $paisSelecionado : '' );
$query = new WP_Query($args);

if($query->have_posts()):
    echo'<main class="page-destinos">';
    echo'<ul class="lista-destinos container-alura">'; 
    while($query->have_posts()): $query->the_post();
    echo '<li class = "col-md-3 destinos">';
        the_post_thumbnail();
        the_title('<p class="titulo-destinos">','</p>');
        the_content();
    echo '</li>';
    endwhile;
    echo '</ul>';
    echo '</main>';
endif;
require_once 'footer.php';
?>