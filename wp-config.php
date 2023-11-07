<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define( 'DB_NAME', 'apropress' );

/** MySQL felhasználónév */
define( 'DB_USER', 'root' );

/** MySQL jelszó. */
define( 'DB_PASSWORD', '' );

/** MySQL  kiszolgáló neve */
define( 'DB_HOST', 'localhost' );

/** Az adatbázis karakter kódolása */
define( 'DB_CHARSET', 'utf8mb4' );

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'AN~kPTEz&f?dOlPI)t6-{M<~27:8MBYNs3{%?hi@:,d%Qf{:Rq@PjGhrd|^HPJCj' );
define( 'SECURE_AUTH_KEY', 'N=$op!yI$QcLa3qBVB6(` X2n [CrB#f9)n-7BQ,QtN*c_I/)6W-bkJ{U$JsEcO|' );
define( 'LOGGED_IN_KEY', '!+{9M2t_y3 :$EhUzZFyCGbU{9TJ}*fKsv{INpYiWqS-g)&:#^@3#8%;z9H+bWT]' );
define( 'NONCE_KEY', 'd+BNE0@EJ89]sy LdkiG6p5qBys{Ch87?Ysry))?q`cI]LX6j+hr*(ts P<EYAkY' );
define( 'AUTH_SALT',        'f*%]%=JE[zx9e{46GEf5v!:C`x0Wj>=P^(Zk{D3%0A}Xr3mKI3(m9>]nGtCsYO19' );
define( 'SECURE_AUTH_SALT', 'rZgI%D/ri#DTYDI 9=y6)d@cVfd7,ryQ3iP)@8u>J_EC+6<H?yGY(Z8 ~&#<f1JU' );
define( 'LOGGED_IN_SALT',   '{4d}P4dnUzU9t[[5;o25#;a$&j08XeZ/>vfL)5(ijHh@YC!yT?OBr6 {iIyNPI:Q' );
define( 'NONCE_SALT',       '@p^-H=3#Mc&$ccbX>!|RzDoaf#D?_MQGlPYFQn0`G[/_Lb3rE7Qz1ZICX)Rc/W8c' );

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során.
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */
/* That's all, stop editing! Happy publishing. */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
