<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'lti');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'ltiusr');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'E-UL6zMgW\'Fs');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', '127.0.0.1');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '4!aY4u{06n4YdN*^f./oGam=t@XAl1s/e/)+XRlC]j!*hevR9EZe7@,GV=_.P0@D');
define('SECURE_AUTH_KEY',  '&y^dw%P,-npJUE`k:&l~|P6,EuDl8!?:w)g,_Uwfs)Faz _|ap74xvQ*o/xZ`;PE');
define('LOGGED_IN_KEY',    'z&xIyttT#k)t-Zi5).BA$}HPoxE?c,TH:#>6R~clj#p*|vu?X;gHDF>IFOSMc0Hx');
define('NONCE_KEY',        'O9X>Oj>T=~WZ~MI|bC|_lh&J&P:L)Qp[4{)yiQXZdM13+*f#y~b^H%KPEuM7D-ED');
define('AUTH_SALT',        '7yw(Kcy~.KS FlRq.|4eKVOF]-*kvqW%+N:8.d.has-:!~q1O]/e:-D|L9a;h,{0');
define('SECURE_AUTH_SALT', ';:hBQPYpvE_=&O>9?h3QY1@$e_<aAX;(<V1G7T#gGdkXgQFpkf~`E-`/TB$+=k#6');
define('LOGGED_IN_SALT',   'Q_<TaruU/478,XfOqahE%vyu;8|XFR`Eo*I}KF*<&Pnn8FXv`x.b+9 I#2ag]4F ');
define('NONCE_SALT',       'gXHkDD4C+3I$r:po|q)eGN#_=Yg}|cxRiZF@H>B$u/Mbh8N*an!-QV7In(1=oKzJ');
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
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
