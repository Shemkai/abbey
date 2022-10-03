<?php
 /*
 *	DynamsoftBarcodeReader.php
 *	Dynamsoft Barcode Reader PHP wrapper file.
 *
 *	Copyright (C) 2019 Dynamsoft Corporation.
 *	All Rights Reserved.
 */
 
class EnumBarcodeFormat
{
	const BF_ALL = 0x1E0007FF;

	const BF_ONED = 0x7FF;
	
	const BF_CODE_39 = 0x1;

	const BF_CODE_128 = 0x2;

	const BF_CODE_93 = 0x4;

	const BF_CODABAR = 0x8;

	const BF_ITF = 0x10; 
	
	const BF_EAN_13 = 0x20;
	
	const BF_EAN_8 = 0x40;
	
	const BF_UPC_A = 0x80;
	
	const BF_UPC_E = 0x100;
	
	const BF_INDUSTRIAL_25 = 0x200;
	 
	const BF_CODE_39_EXTENDED = 0x400;

	const BF_PDF417 = 0x2000000;

	const BF_QR_CODE = 0x4000000;

	const BF_DATAMATRIX = 0x8000000;

	const BF_AZTEC = 0x10000000;
}


class EnumImagePixelFormat
{
	//0:Black = ; 1:White
	const IPF_Binary = 0;	 	
	//0:White = ; 1:Black
	const IPF_BinaryInverted = 1;	
	//8bit gray
	const IPF_GrayScaled = 2;	 
	//NV21
	const IPF_NV21 = 3;	 	
	//16bit
	const IPF_RGB_565 = 4;	 
	//16bit
	const IPF_RGB_555 = 5;	 
	//24bit
	const IPF_RGB_888 = 6;	 
	//32bit
	const IPF_ARGB_8888 = 7;
	//48bit
	const IPF_RGB_161616 = 8;	 
	//64bit
	const IPF_ARGB_16161616 = 9;	 	 
}

// Describes the extended result type.
class EnumResultType
{
	// Specifies the standard text. This means the barcode value.
	const RT_STANDARD_TEXT = 0;
	// Specifies the raw text. This means the text that includes start/stop characters = ; check digits = ; etc.
	const RT_RAW_TEXT = 1;
	// Specifies all the candidate text. This means all the standard text results decoded from the barcode.
	const RT_CANDIDATE_TEXT = 2;
	// Specifies the partial Text. This means part of the text result decoded from the barcode.
	const RT_PARTIAL_TEXT = 3;
}

// Describes the stage when the results are returned.
class EnumTerminatePhase
{
	/**Exits the barcode reading algorithm after the region predetection is done. */
	const TP_REGION_PREDETECTED = 0x01;
	
	/**Exits the barcode reading algorithm after the region predetection and image pre-processing is done. */
	const TP_IMAGE_PREPROCESSED = 0x02;
	
	/**Exits the barcode reading algorithm after the region predetection, image pre-processing and image binarization are done. */
	const TP_IMAGE_BINARIZED = 0x04;
	
	/**Exits the barcode reading algorithm after the region predetection, image pre-processing, image binarization and barcode localization are done. */
	const TP_BARCODE_LOCALIZED = 0x08;
	
	/**Exits the barcode reading algorithm after the region predetection, image pre-processing, image binarization, barcode localization and barcode type determining are done. */
	const TP_BARCODE_TYPE_DETERMINED = 0x10;
	
	/**Exits the barcode reading algorithm after the region predetection, image pre-processing, image binarization, barcode localization, barcode type determining and barcode recognition are done. */
	const TP_BARCODE_RECOGNIZED = 0x20;
}

class EnumBarcodeColourMode
{
    /**Dark items on the light background. */
	const BICM_DARK_ON_LIGHT = 0x01;
	
	/**Light items on the dark background. Not supported yet. */
	const BICM_LIGHT_ON_DARK = 0x02;
	
	/**Dark items on the dark background. Not supported yet. */
	const BICM_DARK_ON_DARK = 0x04;
	
	/**Light items on the light background. Not supported yet. */
	const BICM_LIGHT_ON_LIGHT = 0x08;
	
	/**The background is mixed by dark and light. Not supported yet. */
	const BICM_DARK_LIGHT_MIXED = 0x10;
	
	/**Dark on light items on the dark background */
	const BICM_DARK_ON_LIGHT_DARK_SURROUNDING = 0x20;
	
	/**Skip the barcode colour operation.  */
	const BICM_SKIP = 0x00;
}

class EnumBarcodeComplementMode
{
	/**Not supported yet. */
	const BCM_AUTO = 0x01;

	/**Complements the barcode using the general algorithm. */
	const BCM_GENERAL = 0x02;

	/**Skip the barcode complement. */
	const BCM_SKIP = 0x00;
}

class EnumBinarizationMode
{
	/**Not supported yet. */
	const BM_AUTO = 0x01;
	
	/**Binarizes the image based on the local block. */
	const BM_LOCAL_BLOCK = 0x02;
	
	/**Skip the binarization. */
	const BM_SKIP = 0x00;
}

class EnumColourClusteringMode
{
	const CCM_AUTO = 0x01;
	
	const CCM_GENERAL_HSV = 0x02;
	
	const CCM_SKIP = 0x00;
}

class EnumDPMCodeReadingMode
{
	const DPMCRM_AUTO = 0x01;
	
	const DPMCRM_GENERAL = 0x02;
	
	const DPMCRM_SKIP = 0x00;
}

class EnumColourImageConvertMode
{
    const CICM_GENERAL = 0x01;
    const CICM_SKIP = 0x00;
}

class EnumRegionPredetectionMode
{
    /**The library will automatically choose the algorithm to detect region. */
	const RPM_AUTO = 0x01;
	
	/**Take the whole image as a region. */
	const RPM_GENERAL = 0x02;
	
	/**Detects region using the general algorithm based on RGB colour contrast. */
	const RPM_GENERAL_RGB_CONTRAST = 0x04;
	
	/**Detects region using the general algorithm based on gray contrast. */
	const RPM_GENERAL_GRAY_CONTRAST = 0x08;
	
	/**Detects region using the general algorithm based on HSV colour contrast. */
	const RPM_GENERAL_HSV_CONTRAST = 0x10;
	
	/**Skip the region detection. */
	const RPM_SKIP = 0x00;
}
	
class EnumTextFilterMode
{
	/**Not supported yet. */
	const TFM_AUTO = 0x01;
	
	/**Filters text using the general algorithm based on contour. */
	const TFM_GENERAL_CONTOUR = 0x02;
	
	/**Skip the text filtering. */
	const TFM_SKIP = 0x00;
}

class ImagePreprocessingMode
{
	/**Not supported yet. */
	const IPM_AUTO = 0x01;
	
	/**Take the unpreprocessed image as the preprocessed result for further reference. */
	const IPM_GENERAL = 0x02;
	
	/**Preprocesses the image using the gray equalization algorithm. */
	const IPM_GRAY_EQUALIZE = 0x04;
	
	/**Preprocesses the image using the gray smoothing algorithm. */
	const IPM_GRAY_SMOOTH = 0x08;
	
	/**Preprocesses the image using the sharpening and smoothing algorithm. */
	const IPM_SHARPEN_SMOOTH = 0x10;
	
	/**Skip the image preprocess */
	const IPM_SKIP = 0x00;
}

class EnumLocalizationMode
{
	/**Not supported yet. */
	const LM_AUTO = 0x01;
	
	/**Localizes barcodes by searching connected blocks. This algorithm usually gives best result and it is recommended to set ConnectedBlocks to the highest priority. */
	const LM_CONNECTED_BLOCKS = 0x02;
	
	/**Localizes barcodes by groups of contiguous black-white regions. This is optimized for QRCode and DataMatrix. */
	const LM_STATISTICS = 0x04;
	
	/**Localizes barcodes by searching for groups of lines. This is optimized for 1D and PDF417 barcodes.  */
	const LM_LINES = 0x08;
	
	/**Localizes barcodes quickly. This mode is recommended in interactive scenario. */
	const LM_SCAN_DIRECTLY = 0x10;
	
	/**Skip the localization. */
	const LM_SKIP = 0x00;
}

class EnumDeformationResistingMode
{
	/**Not supported yet. */
	const DRM_AUTO = 0x01;
	
	/**Resists deformation using the general algorithm. */
	const DRM_GENERAL = 0x02;
	
	/**Skip the deformation resisting. */
	const DRM_SKIP = 0x00;
}

class EnumTextAssistedCorrectionMode
{
	/**Not supported yet. */
	const TACM_AUTO = 0x01;
	
	/**The accompanying text will be used to verify the decoded barcode result. */
	const TACM_VERIFYING = 0x02;
	
	/**The accompanying text will be used to verify and patch the decoded barcode result. */
	const TACM_VERIFYING_PATCHING = 0x04;
	
	/**Skip the text assisted correction. */
	const TACM_SKIP = 0x00;
}

class EnumTextResultOrderMode
{
	/**Returns the text results in descending order by confidence. */
	const TROM_CONFIDENCE = 0x01;
	
	/**Returns the text results in position order, from top to bottom, then left to right */
	const TROM_POSITION = 0x02;
	
	/**Returns the text results in alphabetical and numerical order by barcode format string. */
	const TROM_FORMAT = 0x04;
	
	/**Skip the ordering operation. */
	const TROM_SKIP = 0x00;
}

class EnumTextureDetectionMode
{
	/**Not supported yet. */
	const TDM_AUTO = 0X01;
	
	/**Detects texture using the general algorithm. */
	const TDM_GENERAL_WIDTH_CONCENTRATION = 0X02;
	
	/**Skip the texture detection. */
	const TDM_SKIP = 0x00;
}

class EnumGrayscaleTransformationMode
{
	/**Transforms to the inverted grayscale for further reference. This value is recommand for light on dark images. */
	const GTM_INVERTED = 0x01;
	
	/**Keeps the original grayscale for further reference. This value is recommand for dark on light images. */
	const GTM_ORIGINAL = 0x02;
	
	/**Skip the grayscale transformation. */
	const GTM_SKIP = 0x00;
}

class EnumIntermediateResultType
{
	/**No intermediate result */
	const IRT_NO_RESULT = 0x00;
	
	/**Original image */
	const IRT_ORIGINAL_IMAGE = 0x01;
	
	/**Colour clustered image. Not supported yet. */
	const IRT_COLOUR_CLUSTERED_IMAGE = 0x02;
	
	/**Colour converted grayscale image */
	const IRT_COLOUR_CONVERTED_GRAYSCALE_IMAGE = 0x04;
	
	/**Transformed grayscale image */
	const IRT_TRANSFORMED_GRAYSCALE_IMAGE = 0x08;
	
	/**Predetected region */
	const IRT_PREDETECTED_REGION = 0x10;
	
	/**Preprocessed image */
	const IRT_PREPROCESSED_IMAGE = 0x20;
	
	/**Binarized image */
	const IRT_BINARIZED_IMAGE = 0x40;
	
	/**Text zone */
	const IRT_TEXT_ZONE = 0x80;
	
	/**Contour */
	const IRT_CONTOUR = 0x100;
	
	/**Line segment */
	const IRT_LINE_SEGMENT = 0x200;
	
	/**Form. Not supported yet. */
	const IRT_FORM = 0x400;
	
	/**Segmentation block. Not supported yet. */
	const IRT_SEGMENTATION_BLOCK = 0x800;
	
	/**Typed barcode zone */
	const IRT_TYPED_BARCODE_ZONE = 0x1000;
}

class EnumResultCoordinateType
{
	const RCT_PIXEL = 0x01;
	const RCT_PERCENTAGE = 0x02;
}

class EnumIMResultDataType
{
	const IMRDT_IMAGE = 0x01;
	const IMRDT_CONTOUR = 0x02;
	const IMRDT_LINESEGMENT = 0x04;
	const IMRDT_LOCALIZATIONRESULT = 0x08;
	const IMRDT_REGIONOFINTEREST = 0x10;
}

class EnumConflictMode
{
	const CM_IGNORE = 1;

	const CM_OVERWRITE = 2;
}

class EnumQRCodeErrorCorrectionLevel
{
	/**Error Correction Level H (high) */
	const QRECL_ERROR_CORRECTION_H = 0;
	
	/**Error Correction Level L (low) */
	const QRECL_ERROR_CORRECTION_L = 1;
	
	/**Error Correction Level M (medium-low) */
	const QRECL_ERROR_CORRECTION_M = 2;
	
	/**Error Correction Level Q (medium-high) */
	const QRECL_ERROR_CORRECTION_Q = 3;
}

class PublicRuntimeSettings
{
	public $BarcodeFormatIds;
	public $BinarizationModes;
	public $DeblurLevel;
	public $ExpectedBarcodesCount;
	public $LocalizationModes;
	public $MinBarcodeTextLength;
	public $MinResultConfidence;
	public $RegionTop;
	public $RegionLeft;
	public $RegionRight;
	public $RegionBottom;
	public $RegionMeasuredByPercentage;
	public $ResultCoordinateType;
	public $ScaleDownThreshold;
	public $TextResultOrderModes;
	public $Timeout;
	
	function __construct($settings)
	{
		$this->BarcodeFormatIds = $settings->BarcodeFormatIds;

		$binarizationModes = $settings->BinarizationModes;
		$count = 8;
		$this->BinarizationModes = array();
		for($i = 0 ;$i < $count; $i++)
		{
			array_push($this->BinarizationModes, (int)$binarizationModes[$i]);
		}

		$this->DeblurLevel = $settings->DeblurLevel;
		$this->ExpectedBarcodesCount = $settings->ExpectedBarcodesCount;

		$localizationModes = $settings->LocalizationModes;
		$count = 8;
		$this->LocalizationModes = array();
		for($i = 0 ;$i < $count; $i++)
		{
			array_push($this->LocalizationModes, (int)$localizationModes[$i]);
		}

		$this->MinBarcodeTextLength = $settings->MinBarcodeTextLength;
		$this->MinResultConfidence = $settings->MinResultConfidence;
		$this->RegionTop = $settings->RegionTop;
		$this->RegionLeft = $settings->RegionLeft;
		$this->RegionRight = $settings->RegionRight;
		$this->RegionBottom = $settings->RegionBottom;
		$this->RegionMeasuredByPercentage = $settings->RegionMeasuredByPercentage;
		$this->ResultCoordinateType = $settings->ResultCoordinateType;
		$this->ScaleDownThreshold = $settings->ScaleDownThreshold;

		$textResultOrderModes = $settings->LocalizationModes;
		$count = 8;
		$this->TextResultOrderModes = array();
		for($i = 0 ;$i < $count; $i++)
		{
			array_push($this->TextResultOrderModes, (int)$textResultOrderModes[$i]);
		}

		$this->Timeout = $settings->Timeout;
	}
}

class ExtendedResult
{
	public $BarcodeFormat;
	public $BarcodeFormatString;
	public $Bytes;
	public $Confidence;
	public $ResultType;
	
	function __construct($result)
	{
		$this->BarcodeFormat = $result->BarcodeFormat;
		$this->BarcodeFormatString = $result->BarcodeFormatString;
		
		$ary = $result->Bytes;
		$count = count($ary);
		$this->Bytes = array();
		for($i = 0 ;$i < $count; $i++)
		{
			array_push($this->Bytes,(int)$ary[$i]);
		}	
		
		$this->Confidence = $result->Confidence;
		$this->ResultType = $result->ResultType;	

	}
}

class LocalizationResult
{
	public $TerminatePhase;
	public $BarcodeFormat;
	public $BarcodeFormatString;
	public $Angle;
	public $X1;
	public $Y1;
	public $X2;
	public $Y2;
	public $X3;
	public $Y3;
	public $X4;
	public $Y4;	
	public $ModuleSize;
	public $PageNumber;
	public $RegionName;
	public $DocumentName;
	public $AccompanyingTextBytes;
	
	function __construct($result)
	{
		$this->TerminatePhase = $result->TerminatePhase;
		$this->BarcodeFormat = $result->BarcodeFormat;
		$this->BarcodeFormatString = $result->BarcodeFormatString;
		$this->Angle = $result->Angle;
		$this->X1 = $result->ResultPoints[0];
		$this->Y1 = $result->ResultPoints[1];
		$this->X2 = $result->ResultPoints[2];
		$this->Y2 = $result->ResultPoints[3];
		$this->X3 = $result->ResultPoints[4];
		$this->Y3 = $result->ResultPoints[5];
		$this->X4 = $result->ResultPoints[6];
		$this->Y4 = $result->ResultPoints[7];	
		$this->ModuleSize = $result->ModuleSize;
		$this->PageNumber = $result->PageNumber;
		$this->RegionName = $result->RegionName;
		$this->DocumentName = $result->DocumentName;
			
		$accompanyingTextBytes = $result->AccompanyingTextBytes;
		$count = count($accompanyingTextBytes);
		$this->AccompanyingTextBytes = array();
		for($i = 0 ;$i < $count; $i++)
		{
			array_push($this->AccompanyingTextBytes, (int)$accompanyingTextBytes[$i]);
		}	
	}
}

class TextResult
{
	public $BarcodeBytes;
	public $BarcodeFormat;
	public $BarcodeFormatString;
	public $BarcodeText;
	public $LocalizationResult;
	
	function __construct($result)
	{
		$ary = $result->BarcodeBytes;
		$count = count($ary);
		$this->BarcodeBytes = array();
		for($i = 0 ;$i < $count; $i++)
		{
			array_push($this->BarcodeBytes,(int)$ary[$i]);
		}
						
		$this->BarcodeFormatString = $result->BarcodeFormatString;
		$this->BarcodeFormat = $result->BarcodeFormat;
		$this->BarcodeText = $result->BarcodeText;
		$this->LocalizationResult = new LocalizationResult($result->LocalizationResult);
	}
}


class BarcodeReader
{
	private $m_reader;
	private $m_settings;
	
	function __construct($key)
	{
		$this->m_reader = new COM("DynamsoftBarcodeReaderCtrl.BarcodeReader") or die("cannot build BarcodeReader com");
		$this->checkInit();
		$this->m_reader->LicenseKeys = $key;
	}
	
	private function checkInit()
	{
		if($this->m_reader == NULL)
			throw new Exception("BarcodeReader:NULL Pointer");
	}
	
	private function BuildResult($resultAry)
	{
		$count = $resultAry->Count;
		$retAry = array();
		for($i = 0 ;$i < $count; $i++)
		{
			array_push($retAry, new TextResult($resultAry->Item($i)));
		}		
		return $retAry;
	}
		
	function decodeFile($strFileName, $strTemplateName)
	{
		$this->checkInit();
		$resultAry = $this->m_reader->DecodeFile($strFileName, $strTemplateName);
		return $this->BuildResult($resultAry);
	}
			
	function decodeBase64String($strBase64, $strTemplateName)
	{
		$this->checkInit();
		$resultAry = $this->m_reader->DecodeBase64String($strBase64, $strTemplateName);
		return $this->BuildResult($resultAry);
	}
/*	
	function getAllLocalizationResults()
	{
		$this->checkInit();
		$resultAry = $this->m_reader->GetAllLocalizationResults();

		$count = $resultAry->Count;
		$retAry = array();
		for($i = 0 ;$i < $count; $i++)
		{
			array_push($retAry, new LocalizationResult($resultAry->Item($i)));
		}		
		return $retAry;
	}
*/	
	function getAllParameterTemplateNames()
	{
		$this->checkInit();
		return $this->m_reader->GetAllParameterTemplateNames();
	}
	
	function initRuntimeSettingsWithString($strJsonFileContent, $emSettingPriority)
	{
		$this->checkInit();
		$this->m_reader->InitRuntimeSettingsWithString($strJsonFileContent, $emSettingPriority);
	}
	
	function initRuntimeSettingsWithFile($strJsonFileName, $emSettingPriority)
	{
		$this->checkInit();
		$this->m_reader->InitRuntimeSettingsWithFile($strJsonFileName, $emSettingPriority);
	}
	
	function getRuntimeSettings()
	{
		$this->checkInit();
		$this->m_settings = $this->m_reader->GetRuntimeSettings();
		return new PublicRuntimeSettings($this->m_settings);
	}
	
	function updateRuntimeSettings($settings)
	{
		$this->checkInit();
	
		$this->m_settings->BarcodeFormatIds = $settings->BarcodeFormatIds;
		$this->m_settings->BinarizationModes = $settings->BinarizationModes;
		$this->m_settings->ExpectedBarcodesCount = $settings->ExpectedBarcodesCount;
		$this->m_settings->DeblurLevel = $settings->DeblurLevel;
		$this->m_settings->LocalizationModes = $settings->LocalizationModes;
		
		$this->m_settings->MinBarcodeTextLength = $settings->MinBarcodeTextLength;
		$this->m_settings->MinResultConfidence = $settings->MinResultConfidence;
		$this->m_settings->RegionTop = $settings->RegionTop;
		$this->m_settings->RegionLeft = $settings->RegionLeft;
		$this->m_settings->RegionRight = $settings->RegionRight;
		$this->m_settings->RegionBottom = $settings->RegionBottom;
		$this->m_settings->RegionMeasuredByPercentage = $settings->RegionMeasuredByPercentage;
		$this->m_settings->ResultCoordinateType = $settings->ResultCoordinateType;
		$this->m_settings->ScaleDownThreshold = $settings->ScaleDownThreshold;
		$this->m_settings->TextResultOrderModes = $settings->TextResultOrderModes;
		$this->m_settings->Timeout = $settings->Timeout;
		
		$this->m_reader->UpdateRuntimeSettings($this->m_settings);
	}	
	
	function resetRuntimeSettings()
	{
		$this->checkInit();
		return $this->m_reader->resetRuntimeSettings();
	}
	
	function appendTplStringToRuntimeSettings($strJsonFileContent, $emSettingPriority)
	{
		$this->checkInit();
		$this->m_reader->AppendTplStringToRuntimeSettings($strJsonFileContent, $emSettingPriority);
	}
	
	function appendTplFileToRuntimeSettings($strJsonFileName, $emSettingPriority)
	{
		$this->checkInit();
		$this->m_reader->AppendTplFileToRuntimeSettings($strJsonFileName, $emSettingPriority);
	}
	
	function outputSettingsToString($strSettingsName)
	{
		$this->checkInit();
		return $this->m_reader->outputSettingsToString($strSettingsName);
	}	
	
	function outputSettingsToFile($strSettingsName, $strFilePath)
	{
		$this->checkInit();
		$this->m_reader->OutputSettingsToFile($strSettingsName, $strFilePath);
	}
	
}

?>