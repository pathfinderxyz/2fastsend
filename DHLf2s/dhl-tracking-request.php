<?php
 
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json; charset=utf-8');
  if (isset( $_REQUEST['idship'])) { 

     $idship = $_REQUEST['idship'];
     $siteID  = 'v62_fcxIADAUQJ';
     $pwd     = 'GqPeiIjc6E';
     $xml_req = 
     '<req:KnownTrackingRequest xmlns:req="http://www.dhl.com" 
     xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
     xsi:schemaLocation="http://www.dhl.com TrackingRequestKnown.xsd" 
     schemaVersion="1.0">
     <Request>
        <ServiceHeader>
            <MessageTime>2002-06-25T11:28:56-08:00</MessageTime>
            <MessageReference>TrackingRequest_Single_AWB__</MessageReference>
            <SiteID>'.$siteID.'</SiteID>
            <Password>'.$pwd.'</Password>
        </ServiceHeader>
     </Request>
    <LanguageCode>en</LanguageCode>
    <AWBNumber>'.$idship.'</AWBNumber>
    <LevelOfDetails>ALL_CHECK_POINTS</LevelOfDetails>
    </req:KnownTrackingRequest>';  

    $URL = 'https://xmlpi-ea.dhl.com/XMLShippingServlet'; 
    //setting the curl parameters.
     $ch = curl_init();

     curl_setopt($ch, CURLOPT_URL,$URL);
     curl_setopt($ch, CURLOPT_VERBOSE, 1);
     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
     curl_setopt($ch, CURLOPT_HTTPHEADER, array('<?xml version="1.0" encoding="UTF-8"?>'));
     curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_req);

    if (curl_errno($ch)) 
       {
        // moving to display page to display curl errors
          echo curl_errno($ch) ;
          echo curl_error($ch);
       } 
     else 
       {
          //getting response from server
          $response = curl_exec($ch);
          $a = json_encode((array) simplexml_load_string($response));
          echo ($a); 
          curl_close($ch);
       }
   }
?>    