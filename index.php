<?php

error_reporting(0);

date_default_timezone_set('America/Sao_Paulo');

ini_set('default_charset', 'UTF-8');

function vCode($content) {
	return addslashes(htmlentities(trim(utf8_decode($content)), ENT_QUOTES, 'ISO-8859-1'));
}

require('configs.php');

if(substr($server_url, 0, 7) == 'http://') { $server_url = substr($server_url, 7); }
if(substr($server_url, 0, 8) == 'https://') { $server_url = substr($server_url, 8); }
if(substr($server_url, -1) == '/') { $server_url = substr($server_url, 0, -1); }

require('engine/language.php');

if(isset($_GET['ucp_action'])) {
	$ucpIndexed=1;
	$p = vCode($_GET['ucp_action']);
	if(preg_match("/[^a-zA-Z0-9_-]/", $p)) {
		header("Location: ./"); exit;
	} else {
		if(file_exists('ucp/engine/'.$p.'.php')) {
			$conexao = mysql_connect($host, $user, $pass);
			require('ucp/engine/'.$p.'.php'); exit;
		}
	}
}

if(isset($_GET['process'])) {
	$process = vCode($_GET['process']);
	if(preg_match("/[^a-zA-Z0-9_]/", $process)) {
		header("Location: ./?page=404"); exit;
	} else if(!file_exists('pages/'.$process.'.php')) {
		header("Location: ./?page=404"); exit;
	}
	$processing=1;
	$conexao = @mysql_connect($host, $user, $pass);
	require('pages/'.$process.'.php');
	exit;
}

if(isset($_GET['login'])) {
	
	$user_login = vCode($_POST['ucp_login']);
	if($passEncode == 1) {
		$user_passw = base64_encode(pack('H*', sha1(trim($_POST['ucp_passw']))));
	} else {
		$user_passw = vCode($_POST['ucp_passw']);
	}
	
	if($captcha_cp_on == 1) {
		$captcha = vCode($_POST['ucp_captcha']);
		require_once './engine/captcha/securimage.php';
		$securimage = new Securimage();
		if ($securimage->check($captcha) == false) {
			if(isset($_POST['isJS'])) {
				die(json_encode(array('code' => 'ERROR', 'msg' => ''.utf8_encode($LANG[11979]).'')));
			} else {
				header('Location: ./?lerror=1');
			}
		}
	}
		
	$conexao = mysql_connect($host, $user, $pass);

	$passOk=0;
	$select_login = mysql_query("SELECT login FROM ".$db.".accounts WHERE login = '".$user_login."' AND password = '".$user_passw."' LIMIT 1", $conexao);
	if(mysql_num_rows($select_login) == 1) {
		$passOk=1;
	} else {
		$user_passw = base64_encode(hash('whirlpool', trim($_POST['ucp_passw']), true));
		$select_login = mysql_query("SELECT login FROM ".$db.".accounts WHERE login = '".$user_login."' AND password = '".$user_passw."' LIMIT 1", $conexao);
		if(mysql_num_rows($select_login) == 1) {
			$passOk=1;
		}
	}
	
	@mysql_close($conexao);
	
	if($passOk == 1) {
		setcookie('usercp_login', mysql_result($select_login, 0, 0), 0, '/');
		if($passEncode == 1) {
			setcookie('usercp_pass', $user_passw, 0, '/');
		} else {
			setcookie('usercp_pass', md5($user_passw), 0, '/');
		}
		if(isset($_POST['isJS'])) {
			die(json_encode(array('code' => 'OK', 'msg' => './?page=ucp')));
		} else {
			header("Location: ./?page=ucp");
		}
	} else {
		if(isset($_POST['isJS'])) {
			die(json_encode(array('code' => 'ERROR', 'msg' => ''.utf8_encode($LANG[11990]).'')));
		} else {
			header('Location: ./?lerror=2');
		}
	}

	exit;
}

$p = isset($_GET['page']) ? vCode($_GET['page']) : 'index';

if($p == 'logout') {
	setcookie('usercp_login', '', 0, '/');
	setcookie('usercp_pass', '', 0, '/');
	header('Location: ./');
	exit;
}

if(isset($_GET['ucp'])) { $p = 'ucp'; }

if(isset($_GET['news'])) { $p = 'news'; }

if(preg_match("/[^a-zA-Z0-9_]/", $p)) {
	$p = '404';
} else if(!file_exists('pages/'.$p.'.php') && $p != 'ucp') {
	$p = '404';
}

$indexing=1;

require("layout.php");

if(isset($conexao)) { @mysql_close($conexao); }