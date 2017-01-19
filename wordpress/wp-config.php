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
define('DB_NAME', 'wpEval');

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
define('AUTH_KEY',         ')+4.R2}mR+_l&e_:j50g{GR7oG6[A9T3-!ET])omkF%,fC1|_S[4[IAH Nuw?_7p');
define('SECURE_AUTH_KEY',  '=vCha=yn>d.FhnUq//$aZjn:|`+bxDCyje7j{Zm=nR@o^Fk6xV.Z]MN9I2y~Dl@q');
define('LOGGED_IN_KEY',    'd=]zA{.y2Uyxt#uRsULnc wE]jtKuJ7-e|&@-XK_4bGH1K#PU>l^f=EKv*0 um0(');
define('NONCE_KEY',        'Bk$rc{.NdQOtg%!qvi,6xM!!|PLBML0u>O}VDHP{xIPC:D9aa}AA4%o)EKU.rW/e');
define('AUTH_SALT',        'T$j~TpL7QWcB@[[6oJ9kPe;A%pM+x)=4]slz; :JD ZqTKL)hP4 ^^>SQi(Cz8V(');
define('SECURE_AUTH_SALT', 'f+AT8+ DmIwnQQ^=()Jx]}=yGN*o1&L|+W-+;J_m!C~.^i%^~7Mz{:_nE!p$%@iB');
define('LOGGED_IN_SALT',   'prRD,g5nA1EQ=^~;ti8M[E]MQ4c+UU2tvJp};,/[P6F0D,5S6or_Jbt=ItZjW:El');
define('NONCE_SALT',       'j~>4J*!+wITC%3jm>O=_2?|DZo-#E>Xh35~3s7qE.@,4-q.wm)@9o+wbUe%2vBuq');
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