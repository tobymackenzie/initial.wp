<?php
use TJM\WPThemeHelper\ConfigHelper;

require_once(__DIR__ . '/vendor/autoload.php');

ConfigHelper::init(Array(
	'constants'=> Array(
		//--db config
		'DB_HOST'=> '127.0.0.1'
		,'DB_NAME'=> 'wp'
		,'DB_PASSWORD'=> ''
		,'DB_USER'=> 'root'

		/*--authentication keys / salts

		Please replace these values with your own values.  You can generate values at (https://api.wordpress.org/secret-key/1.1/salt/).  If you find it more convenient to copy and paste the `define`s from that URL, you can paste them above the call to `init()` and then remove this section.
		*/
		,'AUTH_KEY'=> '1234567890poiuytrewq'
		,'SECURE_AUTH_KEY'=> '0987654321zxcvbnmlkjh'
		,'LOGGED_IN_KEY'=> 'asdfghjklpoiuytrewq'
		,'NONCE_KEY'=> 'zxcvbnmlkjhgfdsa'
		,'AUTH_SALT'=> 'asdfghjklmnbvcxz'
		,'SECURE_AUTH_SALT'=> 'mnbvcxzasdfghjkl'
		,'LOGGED_IN_SALT'=> '1234567890qwertyuiop'
		,'NONCE_SALT'=> '1234567890plkjhgfdsazxc'

		//--paths
		,'ABSPATH'=> "{{ConfigHelper::vars.webRoot}}/{{ConfigHelper::vars.wpRelativePath}}"
		,'WP_CONTENT_DIR'=> "{{ConfigHelper::vars.webRoot}}/{{ConfigHelper::vars.contentRelativePath}}"

		//--urls
		,'WP_HOME'=> '{{ConfigHelper::vars.protocol}}://{{ConfigHelper::vars.host}}'
		,'WP_CONTENT_URL'=> "{{WP_HOME}}/{{ConfigHelper::vars.contentRelativePath}}"
		,'WP_SITEURL'=> "{{WP_HOME}}/{{ConfigHelper::vars.wpRelativePath}}"

		//--whether to run in debug mode
		,'WP_DEBUG'=> true

		//--language
		,'WPLANG'=> ''

		//--default theme
		,'WP_DEFAULT_THEME'=> 'TJMBase'
	)
	,'globals'=> Array(
		//--prefix for WordPress table names
		'table_prefix'=> 'wp_'
	)
));

//--load WordPress settings
require_once(ABSPATH . 'wp-settings.php');
