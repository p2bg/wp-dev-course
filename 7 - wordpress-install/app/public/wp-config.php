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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'suC2gxJV/9yB1F4tPFo19cozOMpG1td0QkM94qYz6G4QA2h+XXZzkwgahNHDYx2zC69mT5/EHmVOmk9SfQGWbQ==');
define('SECURE_AUTH_KEY',  'o4wd8rso55UAX3Py+fZ55Mifg/2FtqruxVQYPsmfl3WBXwp+gAuuYhsFME7hYtXs2tx5h0fqSV0ZsWSJkRtDBA==');
define('LOGGED_IN_KEY',    '1DfyCUCfAoUWr8hGWM4iEx37UVxaWVyYEx5WbAEbLEIvFWqj+zHU+WhgVKwo2f0efaBf/6OtD+Bx3LmoD3zzxg==');
define('NONCE_KEY',        'ZqNsh50IbUXMc6V89RKZXLGs8ulkLIpd4zHesl0gcB2ByQ/G2fMt4Tpu/lEND+qtMV9wrQaf1gKvfsuLUryK0A==');
define('AUTH_SALT',        'PKLDyTDDwM8gXpgA68U0IT4ZPRkrCkYk15UOQikB+0iv1Yx7wTaFZKozD5nDoHh/6cLnLXWBP4/UpNDs+iRuvQ==');
define('SECURE_AUTH_SALT', 'VjJmYIrQCqjlQpI5vR/SRUt3m03MCMnJnll7QuIeMGMUjoHl52Q0aOuIpZib2ZycnXx3Arpr/O0OIPqGAVTc3Q==');
define('LOGGED_IN_SALT',   'MoKKfhE+nXWrtfdaLO3wIeL2sCgl/LPLzlfP+QZABiNgu8KvV5cn4wuZEo7/7VhGQ6sicu0AXGIQkQob6nrKeA==');
define('NONCE_SALT',       '87oZ9Usk4f4F1e9aWaO+Z1Ffusfq4wUISMsVD2DZgHN+91UggCfc4gbRMPgSASwz6hJk7guXaW6RuWRz/wLKiQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
