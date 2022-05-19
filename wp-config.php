<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alura_wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2HpCztIBDW]l?q^)tC:;[<|&>yZJ:Tso(Jcjz0_>aQbwJ<R/&s_7ev5<@0EKhUH;' );
define( 'SECURE_AUTH_KEY',  ',k54@.,Wh/04(],#@,&c^tYi.th1Vs`z]CpW&#EiW7/s@;l@^I, ,X^s)?7se_37' );
define( 'LOGGED_IN_KEY',    ';/qdf4~wOG]=g KA=C7Ccw_^2G1<97Mh$88MaAg02mZ~b+fE$TK^G }q7Y2:?z*!' );
define( 'NONCE_KEY',        'uUhPNej7APkW7EvS V(Tq?wkf8G$?6f#i1RsE=zdi5jlZ}Y32bYxq[!hj+GtETIB' );
define( 'AUTH_SALT',        '#C3u&W5g0*:fkF9&qOz**;,WufPqabF:[>2^6Q5XGq}%}:E=}(TNf>1 [yHtVN|4' );
define( 'SECURE_AUTH_SALT', 'zFU*-#a*(1LvHw]/{:ES^H/XVe3KJl#+8Wrd;rV&0?)Z?ePt8|7|Dq|+T;6u6].B' );
define( 'LOGGED_IN_SALT',   '@N?DeOiyQ2bjvjo$7H3<b|ZJR%8SvnRs#@r:Tk|Nxob |+W.?eGiGwP>1v2q)a)j' );
define( 'NONCE_SALT',       '#bca?>BD -TfnN4KVNub_OXApTP&zuz=1<.mpYY_0[S-[/]uj#>5{m`Y[,^ `)L;' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
