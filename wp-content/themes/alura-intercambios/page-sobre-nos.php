
<?php
$estiloPagina = 'sobre_nos.css';
require_once 'header.php';

//Se tiver posts(conteúdo)
if(have_posts()):
?>
    <main class="main-sobre-nos">

    <?php 
     // Loop para mostrar as páginas
    while (have_posts()): the_post();
        the_post_thumbnail('post-thumbnail',array('class' => 'imagem-sobre-nos')); // Pega a imagem destaque 
        echo '<div class="conteudo container-alura">';
        the_title(before:'<h2>', after:'</h2>'); // Pega o titulo da página ou post
        the_content(); // Pega o conteúdo da página ou post
        echo '</div>';
    endwhile;
    ?>
    </main>

<?php
endif;
require_once 'footer.php';
?>
