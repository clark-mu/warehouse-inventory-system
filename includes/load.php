
<?php
// -----------------------------------------------------------------------
// DEFINE SEPERATOR ALIASES
// -----------------------------------------------------------------------
define("URL_SEPARATOR", '/');

define("DS", DIRECTORY_SEPARATOR);

// -----------------------------------------------------------------------
// DEFINE ROOT PATHS
// -----------------------------------------------------------------------
defined('SITE_ROOT')? null: define('SITE_ROOT', realpath(dirname(__FILE__)));
define("LIB_PATH_INC", SITE_ROOT.DS);


require_once(LIB_PATH_INC.'config.php');
require_once(LIB_PATH_INC.'functions.php');
require_once(LIB_PATH_INC.'session.php');
require_once(LIB_PATH_INC.'upload.php');
require_once(LIB_PATH_INC.'database.php');
require_once(LIB_PATH_INC.'sql.php');

//DEFINE i18n language
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4); //只取前4位，这样只判断最优先的语言。如果取前5位，可能出现en,zh的情况，影响判断。
if (preg_match("/zh-c/i", $lang))
$locale = "zh_CN.UTF-8";
else if (preg_match("/en/i", $lang))
$locale = "en_US.UTF-8";
else if (preg_match("/vi/i", $lang))
$locale = "vi_VN.UTF-8";

$domain = "default";

putenv("LANGUAGE=");
putenv('LANGUAGE='.$locale);
setlocale(LC_ALL,$locale);
bindtextdomain($domain, dirname(dirname(__FILE__))."/locale");
//bind_textdomain_codeset($domain, 'UTF-8');
textdomain($domain);
?>
