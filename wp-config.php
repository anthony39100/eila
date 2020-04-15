<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'eila' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'w-:(S9Cw7HzfUAp:HHM?-ydgnFX_?@ !M7Epq=rr=!cDmL=^{MSa{;$JgXcCqR}M' );
define( 'SECURE_AUTH_KEY',  '0,5V[(Fj}th6+W,QFLRP0Ku{>tFB@(4S<Av4p0}E|.fDOX9bu3GX5T|brsP8kHe5' );
define( 'LOGGED_IN_KEY',    '4UTS)_D4DsdB#d~XTm6o1FhY%{}T^7]2#:+d7acj|e[SH6$>T*:SL5Y4Fg#>[cVH' );
define( 'NONCE_KEY',        'qK~[3,^(DUs6_YYu{LJxy}4SX8e)i!MOv%m-`=t6!o&p;bY*Xm;hmK>P5{8vi(Cm' );
define( 'AUTH_SALT',        'V=BMlLH]XI]!G}8:IoHV&jJL&/.IXq]>K`1uBu{$`H;{$~GTk}{38>)h4?Wx|>is' );
define( 'SECURE_AUTH_SALT', '2FvsPw$TG17$%0;GmnvIF!)`@;X:w}_|XLrB#b~yM0l$V9N4w`mRn6]PxkjV6aT?' );
define( 'LOGGED_IN_SALT',   'vK vC48BcmxBF+AbA#~2MO!mSsGl$<]@>vAm$^,MZLX8Bw?628/Tva;viPrX^U%&' );
define( 'NONCE_SALT',       'U(k]}/jud2U{_>egAmv^EH`{d[byIlQk<]FYfxX$&DJ,@VY?If2qAsR?K3<4{U:v' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
