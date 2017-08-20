<?php
spl_autoload_register(
  function ($nomeDaClasse) {
    require_once __DIR__.'/models/'.$nomeDaClasse.'.php';
  }
);
session_start();
if (isset($_GET['req'])) {
	$requisicao = $_GET['req'];
}
else {
	$requisicao = 'controller_prazos';
}
// invoco o controlador
require_once __DIR__.'/controllers/'.$requisicao.'.php';