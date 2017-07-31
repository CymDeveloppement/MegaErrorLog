<?php

/**
* ________  _______   _______    ______   _______         __         ______    ______  
* /        |/       \ /       \  /      \ /       \       /  |       /      \  /      \ 
* $$$$$$$$/ $$$$$$$  |$$$$$$$  |/$$$$$$  |$$$$$$$  |      $$ |      /$$$$$$  |/$$$$$$  |
* $$ |__    $$ |__$$ |$$ |__$$ |$$ |  $$ |$$ |__$$ |      $$ |      $$ |  $$ |$$ | _$$/ 
* $$    |   $$    $$< $$    $$< $$ |  $$ |$$    $$<       $$ |      $$ |  $$ |$$ |/    |
* $$$$$/    $$$$$$$  |$$$$$$$  |$$ |  $$ |$$$$$$$  |      $$ |      $$ |  $$ |$$ |$$$$ |
* $$ |_____ $$ |  $$ |$$ |  $$ |$$ \__$$ |$$ |  $$ |      $$ |_____ $$ \__$$ |$$ \__$$ |
* $$       |$$ |  $$ |$$ |  $$ |$$    $$/ $$ |  $$ |      $$       |$$    $$/ $$    $$/ 
* $$$$$$$$/ $$/   $$/ $$/   $$/  $$$$$$/  $$/   $$/       $$$$$$$$/  $$$$$$/   $$$$$$/  
*
*  __   __   __   _     _   
*  \ \ / /  /  \ / |   /_\  
*   \ V /  | () || |  / _ \ 
*    \_/    \__(_)_| /_/ \_\
*                           
* errorLog can help you for debuging script.
* author @yannchallet
* mail : yann@cymdev.com
*
*/


/**
*
*  ___  ___ ___ _   _  ___   __  __  ___  ___  ___ 
* |   \| __| _ ) | | |/ __| |  \/  |/ _ \|   \| __|
* | |) | _|| _ \ |_| | (_ | | |\/| | (_) | |) | _| 
* |___/|___|___/\___/ \___| |_|  |_|\___/|___/|___|
*                                                  
*
* 0=>Aucun traitement
* 1=>mode debug
* 2=>mode production (erreur dans log/error.log) erreur affichable pour _ERRORLOG_DEBUG_IP_
* 3=>mode production (erreur dans log/error.log)
*
*/

define('_ERRORLOG_DEBUG_MODE_', 1);

/**
*
*  ___ ___   ___  ___ ___ _   _  ___ 
* |_ _| _ \ |   \| __| _ ) | | |/ __|
*  | ||  _/ | |) | _|| _ \ |_| | (_ |
* |___|_|   |___/|___|___/\___/ \___|
*
*                                                  
* Adresse IP client autorisant l'affichage des erreurs
*
*/

define('_ERRORLOG_DEBUG_IP_', '127.0.0.1');

/**
*
*  __  __   _   ___ _      ___  ___ ___ _   _  ___ 
* |  \/  | /_\ |_ _| |    |   \| __| _ ) | | |/ __|
* | |\/| |/ _ \ | || |__  | |) | _|| _ \ |_| | (_ |
* |_|  |_/_/ \_\___|____| |___/|___|___/\___/ \___|
*
*                                                  
* Adresse e-mail de l'administrateur
*
*
*/

define('_ERRORLOG_DEBUG_MAIL_', 'monemail@tld.com');
define('_ERRORLOG_DEBUG_SEND_ERROR_MAIL_', false);

/**
*
*  _    ___   ___   ___ ___ _    ___  
* | |  / _ \ / __| | __|_ _| |  | __| 
* | |_| (_) | (_ | | _| | || |__| _|  
* |____\___/ \___| |_| |___|____|___| 
*                                                  
* 
*	_ERRORLOG_FILE_PATH_
* 	_ERRORLOG_FILE_DAY_
*/

define('_ERRORLOG_FILE_PATH_', 'log/');
define('_ERRORLOG_FILE_DAY_', true);

/**
*
*  __  __   _   _  _ _____ ___ ___   ___ _____ 
* |  \/  | /_\ | \| |_   _|_ _/ __| | _ )_   _|
* | |\/| |/ _ \| .` | | |  | |\__ \ | _ \ | |  
* |_|  |_/_/ \_\_|\_| |_| |___|___/ |___/ |_|  
*                                                  
*
* 	_ERRORLOG_MANTIS_ACTIVE_
*	_ERRORLOG_MANTIS_USER_
* 	_ERRORLOG_MANTIS_PASSWORD_
*	_ERRORLOG_MANTIS_SOAP_URL_
*	_ERRORLOG_MANTIS_PROJECT_
*	_ERRORLOG_MANTIS_CATEGORY_
*
*/

define('_ERRORLOG_MANTIS_ACTIVE_', true);
define('_ERRORLOG_MANTIS_USER_', '');
define('_ERRORLOG_MANTIS_PASSWORD_', '');
define('_ERRORLOG_MANTIS_SOAP_URL_', '');
define('_ERRORLOG_MANTIS_PROJECT_', '');
define('_ERRORLOG_MANTIS_CATEGORY_', '');


/**
*
*  ___ ___ ___  ___  ___   _____ ___ __  __ ___ _      _ _____ ___  
* | __| _ \ _ \/ _ \| _ \ |_   _| __|  \/  | _ \ |    /_\_   _| __| 
* | _||   /   / (_) |   /   | | | _|| |\/| |  _/ |__ / _ \| | | _|  
* |___|_|_\_|_\\___/|_|_\   |_| |___|_|  |_|_| |____/_/ \_\_| |___|
*                                                  
* 
*	_ERRORLOG_TEMPLATE_ = html template {ERROR} is replaced by php error
*/

define('_ERRORLOG_TEMPLATE_FATAL_', '<div style="padding: 20px;background-color: #f44336;color: white;margin-bottom: 15px;"><span style="margin-left: 15px;color: white;font-weight: bold;float: right;font-size: 22px;line-height: 20px;cursor: pointer;transition: 0.3s;" onmouseover="this.style.color=\'black\';" onmouseout="this.style.color=\'\';" onclick="this.parentElement.style.display=\'none\';">&times;</span><b>FATAL : </b><br>{ERROR}</div>');

define('_ERRORLOG_TEMPLATE_WARNING_', '<div style="padding: 20px;background-color: #ff9800;color: white;margin-bottom: 15px;"><span style="margin-left: 15px;color: white;font-weight: bold;float: right;font-size: 22px;line-height: 20px;cursor: pointer;transition: 0.3s;" onmouseover="this.style.color=\'black\';" onmouseout="this.style.color=\'\';" onclick="this.parentElement.style.display=\'none\';">&times;</span><b>WARNING : </b><br>{ERROR}</div>');

define('_ERRORLOG_TEMPLATE_NOTICE_', '<div style="padding: 20px;background-color: #2196F3;color: white;margin-bottom: 15px;"><span style="margin-left: 15px;color: white;font-weight: bold;float: right;font-size: 22px;line-height: 20px;cursor: pointer;transition: 0.3s;" onmouseover="this.style.color=\'black\';" onmouseout="this.style.color=\'\';" onclick="this.parentElement.style.display=\'none\';">&times;</span><b>NOTICE : </b><br>{ERROR}</div>');


/**
*
*  _   _ ___ ___ ___   __  __ ___ ___ ___   _   ___ ___ 
* | | | / __| __| _ \ |  \/  | __/ __/ __| /_\ / __| __|
* | |_| \__ \ _||   / | |\/| | _|\__ \__ \/ _ \ (_ | _| 
*  \___/|___/___|_|_\ |_|  |_|___|___/___/_/ \_\___|___|
*                                                  
*
* 	_ERRORLOG_FATAL_USER_MESSAGE_
*	_ERRORLOG_MANTIS_USER_
*
*/

define('_ERRORLOG_FATAL_USER_MESSAGE_', true);
define('_ERRORLOG_FATAL_USER_MESSAGE_TEMPLATE_', '<div style="padding: 10px;background-color: #f44336;color: white;margin: 0px 0px 15px 0px;position: absolute;top: 0px;left: 0px;width: 100%;"><span style="margin-right: 15px;color: white;font-weight: bold;font-size: 22px;line-height: 20px;cursor: pointer;transition: 0.3s;" onclick="this.parentElement.style.display=\'none\';">&times;</span>Une erreur c\'est produite l\'administrateur en a été informé.Vous pouvez envoyez des précisions a cette adresse : '._ERRORLOG_DEBUG_MAIL_.'</div>');


/**
*
*  _____  _______ ___    _      ___  ___ _____ ___ ___  _  _ ___ 
* | __\ \/ /_   _| _ \  /_\    / _ \| _ \_   _|_ _/ _ \| \| / __|
* | _| >  <  | | |   / / _ \  | (_) |  _/ | |  | | (_) | .` \__ \
* |___/_/\_\ |_| |_|_\/_/ \_\  \___/|_|   |_| |___\___/|_|\_|___/
*                                                  
* 
* _ERRORLOG_NOT_INTERNAL_HANDLER_
*		true, don't execute PHP internal error handler
*
* _ERRORLOG_FORCE_DISPLAY_ERROR_GET_
*		empty : not active, string : $_GET variable to force error display
*
*/


define('_ERRORLOG_NOT_INTERNAL_HANDLER_', false);
define('_ERRORLOG_FORCE_DISPLAY_ERROR_GET_', '');










/**
* Class Error Log
*/
class ErrorLog
{
	private static $_dispError = false;
	static public function set()
	{
		if (_ERRORLOG_DEBUG_MODE_ > 0 && _ERRORLOG_DEBUG_MODE_ < 4) {
			$error_handler = set_error_handler(array('ErrorLog', 'ErrorHandler'));
			register_shutdown_function(array('ErrorLog', 'shutdown'));
		}
		
		switch (_ERRORLOG_DEBUG_MODE_) {
		    case 1:
		        if (PHP_VERSION_ID < 50400) error_reporting (E_ALL | E_STRICT);
		        else error_reporting (E_ALL);
		        self::initDispError();
				ini_set('display_errors', false);
				ini_set('html_errors', false);
				ini_set('display_startup_errors',false);
				self::initLogFolder();
			    self::initErrorLogFile();
				ini_set('error_prepend_string','<span style="color: red;">');
				ini_set('error_append_string','<br /></span>');
				ini_set('ignore_repeated_errors', false);
			    break;
		    case 2: 
		        if (PHP_VERSION_ID < 50400) error_reporting (E_ALL | E_STRICT);
		        else error_reporting (E_ALL);
		        self::initLogFolder();
				ini_set('display_errors', false);
				ini_set('html_errors', false);
				ini_set('display_startup_errors',false);
				
				self::initErrorLogFile();
				self::initDispError();
				ini_set('error_prepend_string','<span style="color: red;">');
				ini_set('error_append_string','</span>');
				ini_set('ignore_repeated_errors', true);
		    	break;
		    case 3: 
		        if (PHP_VERSION_ID < 50400) error_reporting (E_ALL | E_STRICT);
		        else error_reporting (E_ALL);
		        self::initLogFolder();
				ini_set('display_errors', false);
				ini_set('html_errors', false);
				ini_set('display_startup_errors',false);
				
				self::initErrorLogFile();
				self::initDispError();
				ini_set('ignore_repeated_errors', true);
			    break;
		    default:
				if (PHP_VERSION_ID < 50400) error_reporting (E_ALL | E_STRICT);
		        else error_reporting (E_ALL);
				ini_set('display_errors', false);
				ini_set('html_errors', false);
				ini_set('display_startup_errors',false);
				ini_set('log_errors', false);
		}
		
	}

	private static function initLogFolder()
	{

		if (is_dir(_ERRORLOG_FILE_PATH_)) {
			if (!is_writable(_ERRORLOG_FILE_PATH_)) {
				echo str_replace('{ERROR}', _ERRORLOG_FILE_PATH_.' is not writable', _ERRORLOG_TEMPLATE_WARNING_);
			}
		} else {
			if (self::$_dispError) {
	    		echo str_replace('{ERROR}', _ERRORLOG_FILE_PATH_.' is not a directory', _ERRORLOG_TEMPLATE_WARNING_);
	    	}
		}
	}

	private static function initDispError()
	{
		if ((_ERRORLOG_DEBUG_MODE_ == 1)
			|| (_ERRORLOG_DEBUG_MODE_ == 2 && $_SERVER["REMOTE_ADDR"] == _ERRORLOG_DEBUG_IP_)
			|| (_ERRORLOG_FORCE_DISPLAY_ERROR_GET_ != '' && isset($_GET[_ERRORLOG_FORCE_DISPLAY_ERROR_GET_]))) {
			self::$_dispError = true;
		}
	}

	private static function initErrorLogFile()
	{
		ini_set('log_errors', true);
		if (_ERRORLOG_FILE_PATH_ !== false) {
			if (_ERRORLOG_FILE_DAY_) {
				$fileName = _ERRORLOG_FILE_PATH_ . date('Y-m-d').'_error.log';
			} else {
				$fileName = _ERRORLOG_FILE_PATH_ . 'error.log';
			}
			ini_set('error_log', $fileName);
		}
	}

	private static function sendToMantisBT($errno, $errstr, $errfile, $errline)
	{
		$message = "ERROR [$errno] $errstr\n
	    			Error on line $errline in file $errfile, PHP " . PHP_VERSION . " (" . PHP_OS . ")\n";
		if (_ERRORLOG_MANTIS_ACTIVE_ && _ERRORLOG_DEBUG_MODE_ > 1) {
			switch ($errno) {
		    case E_USER_ERROR:
		    	$type = 'FATAL';
		    	$severity = 80;
		        break;

		    case E_USER_WARNING:
		    	$type = 'WARNING';
		    	$severity = 60;
		        break;

		    case E_USER_NOTICE:
		    	$type = 'NOTICE';
		    	$severity = 50;
		        break;

		    default:
		    	$type = 'FATAL';
		    	$severity = 80;
		        break;
		    }
			try {
				$client = new SoapClient(_ERRORLOG_MANTIS_SOAP_URL_);
			    $issue = array (
			          	'summary' => $errstr, 
			            'description' => $type.'::'.$message, 
			            'project'=>array('name'=>_ERRORLOG_MANTIS_PROJECT_), 
			            'category'=>_ERRORLOG_MANTIS_CATEGORY_,
			            'platform'=>'PHP '.PHP_VERSION,
			            'os'=>PHP_OS,
			            'os_build'=>php_uname('r'),
			            'severity'=>array('id'=>$severity),
			            'status'=>array('id'=>40),
			          	'additional_information'=>"Imported from ERRORLOG - ".date('d.m.Y H:i:s')."\n".php_uname()
			                    );
			    $issue_id = $client->mc_issue_add(_ERRORLOG_MANTIS_USER_, _ERRORLOG_MANTIS_PASSWORD_, $issue);
			    var_dump($issue_id);
			}
			catch (SoapFault $exception) {
				echo $exception;
				error_log($exception);       
			}
		}
	}

	public static function ErrorHandler($errno, $errstr, $errfile, $errline)
	{
	    $message = "<b>ERROR</b> [$errno] $errstr<br />\n
	    			Error on line $errline in file $errfile, PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";

	    switch ($errno) {
	    case E_USER_ERROR:
	    	if (self::$_dispError) {
	    		echo str_replace('{ERROR}', $message, _ERRORLOG_TEMPLATE_FATAL_);
	    	}
	        break;

	    case E_USER_WARNING:
	    	if (self::$_dispError) {
	    		echo str_replace('{ERROR}', $message, _ERRORLOG_TEMPLATE_WARNING_);
	    	}
	        break;

	    case E_USER_NOTICE:
	    	if (self::$_dispError) {
	    		echo str_replace('{ERROR}', $message, _ERRORLOG_TEMPLATE_NOTICE_);
	    	}
	        break;

	    default:
	    	if (self::$_dispError) {
	    		echo str_replace('{ERROR}', $message, _ERRORLOG_TEMPLATE_FATAL_);
	    	}
	        break;
	    }
	    self::sendToMantisBT($errno, $errstr, $errfile, $errline);
	    
	    if ($errno == E_USER_ERROR) {
	    	if (_ERRORLOG_FATAL_USER_MESSAGE_ && _ERRORLOG_DEBUG_MODE_ > 1) {
	    		echo _ERRORLOG_FATAL_USER_MESSAGE_TEMPLATE_;
	    	}
	    	exit(1);
	    }


	    /* Don't execute PHP internal error handler */
	    return _ERRORLOG_NOT_INTERNAL_HANDLER_;
	}

	public static function shutdown()
	{
		if (_ERRORLOG_DEBUG_MODE_ == 1) {
			echo '<div style="padding: 10px;background-color: #f44336;color: white;margin: 0px 0px 15px 0px;position: absolute;top: 0px;left: 0px;width: 100%;"><span style="margin-right: 15px;color: white;font-weight: bold;font-size: 22px;line-height: 20px;cursor: pointer;transition: 0.3s;" onclick="this.parentElement.style.display=\'none\';">&times;</span>Mode debug activé, si vous voyer ce Bandeau merci de contacter le webmaster : '._ERRORLOG_DEBUG_MAIL_.'</div>', PHP_EOL;
		}
	}
	
}

ErrorLog::set();


