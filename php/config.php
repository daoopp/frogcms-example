<?php 

// Database information:
// for SQLite, use sqlite:/tmp/frog.db (SQLite 3)
// The path can only be absolute path or :memory:
// For more info look at: www.php.net/pdo

// Database settings:
define('DB_DSN', 'mysql:dbname=frogcms;host=' . $_ENV['OPENSHIFT_DB_HOST'] . ';port=' . $_ENV['OPENSHIFT_DB_PORT']);
define('DB_USER', $_ENV['OPENSHIFT_DB_USERNAME']);
define('DB_PASS', $_ENV['OPENSHIFT_DB_PASSWORD']);
define('TABLE_PREFIX', '');

// Should Frog produce PHP error messages for debugging?
define('DEBUG', false);

// Should Frog check for updates on Frog itself and the installed plugins?
define('CHECK_UPDATES', true);

// The number of seconds before the check for a new Frog version times out in case of problems.
define('CHECK_TIMEOUT', 3);

// The full URL of your Frog CMS install
define('URL_PUBLIC', 'http://' . $_ENV['OPENSHIFT_APP_DNS'] . '/');

// The directory name of your Frog CMS administration (you will need to change it manually)
define('ADMIN_DIR', 'admin');

// Change this setting to enable mod_rewrite. Set to "true" to remove the "?" in the URL.
// To enable mod_rewrite, you must also change the name of "_.htaccess" in your
// Frog CMS root directory to ".htaccess"
define('USE_MOD_REWRITE', TRUE);

// Add a suffix to pages (simluating static pages '.html')
define('URL_SUFFIX', '.html');

// If your server doesn't have PDO (with MySQL driver) set the below to false:
define('USE_PDO', true);

// Set the timezone of your choice.
// Go here for more information on the available timezones:
// http://php.net/timezones
define('DEFAULT_TIMEZONE', 'GMT');
