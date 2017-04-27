<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'bubba');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', 'root');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1+r/%4.rGmu2A-5lGa1?vg|<AwK6bBNX&v-.$.BL.VA$iBRk`P0p?3k*7X{?]2:g');
define('SECURE_AUTH_KEY',  '4qFyp{C8!gM,PE!2v|W|$YZ04)R?@o:4#.G@RSs]G;lX=L@k:L!r%MzS~cfP{kAj');
define('LOGGED_IN_KEY',    's5z*gDEBX_-=R3_yX8{psbdcrOXtRc1<TIf1qgmHB.goIxI~6zYw[PNg8sC?)(fc');
define('NONCE_KEY',        '4*@b7%FwI)8AFV< Nb{h-nSKh msd<#qzyH8d#U|6XjkAydsAY#AipIbsgG6e~;D');
define('AUTH_SALT',        '$eb`E*sd8y+mp7zWrO<g?23XOWYAFu-Y`xJ&v!}j)@=8IbC{/Xrh=I`hggyPLCDz');
define('SECURE_AUTH_SALT', '4mQF`o[mVEPnd#%tSr9SsmK -V$&<%djgF*vK.f9tbu5Pb-V}2NND0!${a<H;2zu');
define('LOGGED_IN_SALT',   '&X4]cCt32*1/aR|Tc8vL#{Q9]{9RAM)[jX9OlTOGCaT~K!Gg,y~yY[L)ha%MamzA');
define('NONCE_SALT',       '}}RTsA(Di&/d[;HL=y@GTz{rHjUUJq=fO<5/|OdX`es)>Jd*0N,ZZ?]o8[x9owV_');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');