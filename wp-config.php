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
define( 'DB_NAME', 'hit_digital_wp' );

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
define( 'AUTH_KEY',         'Crlzv$8K)3omx<,1AR^d<&juqjXY{{I<_4}LE^G6Z)amUAUZa49(F^h<Lt8-?BA!' );
define( 'SECURE_AUTH_KEY',  '#zC~.!tRBS:o /l@Az<5*L;Y%5;s~y)E=2|j}T?8sR;A.8*Y;@3/q^(kXZ[C[Q19' );
define( 'LOGGED_IN_KEY',    'PLHqraob)aJ/KdL2([[{2tuTrI^a6d+:s30hEkcE]r3?!!H0q nBe(0(IioNd3jA' );
define( 'NONCE_KEY',        '?rctRCS@m;oq^cbR*D7KibVEc:0Y9)6]^zHBMD+S9k7RR}w&rF*DUaXv?l-tM:2e' );
define( 'AUTH_SALT',        'WR8%1/OIcqP@0(8?BVA~&,.MHKq(NW)8nfJY;p1Y[zOjvkGRyq2@za4l8Ya5GCh|' );
define( 'SECURE_AUTH_SALT', '36(0>%3Q+4 TT-Uijr_E/?kF(ivQ,8j6[eP1iJ)*8Qw/LT-y9B{<-csGDl8ItSBd' );
define( 'LOGGED_IN_SALT',   ' OP?1Z#>7D+nFItZw)=r@LkpqJn5|XHyqP~-p~bPx0PZ1[}Ar zoX7Lo6N^)mPi*' );
define( 'NONCE_SALT',       'DZ0;KM;B4_?p<C4%{X`uCC%igy%Y I!Ix+}M>Ard_n(ht92t9 #s.?/R4+_KZj$2' );

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
