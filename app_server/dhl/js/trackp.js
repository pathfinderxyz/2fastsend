
function loadTrackingStatus() {
  var xhttp = new XMLHttpRequest();
  var bNumber = document.getElementById("billNumber").value; 
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      settingXML(this);
    } 
    
  };
 
//  xhttp.open("GET", "dhl-tracking-xml.php?modal=1&idship="+bNumber, true);

  xhttp.open("GET", "tracking.xml", true);
  xhttp.send();
}


function settingXML(xml) {

 var i;
 var xmlDoc = xml.responseXML;
 var table= buildTable ("thead","");
 var sDate = "",sServiceAreaCode = "" , sTime = "", sSignatory ="" ;
 var nEvent, nServiceArea;
 var pSig;  
 var x ; 

 try {
    x  = xmlDoc.getElementsByTagName("ShipmentEvent");
 

   for (i = 0; i <x.length; i++) 
    { 
    
     sDate = x[i].getElementsByTagName("Date")[0].childNodes[0].nodeValue; 
     sTime = x[i].getElementsByTagName("Time")[0].childNodes[0].nodeValue;
     nEvent = x[i].getElementsByTagName("ServiceEvent")[0];  
     nServiceArea = x[i].getElementsByTagName("ServiceArea")[0];
     sServiceAreaCode = nServiceArea.getElementsByTagName("ServiceAreaCode")[0].childNodes[0].nodeValue;     
     sSACDesc = nServiceArea.getElementsByTagName("Description")[0].childNodes[0].nodeValue;
     sEventCode = nEvent.getElementsByTagName("EventCode")[0].childNodes[0].nodeValue;
     sDescription = nEvent.getElementsByTagName("Description")[0].childNodes[0].nodeValue;
  
     table += '<tr><th scope="col">'+i+'</th>'+
                '<td>' + sDate +'</td><td>'+ sTime +'</td>'+
                '<td>' + sServiceAreaCode+'</td><td>'+ sSACDesc+'</td>'+
                '<td>' + sEventCode +'</td><td>'+ sDescription+ '</td>'+
              '<tr>';

   }

   if (sEventCode == "OK") {  
        sSignatory = x[i].getElementsByTagName("Signatory")[0].childNodes[0].nodeValue;
        pSig = "FIRMA RECIBIDO: "+ sSignatory + "<br>"+
        x[i].getElementsByTagName("Date")[0].childNodes[0].nodeValue+" :"+ 
        x[i].getElementsByTagName("Time")[0].childNodes[0].nodeValue + "<br>";
        document.getElementById("sig").innerHTML = pSig;
    }


   }
   catch(error) {
     
    table = buildTable("table-empty", "" );  
  // expected output: ReferenceError: nonExistentFunction is not defined
  // Note - error messages will vary depending on browser
  }

 document.getElementById("events").innerHTML = table;
}

function buildTable(element,value){

  var sTable = "";

   switch ( element) {

    case "thead": 
          sTable = 
         '<thead>'+
          '<tr>'+
           '<th scope="col">#</th>'+
           '<th scope="col">Fecha </th>'+
           '<th scope="col">Hora  </th>'+
           '<th scope="col">Zona </th>'+
           '<th scope="col">Nombre del Area</th>'+
           '<th scope="col">Code</th>'+
           '<th scope="col">Descripcion</th>'+
          '</tr>';      
          '<thead>';
               
   break;       
   case "tr":
     sTable = 
     '<tr>'+
      '<th scope="row">'+value[0]+'</th>'+
      '<td>'+value[1]+'</td>'+
      '<td>'+value[2]+'</td>'+
      '<td>'+value[3]+'</td>'+
      '<td>'+value[4]+'</td>'+
      '<td>'+value[5]+'</td>'+
     '</tr>';
    
   break; 
   case "table-empty": 
          sTable =    
          '<thead>'+
          '<tr>'+
           '<th scope="col">#</th>'+
           '<th scope="col">Fecha</th>'+
           '<th scope="col">Hora </th>'+
           '<th scope="col">Zona </th>'+
           '<th scope="col">Nombre del Area</th>'+
           '<th scope="col">Code</th>'+
           '<th scope="col">Descripcion</th>'+
          '</tr>';      
          '<tbody>'+
          '<tr>'+
           '<td></td>'+
           '<td></td>'+
           '<td></td>'+
           '<td></td>'+
           '<td></td>'+
           '<td></td>'+
           '<td></td>'+
          '</tr>'+      
          '</tbody>';
    break;
   }

  return  sTable ;
}


