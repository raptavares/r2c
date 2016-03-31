<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'r2c');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'r2c');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'r2c@2016');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=yEQ!_r{$Ghat>PKSZ~%|tJ[?un>k]ohKib0mPj$wQHHvSsEC+QU38JeapkxWAO|');
define('SECURE_AUTH_KEY',  '?&V5^A$td=nx1VE^kg_{^~l)|vv%UcBYQxzvo-mN&: cl/!-5D;gE6^6`I#`}0[Z');
define('LOGGED_IN_KEY',    'U5#lG[5P4T RP:%&mhF`}{0;N/W(8+^u*Wb#7pfNLw<iXZbk%h#5b+XS%e@JSev)');
define('NONCE_KEY',        'z3bg{rI$/zy9j*xulNw?m5=*b{C.v4j,Tq%M+(KH(NOf%J6r&Zoc.WeFR;P+co.b');
define('AUTH_SALT',        '-c.n_ir9=<FgomB{(P-:vs&uQVNB7+S*^WFVr0a(+4nk-VWc#5]~Cg;_1-Phl0 y');
define('SECURE_AUTH_SALT', '#rQ&9-}(mcyDT1Wd9TI^zD=Ht3CEY1I+}8W4+G*D@SoJ$I8#2zAxm{ZIL{lt2R&z');
define('LOGGED_IN_SALT',   '_EZ(iS5s-1q(,!4r@&Ja((#G}r($U ;tEo BZ+]{+2k=9M=)WwT.$ks+Sa)d@[;j');
define('NONCE_SALT',       '?4t|Uq=Vu^.qsdmh>EvG|IllSN~.I1Va0NHa!.,#jM6AK-Vd-dEU5b/k|,~@hX)j');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'dbr2c_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
