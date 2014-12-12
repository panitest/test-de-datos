<?php 
header("content-type: application/javascript");
//$_GET['ani']=1136957601;
ns.responsecuoma=file_get_contents('http://ofertaideal.com/api/v1/actual_plan/ani/'.$_GET['ani']);
?>