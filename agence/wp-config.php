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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'd(PPvcc}<4jkSJ*^s=kCmE1VWnoPU*=pB3^Afe]-]I}?A9z5;pos?egEj]+gHG,:' );
define( 'SECURE_AUTH_KEY',  '#e6n4rK@IJws!Y<+GfN,4bHTVzyU{2*3WNT)>0QGj-bRSs`E-hA3Y)o]uM82_K[Z' );
define( 'LOGGED_IN_KEY',    '<)5`J>|]??YOHUuvafcK?/CW$VxbEI)?nj2*cl?nrjS/e|h.cCZnEv1]}$n#13rL' );
define( 'NONCE_KEY',        '$#!A$WC,n^A:bAs]xo*1b0;1]9c6YcK2h=DtF$r9qBY y6{Rt:HVhY0kD:qY>ApS' );
define( 'AUTH_SALT',        'qdjZ/qWI52Xf3`RFjmINUE$~zwq!B8WVA^UAn[7e#ef*t^q=ta:8d[= )nyIZdu.' );
define( 'SECURE_AUTH_SALT', 'Ba$sq0@j<cDX$*u)n5Jz+*2D4YF9.%-kAh;SK4)VLT+*<eNmTG,F*F,t)FPzJRl#' );
define( 'LOGGED_IN_SALT',   'vZ5a&Ip< 1;eh-W.Ud8.=`-?]7A_d$fS6cWohG@m2T8bgUE#N[]y{X{Xp6G.hkRq' );
define( 'NONCE_SALT',       '(0,65957p,{Z4Bz*]B!4vyFlsI^<Vi6}LA?T;%*{1er&z*;*4;BN:`dx6^5)-<y6' );
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
