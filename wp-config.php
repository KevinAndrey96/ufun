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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Ufun' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cYJz[LzSPV>/@Fc||ejA.Rg02?Ce})ma<y2vak6kO GLm|,oFYI5d#*DbxlbY4Xd' );
define( 'SECURE_AUTH_KEY',  'O;50:G$r(DdZ+i;(mBf>XXNoY-]d@Cr<{)ii6$^uGx~* !f{15qLo72,<<nO>N=N' );
define( 'LOGGED_IN_KEY',    'ky%uQKD;d#MoruOa&oc( E]eB!_=Gw=y;UaN+(d_T%I!}iOif)H%P85JuEhcR,7f' );
define( 'NONCE_KEY',        'L$SwY#.k~w7vJ$<b=nXl}hh,v;#?w?,ED$j$bNHE-IFdp^tK+!J0_[F[;~JM84!k' );
define( 'AUTH_SALT',        '4@fw%Il$gL:[L7XeasazgAM|W%FI:ba2YMLW|$x60Sm~Ge<]&P.^0Owv+ sY=Ko>' );
define( 'SECURE_AUTH_SALT', 'IoTk`E:~];^w3_Y3j!-3X:_LJYHP&s-P(&%iVX@ w-xvQtrni3#>j%bk?O<|>fXo' );
define( 'LOGGED_IN_SALT',   'wiwFofS.mE5/]&tX-tA/8ar1Y.!QG,W!i?B<TJ{xp4s4sA~}TqX4A}iW8.*|IA45' );
define( 'NONCE_SALT',       'm_QR *3NWD`70WG<IS^hI`mYLE*BZ7y!;%{bS4u<AbZ7rx}wZQL;:a?M1 nO74P|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
