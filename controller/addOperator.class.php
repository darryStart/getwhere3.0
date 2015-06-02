<?php
	echo '进入控制器';
	class addOperatorController extends medoo {
		function addOperator(){
			$de = new addOperator();
			$de->demo1();
		}
	}
	$add = new addOperatorController();
	$add->addOperator();
?>