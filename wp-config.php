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
define( 'AUTH_KEY',         '%S0m2b++(UH32Uxxz4XENbG3b:t8T1g@[3htFYzTJOPg9t[+aM6LX}7W<MDQKe0!' );
define( 'SECURE_AUTH_KEY',  'W`_7.t+#!O98a7;X2T&{ A@GFf#vB3wD$H9}<h2IJPe0lTm0/WaNk2+|f;5I[RQ<' );
define( 'LOGGED_IN_KEY',    '<RN8)oB +tdyAc19-GTV$`ZRTm!;1BhzRr^!K1o/o8Saw3UhVN2o.B(6gW.-Bx1|' );
define( 'NONCE_KEY',        'hOlAE];<5RUqov]TTF[*2OAArmoZKAD(x:L-p_I0>%d~@dd{uUx8yu@|w0jnA6DC' );
define( 'AUTH_SALT',        '$TX;[5Glrk/NS1NuV|.utdavb!OL]p|-G0{GWCE?LB{Ru|<RZa}`( +Xx3RA^q&A' );
define( 'SECURE_AUTH_SALT', 'MK;+N[PI$~c0<lg^Qbsn]~^2Lp5IuhO@kPh(bSMr,<D,-{rH>vH$0h0SU1xg7#]~' );
define( 'LOGGED_IN_SALT',   '9=!C sCxc[jfqyP/ZNP+1A@p;XsVi/eOrK5Z: iJ-5R6@8H*OkIi`qtUzlM#5sZ]' );
define( 'NONCE_SALT',       'rM:xt7Lfm-E$]qN=[<[Ntk3e9I11M$ts+}Lx;Wy@qjf-&xfI!A0ob$FJ.z:X<Vhd' );

/**#@-*/
set_time_limit (300);
/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_grupowz';

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
