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
define( 'AUTH_KEY',         'bXm 5NpLR!jXbpYKv#-5uTUCafQ$WO|:s?tAL^1N}=R=,;Bx<x>qt/P-P#,p`1/Q' );
define( 'SECURE_AUTH_KEY',  'nD|]Ge|4x+7v_NRnfKOch/pQ-@somr1}5:)Jr(?|&X@p|4nGl3i/2!3f55Xt}V5.' );
define( 'LOGGED_IN_KEY',    'OsGf4p<6Ip,6U-mBoD%K7Km~N]/:GwV[xEUHy* 1?V3+7C8%)Wni{XOi:%|_9g/q' );
define( 'NONCE_KEY',        '>yWhBi|[,}~BGYf!a~uS]#TA){w>[V%5)su=OI{5^)B&H(FZ/u{SF=#=?}ZDL>Kw' );
define( 'AUTH_SALT',        'Q54O8[qgD]n_7cFd/.{isb8Fai3dik`rvS1(&oG3#K++ZFGO@sEnl8]@|`&m_pf7' );
define( 'SECURE_AUTH_SALT', '&?4I(M9)/UYzg<#sroIK-bV.:EcnuPWia|Y>P[xEu%hM]LOm24pnu8[Y3}/=N9X#' );
define( 'LOGGED_IN_SALT',   '>G:t&6.4guBvk$Q_*yf)Ri,T]5?tj0M|)SL+I7}(WcN],6[uVfsI@l[(R$`PDV?8' );
define( 'NONCE_SALT',       'qK^TS*$02PZz>{W}63F&05OJc0mz*%/jQM0HL7P3Ab6n.v4x9v OnnE/<&z7Q_T+' );

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
