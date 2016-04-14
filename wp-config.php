<?php
# Database Configuration
define( 'DB_NAME', 'wp_madico' );
define( 'DB_USER', 'madico' );
define( 'DB_PASSWORD', '3O6gvcfJ3jPER9t5' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', 'utf8_unicode_ci' );
$table_prefix = 'wp_';



# Security Salts, Keys, Etc
define( 'AUTH_KEY', ')_;K%Q!/Piyk8D~}0a%a)-72SieR2~6?|0{(H|vi[M,x^nec;`L/P.9nlahL}nd@' );
define( 'SECURE_AUTH_KEY', 'iapF>o_%pfG#6vq@:1+9tKAO,NTqV9/N]SX a.l{:C88?^1euW<y@$)72%8qIbc5' );
define( 'LOGGED_IN_KEY', ';#o{nkewSv|G=8V!9g)).zkB+l>x$]X3i!XQz7:&)>2u4R>_e;UhWh?fqp:k-n`:' );
define( 'NONCE_KEY', 'EJ|-wszLihpUk@ta:;t350Vwpf2K{8Xv%Lp(:PR:Cl6[Vu]7VE+.D@A|C,P4A9|(' );
define( 'AUTH_SALT', '3)!"a58Gf[fkA`8>O+;KhTRr8/z^2[6sukjMxfQLl-yF_hd9V)}^J4,s<X)"(]Gf' );
define( 'SECURE_AUTH_SALT', 'E$mG!tq*n3ucXo`7Yo8b!VrBXW!,`thSgQ`5.AL4uDB$:k3d @LBH*!Hy5?Z9{tK' );
define( 'LOGGED_IN_SALT', 'D+BviUbnp?+/$}g"ETU}1RHmpU@MW0`j|xMF_Rem|R7+?P]P*c_v8MY~QQ,sw{ba' );
define( 'NONCE_SALT', '8n,sv"WD.%>sLSQOwBY:-+S%d-za3jiv*a5={XY(:]ScKyn}po /6;~:_G{BFI<%' );



# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'madico' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'd9574a4afc423dc71122c6c2a9ca01315c38111a' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '10709' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 22 );

define( 'WPE_LBMASTER_IP', '104.130.103.55' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', true );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'www.madico.com', 1 => 'madico.com', 2 => 'madico.wpengine.com', 3 => 'www.safetyshield.com', 4 => 'www.msppglobal.com', 5 => 'msppglobal.com', 6 => 'safetyshield.com', );

$wpe_varnish_servers=array ( 0 => 'pod-10709', );

$wpe_special_ips=array ( 0 => '104.130.217.57', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define( 'WPLANG', '' );



# WP Engine Settings
define( 'PWP_DOMAIN_CONFIG', 'www.madico.com' );





define( 'WPE_CACHE_TYPE', 'standard' );



























/*SSLSTART*/
if ( isset( $_SERVER['HTTP_X_WPE_SSL'] ) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on';
/*SSLEND*/



# Custom Settings











define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'www.madico.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
define( 'SUNRISE', 'on' );

$_wpe_preamble_path = null;



# That's It. Pencils down
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}
require_once( ABSPATH . 'wp-settings.php' );

$_wpe_preamble_path = null; if(false){}
