<?php 
// Ativação da aba de menus no painel
function alura_registrando_menu(){
    register_nav_menu(location:'menu_navegacao', description:'Menu navegação');
}
// Quando iniciar execute 
add_action('init', 'alura_registrando_menu');

// Opção para a troca de logo no aparencias
function alura_adcionando_recursos(){
    add_theme_support(feature:'custom-logo');
    add_theme_support(feature:'post-thumbnails');
}
// Quando carregar o tema execute
add_action('after_setup_theme', 'alura_adcionando_recursos');


// Criando post customizado 
function alura_registrando_post(){
    register_post_type('destinos',array('labels'=>array('name'=> 'Destinos'),'public'=>true,'menu_position'=> 0,'supports'=> array('title','editor','thumbnail'),'menu_icon'=>'dashicons-admin-site'));
}
add_action('init', 'alura_registrando_post');


?>