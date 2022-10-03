<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Dynamsoft Barcode Reader - Hello World sample - PHP</title>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <meta name="description" content="The sample demonstrates how to read barcodes (Linear, PDF417, DataMatrix, QR Code, Aztec Code) from a demo image in a PHP application.." />
    <link rel="stylesheet" type="text/css" href="Css/basis.css?ver=2.0" />
    <link rel="stylesheet" type="text/css" href="Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="Css/style.css" />
    <script type="text/javascript">
        function ReadBarcode()
        {
            $('#divResult').text('');
            $('#btnReadBarcode').val('Reading...');
            $('#btnReadBarcode').prop('disabled', true);
                
            $.ajax({
                type: 'POST',
                url: "readbarcode.php",              
                success: function(strValue) {
                    $('#divResult').html(strValue);  
                    $('#btnReadBarcode').val('Read Barcode');
                    $('#btnReadBarcode').prop('disabled', false);                                       
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    $('#divResult').html(errorThrown);
                    $('#btnReadBarcode').val('Read Barcode');
                    $('#btnReadBarcode').prop('disabled', false);                       
                }                           
            });
        }
    </script>
</head>
    <body>
       <div id="wrapper">
            <div id="main">
                <div id="divDownloadSDK">
                    <div id="divCaption">
                        <div id="divCaptionLeft">
                            <div class="floatLeft">
                                <img id="dbrLogo" src="Images/icon-DBR.png" alt="DBR Logo"/>   
                            </div>
                            <div class="floatLeft ml20">
                                <div>
                                    <a target="_blank" class="bluelink fontSize14" href="http://www.dynamsoft.com/Products/Dynamic-Barcode-Reader.aspx">Dynamsoft Barcode Reader</a><span> / </span>
                                    <a target="_blank" class="bluelink fontSize14" href="http://www.dynamsoft.com/Downloads/Dynamic-Barcode-Reader-Sample-Download.aspx">code gallery</a><span> / </span>
                                </div>
                                <div class="displayBlock mt10">
                                    <span id="desc1">Hello World sample in PHP</span>
                                </div>
                            </div>
                        </div>

                        <div class="masterDownloadGrp">
                            <a target="_blank" class="masterDownload first-child" href="http://www.dynamsoft.com/Downloads/Dynamic-Barcode-Reader-Download.aspx">Download SDK</a>
                            <a target="_blank" class="masterDownload" href="http://www.dynamsoft.com/Downloads/SampleDownload.aspx?DemoID=110&product=17">Download Code</a>
                        </div>
                    </div>
                    <div id="divSampleDesc" class="cl">
                        <span class="blackGrayFont16">The sample demonstrates how to read barcodes (Linear, PDF417, DataMatrix, QR Code, Aztec Code) from a demo image in a PHP application.</span>
                    </div>
               </div>
                <div class="minHeight40"></div>

                <div id="divBarcodeReader" class="gray-border-top gray-border-bottom">
                        <div id="divLeft" class="gray-border-right">
                            <img id="imgPreviewer" alt="AllSupportedBarcodeTypes" src="Images/AllSupportedBarcodeTypes.jpg"/>
                        </div>
                    
                        <div id="divRight">
                            <input type="button" id="btnReadBarcode" name="btnReadBarcodeName" class="ml30 mt20 radius3" value="Read Barcode" onclick="ReadBarcode();"></input>
                            <div id="lblResult" class="displayBlock ml30 mt20 blackGrayFont16">Results:</div>
                            <div id="divResult" class="mt20 gray-border grayFont14 pl10"></div>
                        </div>
                    </div>
                <div class="minHeight50"></div>      
             </div>
        </div>
        <script type="text/javascript" src="Scripts/lib/jquery-1.11.2.js"></script>
        <script type="text/javascript" language="javascript" src="Scripts/lib/bootstrap.min.js"></script>
    </body>
</html>
