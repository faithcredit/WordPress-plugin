<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'CDYRFYJkt/d4EdW8yq3WoSVzWJX3LIDK4wGfIQupRvOfLJnZTsGnB6R/gC8h/Z1JzTSeLuK9y6F65qVrmaq+8w==');
define('SECURE_AUTH_KEY',  's19muTVVEZntwaTdPck7Ap4sN+5LAuBMvzrvtjL02IhzZ3dn+BTmf4kIiM+NYd+xme7pewqhCvPDhQRZQkCYAA==');
define('LOGGED_IN_KEY',    '5fILPImDBD7boaqMolP/PvhCRzL9xjqTHJTnpZXWtohJEsVTh7aLfk2xAH0FrGlHfOpVf4oq7uSCvjTnakAZVg==');
define('NONCE_KEY',        'TWDq0fJ1bLczSdh+rGiJa28TBGLOukkg8QQj6+kbq7cd18MgGx0LnIlPHV2AH+PiXW0TzxdekOElQAFJtJKikg==');
define('AUTH_SALT',        'mxTopjDqK+r7o/NhnjcO8M7sJTdg7SYKhyew2B6Eyyoiuod12FSlQ8cxzcMdJ1I2NZBpFKURGYYkyaf0vst/pQ==');
define('SECURE_AUTH_SALT', 'tkoqJ3tuR7p6Gnr9gmjWL0M1sHyvie3SgR8CCEAwoHvdtzfX6qu5rNN/BQ7a5Wc5GuWOo5iYqPir64HMewYusA==');
define('LOGGED_IN_SALT',   'iUsorYuXoAZJIfStdrar+XG7lwgWOfcOdnq3VBJP+MgAJl4VRAgr7QdaJlXJgKBjo8ZGvPpw+Ywqrdz5z7PDLA==');
define('NONCE_SALT',       '4sc90JOdkiFIScvDMXb+eDLDKgQdvKAoSEwrzD2Kp85B+PfNiNWl20mCAZ3UdpBb0cEvUJfyTA6XnDaZQ78U3A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
