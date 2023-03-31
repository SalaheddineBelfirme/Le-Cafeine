<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'cafe' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RJT|kRRlve h0L{sFFA]_:v{+>3i._6DldR`X)1%&m%{w}m<GLUdQ4H8tG<)(+=f' );
define( 'SECURE_AUTH_KEY',  ':Q3?X3e Z&aXG!)Yl2r9EL^!bb6;-Y=%O!T[m:do+iDAyB[{pQq,hY:rPrC4h4qp' );
define( 'LOGGED_IN_KEY',    'F=1q?$j9MUp]Lt4E6s]3}K60-<0 +E4eoA16;A[<@W26qBbh*D(=]Qq.;TERtA-*' );
define( 'NONCE_KEY',        ':mc$w~ud0TsP]}$<)H?a@.FYb[C{5b3Y82IIRW=EX`&8C.Ye(mT,X,_v3vmGEinB' );
define( 'AUTH_SALT',        '>&+7^Vl;o!9Oxx^?La4N#h2W,: ,N91WT_mvZk5XY;7/!_&-SE!qt)}rPXJ>e(73' );
define( 'SECURE_AUTH_SALT', 'xm(7> lEZq$3_kEY]nbM_g*f2X(ZkCCPw77#e;d#X(>D7*npoi;D10p|Y)&aP/(R' );
define( 'LOGGED_IN_SALT',   'AJ$kt9fi=}prc>*L3;?<ArsYA{z*e y zk:ta@.:E6k%{VW4zR*X/L)<f+&TFOz4' );
define( 'NONCE_SALT',       '&PdJ:LTK&jk{UZNd;<mD-Tup!Ms]Y`2Za39LDS)m[&It)(a&sV@M>CFnH^RAd|CP' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
