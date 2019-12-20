<?php
 
  header('Access-Control-Allow-Origin: *');
 
 
  if (isset( $_REQUEST['idship'])) { 
     
    $idship = $_REQUEST['idship'];
     
     $modal = 'LAST_CHECK_POINT_ONLY'; 
     
    if (isset($_REQUEST['modal'])) {
       $modal  = ($_REQUEST['modal']!=0)?'ALL_CHECK_POINTS':$modal;
     }
      
    $siteID  = 'v62_OjYFmvBMpl';
    $pwd     = 'pK0YR8D1Xs';
    
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
    <LevelOfDetails>'.$modal.'</LevelOfDetails>
    </req:KnownTrackingRequest>';  

     $URL = 'https://xmlpitest-ea.dhl.com/XMLShippingServlet'; 

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
          header('Content-type: text/xml');
          header('Pragma: public');
          header('Cache-control: private');
          header('Expires: Mon, 25 May 2016 11:31:12 GMT');
          
          $response = curl_exec($ch);
          //$r_xml = simplexml_load_string($response);
          echo($response); 
          curl_close($ch);
       }
   }


?>    