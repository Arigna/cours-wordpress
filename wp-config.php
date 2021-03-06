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
define('DB_NAME', 'testwordpress2');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '6EH0P^PQdJPa7 k:|nC{YX9YJ:/}eE(aierljb8Ti}6CK|P|1{5l2O`;n+*cXLB!');
define('SECURE_AUTH_KEY',  '&CF7Z~Y%C0,EiToUF0]L,G(+N.fKE!a,`!,!fZDM+-e7,`2FNyr{hdToOgL0;!dr');
define('LOGGED_IN_KEY',    'IxB}0IZ4YkLu2=>U LpN_j^YOty+]xWPsbPN1K`t<Rj;.n1{$[0tI4KZ=Oc9zZX/');
define('NONCE_KEY',        'cO:@v>5-SnTqr}&*/Pn(rI0nf3B^Qn^^+w=#m )b Jn,/.F`}femxTpYC76JEbXP');
define('AUTH_SALT',        '2UNV:GY][jYZM5Ymub.?psB`d_~PnES8Tw[Rfh_{)/R!Ld+|]d%Q;L-35{6R>xvV');
define('SECURE_AUTH_SALT', 'hp2y,1,EuW:7rG_:7Cl>kWfGAjY<<rvd<@U@*WW9rYW}|@ C^C)}#`KX2C6emiU%');
define('LOGGED_IN_SALT',   'J0DCu7})NaXOo77}vkG4Ux@$4{I7Q%nhHc|}C!Q)T4LR#E+,4q7DG{,QX:HhYzyZ');
define('NONCE_SALT',       'e,p^&-8%q{--=<}R9}iKq<)WPqB!PMPF%L>|::igM=o*Ffi_ODv#T|ue};aQtm:u');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');