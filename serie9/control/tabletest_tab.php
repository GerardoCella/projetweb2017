<?php
	
    require_once '../control/core.php';

    $Tabletest = Model::load("tabletest");
    $Tabletest->read();
    require '../vue/tabletest_tab.php';
?>