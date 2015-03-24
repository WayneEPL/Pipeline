# Pipeline
Free From docoument management system

Credits
-------
<ul>
	<li><a href="http://foundation.zurb.com/">Foundation</a> The front end framework by ZURB under <a href="http://opensource.org/licenses/MIT">MIT License</a></li>
</ul>


TO do
----


Create a file with name settings-local.php inside _core direcotory

<pre>
<?php

// ** MySQL settings - You can get this info from your web host ** //
define('DB_NAME', 'Database name'); // The name of the database to use
define('DB_USER', 'root'); // MySQL database username
define('DB_PASSWORD', 'password'); // MySQL database password
define('DB_HOST', 'localhost'); // MySQL hostname
define('DB_CHARSET', 'utf8'); // Database Charset to use in creating database tables.

define('SITE_URL', 'site url'); // Local Site URL optional

define('ENTRY_TABLE', 'uploads table'); // Main table
?>
</pre>


Uploads Table

<pre>CREATE TABLE IF NOT EXISTS `requests` (
  `SL_NO` int(4) NOT NULL AUTO_INCREMENT,
  `SRN` varchar(32) NOT NULL,
  `FILE_NAME` varchar(400) NOT NULL,
  `REVISION` int(11) NOT NULL DEFAULT '0',
  `CREATE_TIME` datetime NOT NULL,
  `MOD_TIME` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`SL_NO`)
) 
</pre>

Signs table

<pre>CREATE TABLE IF NOT EXISTS `signs` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(300) NOT NULL,
  `CERT_ADD` varchar(300) NOT NULL,
  `TYPE` varchar(20) NOT NULL,
  `TIME` datetime NOT NULL,
  PRIMARY KEY (`ID`)
)</pre>


Upload Entry Table

<pre>CREATE TABLE IF NOT EXISTS `upload_entry` (
  `SL_NO` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(300) NOT NULL,
  `FILE_LOCATION` varchar(300) NOT NULL,
  `UPLOAD_TIME` datetime NOT NULL,
  `LAST_MODIFIED_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS` int(1) NOT NULL DEFAULT '0',
  `SRN` int(8) NOT NULL,
  PRIMARY KEY (`SL_NO`)
) </pre>
