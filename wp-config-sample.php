<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'your_db_name');

/** MySQL database username */
define('DB_USER', 'your_db_user');

/** MySQL database password */
define('DB_PASSWORD', 'your_db_password');

/** MySQL hostname */
define('DB_HOST', 'your_db_host');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7za7W2xb+z,3)1{DgYMZ?:<r%cHrk@+m_M/*y3,fTk3cj-h:pqB:4!LjR0 5iMRU');
define('SECURE_AUTH_KEY',  '!%O$P +#p3$sI6Z5KSC.OQ5<|)[?TI/MLYXIO6;juMe-`YBYR!tT[&<`VK--FFcA');
define('LOGGED_IN_KEY',    'OsCz+Y45G(!-1|86V>JlmF7{_I!0!.LG6lM07,_PpM<i8%]q&_T60QFLYEtyB!&6');
define('NONCE_KEY',        '| *BD=][+g*=+qq9_nG(PsD4h%.Z$@u,.|lIa.5M*Bs)tj3?vMssSt<PX;t>a ^A');
define('AUTH_SALT',        'g7qpdzJ.;_0=+fQ]Ik@RggAzP{s|zY,GGH&)t3mY8+#kiS4|-O*~ cl!z&T3f CK');
define('SECURE_AUTH_SALT', 't;rRv*?sN!iQ++Fz}2E$h(+N;1rWc5N,:@_T9-T3+;x9!xqI:QQFB3~ v-V5*wD9');
define('LOGGED_IN_SALT',   'h8x|K$^ |H3a9hOAYWb^N+pMH5F[!|;hZ_Z|-@/>-rM;F1nL=;4IJVfboub~/A%.');
define('NONCE_SALT',       '{%>ZH&eWmga2-1ly64g :PL%!]B7L(H9pjrTqDOdlpf1s=|8yT! Px=YxMQZ/)[9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'fr_FR');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
