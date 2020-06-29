<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'ead_dad';
$CFG->dbuser    = 'ead_dad';
$CFG->dbpass    = 'ead_dad2020';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '/var/run/mysqld/mysqld.sock',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'http://ead.descomplicandoadocencia.com.br';
$CFG->dataroot  = '/home/ead_dad/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
