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
//define('DB_NAME', 'champagnncchampa');

/** Utilisateur de la base de données MySQL. */
//define('DB_USER', 'champagnncchampa');

/** Mot de passe de la base de données MySQL. */
//define('DB_PASSWORD', 'ATeZDjq2QjRm');

/** Adresse de l’hébergement MySQL. */
//define('DB_HOST', 'champagnncchampa.mysql.db');

define('DB_NAME', 'champagne');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
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
define('AUTH_KEY',         'lJr)pmZr<4TU8/KP;;m~+z[W.q&@&96rA#D(;oh1 Fp>]KbXP<cD,v).p W6D1Oq');
define('SECURE_AUTH_KEY',  ':T6?@rlNs<8Q9g31r59:`_)|*qG *6xS.8EoV<osrKZR BX~oM4OxSg8!y`FwZg-');
define('LOGGED_IN_KEY',    'CoW2~_5ENN`MLd+iW33Fq~@#?>[A%;M<U#[iLOIx~Q~#X$%>V[1W^!|a=T%A)f?L');
define('NONCE_KEY',        '#J6R%`0>uhd]&zr,{L*_V,I6{T-fy)8cx4htSDw^$S3kZH}Tg=:B4-!>m>v7`YgH');
define('AUTH_SALT',        'bw!QZXgEE%AFjVN#Tv9NeviU.WC%k%$)jDs(0f2SZAsKRxat2x+uLelf_`!)77Gq');
define('SECURE_AUTH_SALT', '/?Z<!WWw1Uvh!I+g(gCfHdUOW?5&.nEphYx!iCk8LiS_[S?VC[V!={(E{v G C=}');
define('LOGGED_IN_SALT',   '1TGnqh6~:z8%,k$Cn|EZ82E6[d~$I#|;M<vM/3.7545L9raL!QwFAQ8ur<~u|V/H');
define('NONCE_SALT',       'Ey$mW=_09>owN{l4@U^3r{iX?5jO?%!)3[a*6wa,svL|.>Vv)nRj8D#ie(&RZH_b');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'vg_';

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