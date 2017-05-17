<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

/*
|--------------------------------------------------------------------------
| Custom-defined constants
|--------------------------------------------------------------------------
|
| custom-defined constants
|
*/
define('SYS_THEME'								,'public/systheme/mit-classic/1.0.0');
define('FLE_BASE_UPLD_PATH_SY'					,'/home/development/public_html/getgo-dcms_files/system_uploads/');
define('FLE_BASE_UPLD_PATH_MS'					,'/home/development/public_html/getgo-api_files/');
define('FLE_APPFORM_UPLD_PATH'					,'app_forms');
define('FLE_IDS_UPLD_PATH'						,'ids');
define('FLE_OTHERS_UPLD_PATH'					,'others');
define('FLE_UPLD_MAX'							,'2000000'); //2mb

define('REDIRECT_LINK'							,'/login/login/view_page_login');
//define('REDIRECT_NO_ACCESS'						,'/home/view_page_no_access/');
define('VIEW_PROFILE_LINK'						,'http://bnmg.unionbankph.com/bnm/asp/mi/upms/UPMS_MYPROFILE_UPDATE.ASP');
define('ADD_USER_LINK'							,'http://bnmg.unionbankph.com/bnm/asp/mi/upms/UPMS_UID_REQUEST.ASP');
define('RESET_PASSWORD_LINK'					,'http://bnmg.unionbankph.com/bnm/asp/mi/upms/upms_reset.asp');
define('ENABLE_UID_LINK'						,'http://bnmg.unionbankph.com/bnm/asp/mi/upms/UPMS_ENABLE_UID.ASP');
define('REQ_ACCESS_LINK'						,'http://bnmg.unionbankph.com/bnm/asp/mi/upms/UPMS_ACCESS_REQUEST.ASP');

define('ENABLE_SCRIPT_LOGGING'					,true);
define('DEF_MSG_SCRIPT_LOGGING'					,'config:sld'); // script logging disabled
define('APP_FORM_TPL_PATH'						,getcwd().'/public/app/docs/templates/GGDCMS-G-Rev 0 UnionBank Debit Card Application Form.pdf');

// ftpuser must only be readonly; used to download EOD files from db/ftp server to web server
define('FLE_EOD_FIN_DWNLD_PATH'					,'ftp://ggdcmsuser:ggdcmsuser@172.210.16.19:21/EOD/FIN/');
define('FLE_EOD_UMB_DWNLD_PATH'					,'ftp://ggdcmsuser:ggdcmsuser@172.210.16.19:21/EOD/UMB/');
define('FLE_EOD_CLM_DWNLD_PATH'					,'ftp://ggdcmsuser:ggdcmsuser@172.210.16.19:21/EOD/CLM/');
// ftpuser must only be readonly; used to download MS attachments from MS/ftp server to GGDCMS/web server
define('FLE_MS_ATTCH_DWNLD_PATH'				,'ftp://ramandus:ramandus123_@172.210.16.223:21/getgo-api-dcms_files');
// access modules and codes
define('ACCESS_MODULES'							,'preprocess|186;validate|187;download_eod_fin|188;download_eod_clm|189;searchview|190;cancel|185;download_eod_umb|191');
// transform all inputs to uppercase
define('USER_INP_CONV',							true);
define('USER_INP_CASE',							'strtoupper');
// footer labels
define('COPYRIGHT_TEXT'							,'&copy; Copyright 2016, UnionBank of the Philippines<br/>Methods Improvement & Transformation. All rights reserved.');
define('DISP_SET_TEXT'							,'Best viewed using Chrome,Firefox,Higher Versions of IE Browsers.');

/* End of file constants.php */
/* Location: ./application/config/constants.php */