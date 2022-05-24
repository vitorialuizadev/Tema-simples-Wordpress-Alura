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


?>