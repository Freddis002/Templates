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
define( 'DB_NAME', 'agence_2' );
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
define( 'AUTH_KEY',         'B&L7+CkM3yib>OSL>f(&T9*&h_)XjC!bNx$#``J:>U(h3*fn(H?K5}~56=(q,YE1' );
define( 'SECURE_AUTH_KEY',  '`eVtCMj$7PA9(,}d=;F{>4.m{Oeau @JJx(G,ood70K17>la3iDpdeqCNMP]#S)G' );
define( 'LOGGED_IN_KEY',    '<X)*Q$cRMCGg]-56lSkv.rhp_6]9y5DgvY:|gPn2=1l&8jY*A2e{HBi#dxtc-|A}' );
define( 'NONCE_KEY',        '~:AQo$ F.bOc5~CF$Fd--&V(,?@nkBs{N@JMk@1ASgN5bRNpqqm|]2SC@`AQH{Ro' );
define( 'AUTH_SALT',        'WYVOPxn#plY`AXBp62Eup>~PIe[o(@4Y>!LD8*JR&!}1)bT 5f~Gu q|lS]<5vbO' );
define( 'SECURE_AUTH_SALT', 'cgBio@3_/:!~yYFyuynPc^Geu4ix>9mnIrkQdrG|c=iG?QD%D+*ZUfU&LCpD!6M-' );
define( 'LOGGED_IN_SALT',   ';^v8>:7H#MA;rD=pG>:vFxyl=0]zvNAgJS>00|ro5EVCeUBCZ;B=)1mX5<QG1BH?' );
define( 'NONCE_SALT',       '/;SE]tS?:W&Z*{5f+TFuo8q4J5pDQNUBSaJB;.xaP:<v;tQQN<U MMmoaBu7GV%;' );
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