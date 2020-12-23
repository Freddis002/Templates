<?php
define( 'WP_CACHE', true ); 
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
define( 'DB_NAME', 'agence_3' );
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
define( 'AUTH_KEY',         '.`A.ad5Yvdkz6mzgM1-@ReVh7f(kW6&Csoolz~VP2 Uh-=*}GPV!E2vyJbdiYh!d' );
define( 'SECURE_AUTH_KEY',  '8Ppmf$+MbR?if[0oq.;0pIh+GwV 9g3]Z|Gw1Kh1#P%U4Ts;(ItR[ LB<VsJ,nyd' );
define( 'LOGGED_IN_KEY',    '6E(nu2<,Ch4SA(nnU>znl/ZDhbw$dNeV+p=jGFV3|cc3vjg6 ^:iF%6lC5+8q}Zg' );
define( 'NONCE_KEY',        '$l^YXAy(C$=2|5X3SqF6.r/&4SXP9H{Q+;u9:d[(lX9qHm]q5 :C]g$/1}v+4a(D' );
define( 'AUTH_SALT',        'x4Csp;cjsdmG(S^ZEHmQ<,yr>AZ^WGM$|`a lT@vS`_L(:{TP$Ty0ASbd!kxPB;,' );
define( 'SECURE_AUTH_SALT', 'tG6*[T$1xPc.`AZ/pvE8N7GkS;VTn{ eewEoMz3AE8cGn4pEQJJ#s{A}rn`l%*&k' );
define( 'LOGGED_IN_SALT',   'b)OEycw)s@fq--}M>~Sc>gL=@YKX4=* r<r{A554310CCvrQfk~R.en&;Fl#Nrz)' );
define( 'NONCE_SALT',       'fyGDEjCgAZS<ziOAw3Sp&JtIX^J^3o:<-~>5Z (7_w !nxM;6.vi$ujdWAhjtFc)' );
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