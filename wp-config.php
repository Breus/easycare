<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bgctest_wp2');

/** MySQL database username */
define('DB_USER', 'bgctest_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'T)CjrOn@q0l0yuXQLO,34#^1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'E1NkPa0PaCgUjm8eWOgZxEF6vAxRbr88YCssMah9ZSP54U1QiDV6i6PDYMy7co4H');
define('SECURE_AUTH_KEY',  'SmYrpeCZGkghSvbJzz46fJPoGojwFHWkWDXkdX5Etx1rIbHSNIbOzh5rkWWkPZoP');
define('LOGGED_IN_KEY',    'QIyktam9a6JPuTiiylRshKre6gbFPvUFEXMzW9XADwtEIBDCOsV1rjKdz0tkOU71');
define('NONCE_KEY',        'yq87ZlTbxp8CGlovN6sDT0yrhM8gRX5Jrn1YdGY7Rp2KwXnjlmiHGCq6LtIazbFa');
define('AUTH_SALT',        'jdKgjv0aIdawajwN5XF3aqxe7HcdYhE2MNFoQJnjQsmqaFLNi7dVBqdaWNHiNDRv');
define('SECURE_AUTH_SALT', 'leSNbZWwqEIEJH6PL8tuJl3dJ4aPwgGj3f9IppvMmJBhUOPfFgyEDlSnO8LtUmAx');
define('LOGGED_IN_SALT',   'GqEsPTY6IiINZMIiFCZqsFXQNYLRfiAVfYGdCF9bwGtsJ7voIkJf1AjAc83EIea7');
define('NONCE_SALT',       'ozm3NHemWnQ5MqOiV2Bp3C6kp4m4t5ywfkyJz3t23PEoTS8EtCq8DwhJ89hjAb0X');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');