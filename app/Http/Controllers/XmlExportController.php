<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class XmlExportController extends Controller
{
    public function downloadXml(Request $request)
{
    // Retrieve form data or data you want to export to XML
    $formData = $request->all(); // You can replace this with your data source

    // Convert the data to XML format
    $xml = $this->arrayToXml($formData);

    // Set the response content type to XML
    $response = Response::make($xml);
    $response->header('Content-Type', 'application/xml');

    // Set a filename for the downloaded XML file (optional)
    $response->header('Content-Disposition', 'attachment; filename="form_data.xml"');

    return $response;
}
private function arrayToXml($array, $rootElementName = 'data')
{
    $xml = new \SimpleXMLElement("<$rootElementName/>");

    // Function to convert an array to XML recursively
    $arrayToXml = function ($array, $xml) use (&$arrayToXml) {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $subnode = $xml->addChild($key);
                $arrayToXml($value, $subnode);
            } else {
                $xml->addChild($key, htmlspecialchars($value));
            }
        }
    };

    $arrayToXml($array, $xml);

    // Format the XML for better readability (optional)
    $dom = new \DOMDocument();
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());

    return $dom->saveXML();
    
}

}
