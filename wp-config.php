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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'webred' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'renancrs' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Kheinore3225@' );

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
define( 'AUTH_KEY',         'n453ciOB&DtlMrU/:l*-~]4^w&#KoV^Qr#R 5JOKGPDVa:H+Ff/&8$_smH.*OyWo' );
define( 'SECURE_AUTH_KEY',  '8@t90u3Uv1|+ofU0(x#UbaQp )--(PB4I1%7)v-}Kz0yZ0;jli(@khhfuDWcE{Va' );
define( 'LOGGED_IN_KEY',    'Ph,,{U>$w[6oIXlb2Ab|R(yFk<tLsUn!rX>r)?_G-0F<?xtXOhSA95>lM83%S;pz' );
define( 'NONCE_KEY',        '?AprV4$rrezFxyA3-w4a|Gj O:$h)oQ#Q#}Cs]?qX?jlLB8u +.2^$UerD1^]P92' );
define( 'AUTH_SALT',        'ZpHDr.p^Kwp`GXFJ$jTIl@>2mmQ0f@!h-O@r@C@(E?NX3-QUOTI=ya4Xs!1UP#(H' );
define( 'SECURE_AUTH_SALT', 'eVwm;T%9bOhW^Jipe+g] O%VT=fi/%$yP-!d:cpp4$bjA~^f1yRBol:TSQI|Np3{' );
define( 'LOGGED_IN_SALT',   'RC#yX^1-AR?2f@(cIPsx-xaARnphjaRwfv;[;}_0`acBPp~=+(/f@K48,k]=?J-L' );
define( 'NONCE_SALT',       'iaUxWCA12uXG<Y!RI8+V^%DeSxYQ3e:(JXmlWs*gcIr2*fy214AIq#QgNGQ]+/Q;' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpred';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
