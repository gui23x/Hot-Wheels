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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'hotwheels' );

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
define( 'AUTH_KEY',         'H*a5n|.^I2M$OktIRiHm!M cRS=jNK8s8V2R7 GRb%f,w-iub%c&QlYP}|+CD>,D' );
define( 'SECURE_AUTH_KEY',  '}XbYIOh.n, G+,CQ+od{R8bG28._/Dy-ri1,F69N-`EVofPDk)gB:35>0K1(s;(,' );
define( 'LOGGED_IN_KEY',    '}DNgQ/`.PTh8 iW(~Q&P3^WP?!i)RoPBk!Z<gC3#.#NWm}ee2-2S!>`%O*-DJ;ox' );
define( 'NONCE_KEY',        'E6>yr3|%9ue37k)uv m8`zqqD#7:i.M|8cX_AUji!U_7dZxa(L[~So9 fqPy?Kif' );
define( 'AUTH_SALT',        'KCVomkl]q<NVG2l(;Tl 2Kqf1u{a[HK0AgFh/_>^m4|*@5bw61.vXBRo[&I6qu%C' );
define( 'SECURE_AUTH_SALT', '3MLmv4Mim]GQ6C(K2Qu&?{&rH.kJ5jl?$*xq6U+De=8P)F5XsBjWU{(p:1Ni9ySM' );
define( 'LOGGED_IN_SALT',   'xuO?X*kiLzrv-leU2`$iE#5;cl8:DGUN9B+IicXj/5>2(%Cg/#vaO^RF[rFa}Nua' );
define( 'NONCE_SALT',       'es[ 9`6cfEQ0vFWsX#f=<5mD?&E54nx.c-Oj4`qK>qRxmXrNFPk)dC St&R(.4E.' );

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
