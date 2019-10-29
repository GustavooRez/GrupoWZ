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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'WZh]g:wj:{eQ*BAAG[&5)Rs`|Vu}*Wzj345lmVKR!Bdvg/vdp^v7k>pw?c6;jF3l' );
define( 'SECURE_AUTH_KEY',  'U&tnJk#PZWx)ddTD<=NT6)lJll(jqs%O;(^lgcl{(^DUTgcT+3x3]>XEe^^>8Mp_' );
define( 'LOGGED_IN_KEY',    'I _r|n?%lw@y,J!P74dMh`?nPQjL4w&*Xm$]XU(<{wYLvF&jQ#%@/R9y6>]::GJ8' );
define( 'NONCE_KEY',        '^8l)&tldVTAVre$twO/6:-xri JUDM4CTi AqxW?@Cj|[0qeDwXZ4qniw:FL_ mx' );
define( 'AUTH_SALT',        'U(Hk7cX]tz&28h6A&?4%726x#,`-jc3FtJA]9M-`{`I2=|JU9.P<~F,^K$jzt>yy' );
define( 'SECURE_AUTH_SALT', '0jYRdoiK3M=/D]2[jnz@GT.FOHRCnT*304v0L9q4}|)`3-T~ba$-G@y4%#^-/Jof' );
define( 'LOGGED_IN_SALT',   'u6HG~wFBu*`I0rdCzmqjS9&1K8gsKqzP{|(n^B3,vmWx,iIGfmOq`7_,_mm>?YQh' );
define( 'NONCE_SALT',       'HB2ybO8bJ,f,)Np:4(.r:xx_^,^V^JH:C2JQdUuY:4WFgU2bJ*qx(KHA M+66P}~' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
