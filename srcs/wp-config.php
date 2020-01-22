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
define('DB_NAME', 'wpadda');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'addasil');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'addasil');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'x~Ssn?;L:vZ(^AN:3q~=]7a{dGZA!hS;-MsRx^+Be]aGrDc1^~n,R:.QR2WGzW0P');
define('SECURE_AUTH_KEY',  'f|X]N~fIVYoz3<l8zj/@2wiv}z<I3YS>VzXSLQF}|zjC(76{YZ.gLw?.#GCdGw@y');
define('LOGGED_IN_KEY',    '4ev,}XI_nbTvD9PSoexuPFqQ$,yA434}PLY.WGVk;5xJXkHR 7Tmhh2=6#6]#j|l');
define('NONCE_KEY',        '@$gbjWBW,+kk7 lk=@+^p>3sDMFSt*)MGcw^N4cn||H:6Ydk^ /{TY+VlQ4C[iR`');
define('AUTH_SALT',        'D7z6yQZ|oAl}U}O!M|Cvok7@sc^< !vJ#g!bXr-nydY:`}EUD@7S&-.B.pl_-db;');
define('SECURE_AUTH_SALT', 'Tsvh|a~6@:,f=_8G P<M]M>LWkx:?0rw~x+$%z(4^N:X*A [ZJ?XZjb~6IQ}czS|');
define('LOGGED_IN_SALT',   '- V)w4Y8%r>UUpbg/8|?J0-F*Nj;hF0Kh*{Y8;54?YIDwQ]P!?|q+n8kl2&H)@W#');
define('NONCE_SALT',       '+nE?(E3+MFLfPfde0Br5YYta(uV@JD@fre|#vS-|sn1dlG^4- l {$1zJK|Y#mG^');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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