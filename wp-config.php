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
define( 'DB_NAME', 'grupowz' );

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
define( 'AUTH_KEY',         'TZ:FEC6) P]YGSMnZz$uZozl(Hv=&Fkt`|L&zG#wpqT[7mOCY%[G~2D*.)weYeTI' );
define( 'SECURE_AUTH_KEY',  '<[BwQ[*eP^i?;?xWLc]fTSOKG.jyHuBJ$vOu@@W^FcHe|,rUPA<fL=i]m`<H!dBe' );
define( 'LOGGED_IN_KEY',    'uj~G{ROijx;vx|j~{Lq)e:-I6?U;zTc&^%HQ`k)<v&eF831fm?:DRM:KQs#ATq:O' );
define( 'NONCE_KEY',        '<OKf[CHt k&i6$oket^JA,,b|^C&Z#RU.29=I3fYHsE>Lu,LxB{,6TZ}QDt0ztSN' );
define( 'AUTH_SALT',        '+i?;E>k>G_Gc$*3=_2w;PK5Qsesw#8E-z @^&%MANG#0=1;bn&`B!?PsoHw|;yGa' );
define( 'SECURE_AUTH_SALT', 'pTglUG3/l>|;D.3uQrs?jWUi`jsB|x9PX KX2Ssxz)HX~ n8ei:]jlox/$/4$6/5' );
define( 'LOGGED_IN_SALT',   'SD]K1**_./GN]+76RL/){Z_@QvT/.:$>+J~0CGA/ln6Wg+P;<I=fD,oyt055dCs8' );
define( 'NONCE_SALT',       'RvYd*ahi]9W|NfHwO%|_sZ25%6+7r5H/K;$qoe#]J:e I8bZ]yhR:/4Q8*]JF;-f' );

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
