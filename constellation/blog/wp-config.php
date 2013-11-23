<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'ensisa');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'ensisa');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '16ftdp2b');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N-a&^0[+=T-/x!Y4}zx#vz `+1Z|#oA~(&c[QGH5X+VKKf1x7.P3j.c/[1+tretd');
define('SECURE_AUTH_KEY',  '3m,!BG7},&m4;Y%LU?|D0%eSB*@pjUs{h@IcB3.$`?]#]MJI>GGl=lYM{)8ElJ+Q');
define('LOGGED_IN_KEY',    'lk&^(ha[&0|j2uwuqT`m<0f<*Jp-)$y=&Kr-]}q2:L1T.y;MP_+K ;~AT?&oQWX-');
define('NONCE_KEY',        '-~4-RX!/`kpsm(~h0Ss?N+el*Mx5HQ{fc:#g|g[`XL8VDVW|,Wv9=.}]Y<;U4g*8');
define('AUTH_SALT',        '`ZzuIl7S-(r<`R$+HGk`-(UKUQ@e21{eE|OF*Z_-961`F%)cy6N!8;,0]~vzat?[');
define('SECURE_AUTH_SALT', '{wC|7]>BL&~QaoAxJ!yCjkmTPUc+*x9=7Y+bl!Eae>!{2ONX^|M!{dkM*Z#u=)|s');
define('LOGGED_IN_SALT',   '=<;>To+rX}W;LFcX9Dg4P&w-J(|.Z +peM-RG+5R.&`8lO6tL7wOQazq[>M6Grg,');
define('NONCE_SALT',       '9mTUXPbqZr)LC^_=T<<5ZK^:n}/^1g4RFF-Z);})cQ}lO*vl-6>%y5f+1cX.y/+g');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');