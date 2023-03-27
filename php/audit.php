<?php 
    function logs_record($action){

	    $fileName = "logs.txt";
	
        $logLine = date("d/m/y H:i:s")."\t|\t".$_SERVER['PHP_SELF']."\t|\t". $action;

	    if (!file_exists($fileName)){	
            $fileO = fopen($fileName,"w") or die("Error!");

    		$antet = "Дата /\t Ora \t\t|\t Адрес страницы \t|\t\t |\t Активность";

	    	fwrite($fileO, $antet."\r\n");
	    	fclose($fileO);
        }

	    $fileO = fopen($fileName,"a") or die("Error!");
	    fwrite($fileO, $logLine."\r\n"); 
	    fclose($fileO);
    }
    ?>