<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'wordpressdaniel' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'root' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', 'mysql' );

/** MySQL-server */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c[.?u;FBi7r`Zgi?G*hA(.am5%k302!;}`:N4 cZ/xy1On6Y SV<4QGF/qP+x3t@' );
define( 'SECURE_AUTH_KEY',  ']mM*L>2x=.E~o]ZYqru(xTy0nWqVS_R!rjZKUv1::HThdGkzvVhG^BM2KXT`HS3L' );
define( 'LOGGED_IN_KEY',    '?g95:7<WTOp/{Vq68[y^!hMWJU3N`z_huG^DD%Z](H|5-z3w:p51km5@*S89y>o9' );
define( 'NONCE_KEY',        '!1RIX&<2brf;jj&w3l-iUl>){dd=~$Mo2ra@[AAU+$B0v2)p~|/xPmv4v@Mns]AA' );
define( 'AUTH_SALT',        'sE%pkKBB{QnG9:J+TnhNo>fsI TVqAQ7+m;k] ,;pDpG>O8KA9hxm{yJ.N>UTQUt' );
define( 'SECURE_AUTH_SALT', 'SYCWI}Se }Vucceqw#|`/g-Go4s!xrN&DKmdaWTka3zjEbi!2Z?z[,+5YJ@ vwn;' );
define( 'LOGGED_IN_SALT',   '2r-2pv<+Kzm(k`rdKvt4<joS<cTS~[B2C!!_Bu:*eg`UM;n}|EsZu)kII?dkeJRt' );
define( 'NONCE_SALT',       'U i9 HzthipK[13{jC~XSlBB2+D}2jV8j^8gLQY/CM~/k}7Y(Ev4G0j[n%%%wFjT' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');