<?php
	require_once 'Controller/dbExec.php';

	if($_POST['op']==0){
		$query="call titan.SP_agenda('');";

		$json=dbExec::exec($query);//clase read QueryExe
   		echo $json;
	}else if($_POST['op']==1){
		$query="CALL sp_viewKits();";

		$json=dbExec::exec($query);//clase read QueryExe
   		echo $json;
	}	
?>