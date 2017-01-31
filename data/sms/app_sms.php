<?php
	
	/*$tel = $_POST['tel'];
	$tel = substr($tel, 1);	*/
	$tel = '+593988092919';

	$objGsmOut = new COM ("ActiveXperts.GsmOut");
	$objGsmOut->LogFile          = 'C:\Windows';
    $objGsmOut->Device           = 'ZTE Proprietary USB Modem';
  	$objGsmOut->DeviceSpeed      = '0'; 
    $objGsmOut->EnterPin         ('0000');    
    $objGsmOut->MessageRecipient =  $tel;
    $objGsmOut->MessageData      = $_POST['mensaje'];
      
    if($objGsmOut->LastError == 0){
     	$objGsmOut->Send;  
    	echo 'OK';  
    }      
    /*$result = $objGsmOut->GetErrorDescription($objGsmOut->LastError);*/
?>