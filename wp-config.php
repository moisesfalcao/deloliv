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
define( 'DB_NAME', 'deloliv' );

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
define( 'AUTH_KEY',         'I?sA@E9y:.y{V|(N(JT5=,5lp~[x^wkx&1XEyUO8HvY~Z#zJy5;q)%xbZL`cb&5d' );
define( 'SECURE_AUTH_KEY',  '?~}MH^W:bApJ^z7M&6pWR}/G=yR]wit9yNgGRqD|JO,$Vx3TcT;4u145wa|P7!A9' );
define( 'LOGGED_IN_KEY',    ']#R..ZjOVF/,$7c|K>Aer.I/:W0}<Qk(e+|,d n4cl,bhk0kFWv>R4m1lq]^@Id)' );
define( 'NONCE_KEY',        'Pmg@U)-8X`GKK5gP*&b5tS2=,i#OG,8>sM3OD9&1Uxp2i@BrCjr?J}15a!I xKz)' );
define( 'AUTH_SALT',        'Q!~-lHInRgx:lg%o/fal9C;i;QV2JKZjtmuZ_[P%)PO;QHqKp^eh|79r*C&Rkj*W' );
define( 'SECURE_AUTH_SALT', 'dGk)7PZ[EvvcuQ3p|*GP+vJ YtL2PjIa#YLW&`9r$tj8D=ur[[XYU4e:S2I59HF2' );
define( 'LOGGED_IN_SALT',   'Ndy;ep2;PLBg.>i%c=D]l,06GkHQfD~&v6xGFu_Di<.,mLm_ke:xO942%qsbLPa;' );
define( 'NONCE_SALT',       'Kmf s<Iu+DW~I#v#OFHv_v!<Y5KZCs)7T`CCu5<+5vDyWW2Bi8ekjN#a!0X,]amA' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
