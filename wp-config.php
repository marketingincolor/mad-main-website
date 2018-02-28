<?php
# Database Configuration

define( 'DB_HOST', 'localhost' );
define( 'DB_NAME', 'madico_real' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'shiva69' );
//define( 'DB_NAME', 'wp_madico' );
//define( 'DB_USER', 'madico' );
//define( 'DB_PASSWORD', '3O6gvcfJ3jPER9t5' );
//define( 'DB_HOST', '127.0.0.1' );
//define( 'DB_HOST_SLAVE', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', 'utf8_unicode_ci' );
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
#define( 'AUTH_KEY', ')_;K%Q!/Piyk8D~}0a%a)-72SieR2~6?|0{(H|vi[M,x^nec;`L/P.9nlahL}nd@' );
#define( 'SECURE_AUTH_KEY', 'iapF>o_%pfG#6vq@:1+9tKAO,NTqV9/N]SX a.l{:C88?^1euW<y@$)72%8qIbc5' );
#define( 'LOGGED_IN_KEY', ';#o{nkewSv|G=8V!9g)).zkB+l>x$]X3i!XQz7:&)>2u4R>_e;UhWh?fqp:k-n`:' );
#define( 'NONCE_KEY', 'EJ|-wszLihpUk@ta:;t350Vwpf2K{8Xv%Lp(:PR:Cl6[Vu]7VE+.D@A|C,P4A9|(' );
#define( 'AUTH_SALT', '3)!"a58Gf[fkA`8>O+;KhTRr8/z^2[6sukjMxfQLl-yF_hd9V)}^J4,s<X)"(]Gf' );
#define( 'SECURE_AUTH_SALT', 'E$mG!tq*n3ucXo`7Yo8b!VrBXW!,`thSgQ`5.AL4uDB$:k3d @LBH*!Hy5?Z9{tK' );
#define( 'LOGGED_IN_SALT', 'D+BviUbnp?+/$}g"ETU}1RHmpU@MW0`j|xMF_Rem|R7+?P]P*c_v8MY~QQ,sw{ba' );
#define( 'NONCE_SALT', '8n,sv"WD.%>sLSQOwBY:-+S%d-za3jiv*a5={XY(:]ScKyn}po /6;~:_G{BFI<%' );


# Localized Language Stuff

#define( 'WP_CACHE', TRUE );

#define( 'WP_AUTO_UPDATE_CORE', false );

#local_remove# define( 'PWP_NAME', 'madico' );

#local_remove# define( 'FS_METHOD', 'direct' );

#local_remove# define( 'FS_CHMOD_DIR', 0775 );

#local_remove# define( 'FS_CHMOD_FILE', 0664 );

#local_remove# define( 'PWP_ROOT_DIR', '/nas/wp' );

#local_remove# define( 'WPE_APIKEY', 'd9574a4afc423dc71122c6c2a9ca01315c38111a' );

#local_remove# define( 'WPE_FOOTER_HTML', "" );

#local_remove# define( 'WPE_CLUSTER_ID', '10709' );

#local_remove# define( 'WPE_CLUSTER_TYPE', 'pod' );

#local_remove# define( 'WPE_ISP', true );

#local_remove# define( 'WPE_BPOD', false );

#local_remove# define( 'WPE_RO_FILESYSTEM', false );

#local_remove# define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

#local_remove# define( 'WPE_SFTP_PORT', 22 );

#local_remove# define( 'WPE_LBMASTER_IP', '104.130.103.55' );

#local_remove# define( 'WPE_CDN_DISABLE_ALLOWED', false );

#local_remove# define( 'DISALLOW_FILE_EDIT', FALSE );

#local_remove# define( 'DISALLOW_FILE_MODS', FALSE );

#local_remove# define( 'DISABLE_WP_CRON', false );

#local_remove# define( 'WPE_FORCE_SSL_LOGIN', false );

#local_remove# define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ #if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

#local_remove# define( 'WPE_EXTERNAL_URL', false );

#local_remove# define( 'WP_POST_REVISIONS', true );

#local_remove# define( 'WPE_WHITELABEL', 'wpengine' );

#local_remove# define( 'WP_TURN_OFF_ADMIN_BAR', false );

#local_remove# define( 'WPE_BETA_TESTER', false );

#local_remove# umask(0002);

#local_remove# $wpe_cdn_uris=array ( );

#local_remove# $wpe_no_cdn_uris=array ( );

#local_remove# $wpe_content_regexs=array ( );

#local_remove# $wpe_all_domains=array ( 0 => 'www.madico.com', 1 => 'madico.com', 2 => 'madico.wpengine.com', 3 => 'www.safetyshield.com', 4 => 'www.msppglobal.com', 5 => 'msppglobal.com', 6 => 'safetyshield.com', );

#local_remove# $wpe_varnish_servers=array ( 0 => 'pod-10709', );

#local_remove# $wpe_special_ips=array ( 0 => '104.130.217.57', );

#local_remove# $wpe_ec_servers=array ( );

#local_remove# $wpe_largefs=array ( );

#local_remove# $wpe_netdna_domains=array ( );

#local_remove# $wpe_netdna_domains_secure=array ( );

#local_remove# $wpe_netdna_push_domains=array ( );

#local_remove# $wpe_domain_mappings=array ( );

#local_remove# $memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
#local_remove# define( 'WPLANG', '' );

# WP Engine Settings
#local_remove# define( 'PWP_DOMAIN_CONFIG', 'www.madico.com' );

#local_remove# define( 'WPE_CACHE_TYPE', 'standard' );



























/*SSLSTART*/
#local_remove# if ( isset( $_SERVER['HTTP_X_WPE_SSL'] ) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on';
/*SSLEND*/

# Custom Settings

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
# define('WP_HOME','http://localhost/madico');
# define('WP_SITEURL','http://localhost/madico');
# define( 'DOMAIN_CURRENT_SITE', 'www.madico.com' );
define( 'DOMAIN_CURRENT_SITE', 'localhost/madico' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
define( 'SUNRISE', 'on' );

#local_remove# $_wpe_preamble_path = null;

# That's It. Pencils down
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}
require_once( ABSPATH . 'wp-settings.php' );

#local_remove# $_wpe_preamble_path = null; if(false){}
