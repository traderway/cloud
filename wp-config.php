<?php

define('DB_NAME', "wp");
define('DB_USER', "wp");
define('DB_PASSWORD', "wp.9898!");
define('DB_HOST', '10.100.120.140');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_general_ci');
/** https://api.wordpress.org/secret-key/1.1/salt/ */

define('AUTH_KEY',         '+b{0O`EC16|FLimDHt`M;4+dB=~rT[LMf.L+8NE+!HTXJ3rH?blRt3[H&+tD+f^G');
define('SECURE_AUTH_KEY',  'zRyW6/pzB]bgzgW;P<mT]Qox=vWM,-Sn::x`U:ti) !IE~FrIz?-ouV8+3gYqynt');
define('LOGGED_IN_KEY',    'eO+m1hIst-)e;1!F-T/K+./qf=`6?-<!2{[<{L1V`SIpk )`DBUx!2I!spVlp;3_');
define('NONCE_KEY',        '8cfC[-_*b-oFMR$d$sLNc3mup8CozEPR/Ry4(0gVQ_d+m8!0dg/Vz5K|ODoOG=HX');
define('AUTH_SALT',        'ZVL>PG;`]+out||WyH:Lq&*iXL/BAA!7G& kA*4[^`,+Lg1<@!$D{|M G)Mi>^Jr');
define('SECURE_AUTH_SALT', 'yE!zcm1x$f{c.SVTI=_yAaZnm_}#JX(AJUDLP.7a[fLViM!Vyh~N.Vq~d}nYhaYp');
define('LOGGED_IN_SALT',   'WNi=Q& (|S%-Fbc|3+I:IkYxTO3HI7~D$eG({W^fn<sk4y@?:WO!A&<4Oz-;mNK/');
define('NONCE_SALT',       ']ob&Rz#0oY|v-i9:!1`fKoGpz7jK*PMm(h,E)Uya:Co|Sw9)TgAG2U>SUYE.a:,v');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

