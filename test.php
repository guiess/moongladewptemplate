<?php
/*
Template Name: Страница для тестов
*/

echo "test";


// Configuration
$accessLicenseNumber = "Add License Key Here";
$userId = "Add User Id Here";
$password = "Add Password Here";

$endpointurl = 'Add URL Here';
$outputFileName = "XOLTResult.xml";

try {
	
	// Create AccessRequest XMl
	$accessRequestXML = new SimpleXMLElement ( "<AccessRequest></AccessRequest>" );
	$accessRequestXML->addChild ( "AccessLicenseNumber", $accessLicenseNumber );
	$accessRequestXML->addChild ( "UserId", $userId );
	$accessRequestXML->addChild ( "Password", $password );
	
	// Create AddressValidationRequest XMl
	$avRequestXML = new SimpleXMLElement ( "<AddressValidationRequest ></AddressValidationRequest >" );
	$request = $avRequestXML->addChild ( 'Request' );
	$request->addChild ( "RequestAction", "AV" );
	
	$address = $avRequestXML->addChild ( 'Address' );
	$address->addChild ( "City", "ALPHARETTA" );
	$address->addChild ( "PostalCode", "300053778" );
	$requestXML = $accessRequestXML->asXML () . $avRequestXML->asXML ();
	
	$form = array (
			'http' => array (
					'method' => 'POST',
					'header' => 'Content-type: application/x-www-form-urlencoded',
					'content' => "$requestXML" 
			) 
	);
	
	// get request
	$request = stream_context_create ( $form );
	$browser = fopen ( $endpointurl, 'rb', false, $request );
	if (! $browser) {
		throw new Exception ( "Connection failed." );
	}
	
	// get response
	$response = stream_get_contents ( $browser );
	fclose ( $browser );
	
	if ($response == false) {
		throw new Exception ( "Bad data." );
	} else {
		// save request and response to file
		$fw = fopen ( $outputFileName, 'w' );
		fwrite ( $fw, "Request: \n" . $requestXML . "\n" );
		fwrite ( $fw, "Response: \n" . $response . "\n" );
		fclose ( $fw );
		
		// get response status
		$resp = new SimpleXMLElement ( $response );
		echo $resp->Response->ResponseStatusDescription . "\n";
	}
	
	Header ( 'Content-type: text/xml' );
} catch ( Exception $ex ) {
	echo $ex;
}

?>

