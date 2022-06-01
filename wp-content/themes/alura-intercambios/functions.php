<?php 
// Ativação da aba de menus no painel
function alura_registrando_menu(){
    register_nav_menu(location:'menu_navegacao', description:'Menu navegação');
}
add_action('init', 'alura_registrando_menu'); // Quando iniciar execute 

// Opção para a troca de logo no aparencias
function alura_adcionando_recursos(){
    add_theme_support(feature:'custom-logo');
    add_theme_support(feature:'post-thumbnails');
}
// Quando carregar o tema execute
add_action('after_setup_theme', 'alura_adcionando_recursos'); // Adiciona recurso dinamicos do painel


// Criando post customizado 
function alura_registrando_post_destinos(){
    register_post_type('destinos',array('labels'=>array('name'=> 'Destinos'),'public'=>true,'menu_position'=> 0,'supports'=> array('title','editor','thumbnail'),'menu_icon'=>'dashicons-admin-site'));
}
add_action('init', 'alura_registrando_post_destinos');

// Criando taxonomia (categoria)
function alura_registrando_taxonomia(){
    register_taxonomy('paises','destinos',
    array('labels'=> array('name'=>'Países'),'hierarchical'=>true));
}
add_action('init', 'alura_registrando_taxonomia');

// Criando post customizado
function alura_registrando_post_banner(){
    register_post_type('banners', array('labels'=>array('name'=> 'Banner'), 'public'=>true, 'menu_position'=>1, 'menu_icon' => 'dashicons-format-image','supports'=> array('title','thumbnail')));
}
add_action('init', 'alura_registrando_post_banner');

// Criando metabox
function alura_registrando_metabox(){
    add_meta_box('ai_registrando_metabox', 'Texto para banner na Home', 'ai_funcao_callback','banners');
}
add_action('add_meta_boxes', 'alura_registrando_metabox'); // Configura a meta box no post

function ai_funcao_callback($post){
   $texto_home_1 = get_post_meta($post->ID,'_texto_home_1', true);
   $texto_home_2 = get_post_meta($post->ID,'_texto_home_2', true);
    ?>
    <label for="texto_home1">Texto 1 </label>
    <input type="text" name="texto_home_1" style="width:100%" value="<?= $texto_home_1?>">
    <br>
    <br>
    <br>
    <label for="texto_home1">Texto 2 </label>
    <input type="text" name="texto_home_2" style="width:100%" value="<?= $texto_home_2?>">

    <?php
   
}

function alura_salvando_dados_metabox($post_id){
    foreach ($_POST as $key=>$value){
        if($key !== 'texto_home_1' && $key !=='texto_home_2'){
            continue;
        }
        update_post_meta($post_id, '_'.$key, $_POST[$key]);
    }
}

add_action('save_post', 'alura_salvando_dados_metabox'); // Salva os post do wordpress

//Pegando texto dinâmicos 
function pegandoTextosBanner(){
    $args = array(
        'post_type'=>'banners',
        'post_status'=>'publish',
        'post_per_page'=>1
    );
    $query = new WP_Query($args);
   

    if($query->have_posts()):
        while($query->have_posts()): $query->the_post();
        $texto_1= get_post_meta(get_the_ID(), '_texto_home_1', true);
        $texto_2 = get_post_meta(get_the_ID(), '_texto_home_2', true);
        return array('texto_1' => $texto_1,'texto_2' => $texto_2);
    endwhile;
endif;
}
// Incluindo Arquivos js
function alura_intercambios_adicionando_scripts(){
    $textosBanner = pegandoTextosBanner();

    if(is_front_page()){
        wp_enqueue_script('typed-js', get_template_directory_uri() . '/js/typed.min.js', array(), false, true);
        wp_enqueue_script('texto-banner-js', get_template_directory_uri() . '/js/texto-banner.js', array('typed-js'), false, true);
        wp_localize_script('texto-banner-js', 'data', $textosBanner);
    }
}
add_action('wp_enqueue_scripts', 'alura_intercambios_adicionando_scripts'); // Action responsavél para incluir scripts
?>