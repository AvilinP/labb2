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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'labb2Avilin' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'medie-admin' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', 'medie-admin' );

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
define( 'AUTH_KEY',         'bs$w)$|pKjQ*8PS=TTS?T4.=tW/8&<*teq{VP6_j(1)8r3TleiCT$T-UFL*@8EZC' );
define( 'SECURE_AUTH_KEY',  'X+mo6Ekaf>pf>J6anmn-@M[-M6e3:LOIVhr=<>g{A V:@gP@}oy:sGuAS5V1,zR7' );
define( 'LOGGED_IN_KEY',    ',&X]e6%YZr7rWL,pX,A1Q6Dw,G,O6ouK(m=%mJF$Ia|<Jw,J2xbN(T_Cf&l37i2 ' );
define( 'NONCE_KEY',        'T FLszs724Zo?%y7~}[hm013a=0}[u5d[Z#cds`Nm1/3_~fx?Je-MJh!C_6^C30%' );
define( 'AUTH_SALT',        'VtX!SyaCz<Wh(^/h+~I>eND8X,ZI{tV>Po9muLneNoHXSlpw} [F452+D0LCl/9<' );
define( 'SECURE_AUTH_SALT', '+iTV)LPrK/:l6@Vt*uc)-a` dS#Ob|^TQDxuo+$/79w^.XDIv(E-BOemB#)KQG`M' );
define( 'LOGGED_IN_SALT',   '4V!vn1Y!hJix8{IN@.[^CGESM.Jatf@y8Xj*rKazsWJwD&:cywbqo`c]!Ko/7E|3' );
define( 'NONCE_SALT',       'mpz$LTsd>dM3R0UNkeR!Xl.3OTn@Tt|l7BFwMAdtwq:ZB?V]!/!m<IhWSkbU jTr' );
define('FS_METHOD','direct');
define('WP_MEMORY_LIMIT', '256M');

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
define('WP_DEBUG', true);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */



define('CONCATENATE_SCRIPTS', false);
/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');