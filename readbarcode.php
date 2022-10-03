<?php
ini_set("display_errors","On");
error_reporting(E_ALL);

 include "dynamsoftbarcodereader.php";
    $root = getcwd();
	$path = $root."/Images/AllSupportedBarcodeTypes.jpg";
	$templetePath = $root."/Templates/";
                                                
    try {   

        $br = new BarcodeReader('t0068NQAAAHdFgn03o2ihzsVjdbJlsXQOAJEyeBIBYNJUiQ75lsM7ly6FETqpQEol/OujNv7U1PGtZaSvqLBjCS6cMK3PeZU=');
    } catch (exception $exp) { 
		echo $exp->getMessage() . '<br/>';
        echo '<p> Your barcode reader component is not registerd correctly, please refer to ReadMe.txt for details.</p><br/>';
        exit;
    }
	                                                                   
    try { 	

        $resultAry = $br->decodeFile($path, '');
				
		$cnt = count($resultAry);
		if($cnt > 0) {
			echo 'Total barcode(s) found:' . $cnt . '.<br/>';
			for ($i = 0; $i < $cnt; $i++) {
				$result = $resultAry[$i];
				echo ($i+1) . ': ';
				echo "$result->BarcodeFormatString, ";
				echo "$result->BarcodeText"; 
				echo "<br/>";
			}
		}
		else {
			echo 'No barcodes found.<br/>';
		}             
	
    } catch(Exception $exp) {
        echo $exp->getMessage() . '<br/>';
        exit;
    }             

?>