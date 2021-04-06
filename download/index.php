<?php  
 function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "travel_and_transport");
     $cnic = $_GET['id']; 
      $sql = "SELECT * FROM ticket WHERE CNIC LIKE '%$cnic%'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>    
                          <td>'.$row["TICKET_NUMBER"].'</td>
                          <td>'.$row["PASSENGERNAME"].'</td>  
                          <td>'.$row["CNIC"].'</td>  
                          <td>'.$row["ADDRESS"].'</td>  
                          <td>'.$row["NO_OF_SEATS"].'</td>
                           
                          <td>'.$row["DEPARTURE_DATE"].'</td>
                          <td>'.$row["DEPARTURE_TIME"].'</td>
                          <td>'.$row["ROUTE_FROM"].'</td>
                          <td>'.$row["ROUTE_TO"].'</td>
                          <td>'.$row["STATUS"].'</td>
                     </tr>';  
      }  
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf.php');  

      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Your Ticket Information");
      
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= ' 
    
      <p Style="margin-top:2px;text-align:center;font-size:40px;color: #ff4d4d;opacity:0.7;"><img src="Icon.png" height="75" width="75">Your Ticket Information</p>
       
      <table border="1" >
           <tr>  
                <th width="20%" Style="color:#ff4d4d;opacity:0.7;">TICKET NUMBER</th>
                <th width="20%" Style="color:#ff4d4d;opacity:0.7;">PASSENGER</th> 
                <th width="20%" Style="color:#ff4d4d;opacity:0.7;">CNIC</th>  
                <th width="20%" Style="color:#ff4d4d;opacity:0.7;">ADDRESS</th>  
                <th width="20%" Style="color:#ff4d4d;opacity:0.7;">NO_OF_SEATS</th>
                 
                <th width="20%" Style="color:#ff4d4d;opacity:0.7;">DEPARTURE_DATE</th>
                <th width="20%" Style="color:#ff4d4d;opacity:0.7;">DEPARTURE_TIME</th>
                <th width="20%" Style="color:#ff4d4d;opacity:0.7;">ROUTE_FROM</th>
                <th width="20%" Style="color:#ff4d4d;opacity:0.7;">ROUTE_TO</th>
                <th width="20%" Style="color:#ff4d4d;opacity:0.7;">STATUS</th>
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('Ticket.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Your Ticket Information</title>  
<!--           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
          <link rel="stylesheet" href="/travel_and_transport/includes/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      </head>
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/themebus.php");?>
      <body>  
           <br /><br />  
           <div class="form" Style="width:96%"> 
                <div id="left" Style="width:100%;height:auto ;padding:0px;"> <p Style="margin-top:0px;text-align:center;font-size:70px;color: #ff4d4d;opacity:0.7;">YOUR TICKET INFORMATION</p></div>  
                <div class="view">  
                     <table>  
                          <tr id="header">  
                              <th width="20%">TICKET NUMBER</th>
                              <th width="20%">PASSENGER</th> 
                              <th width="20%%">CNIC</th>  
                              <th width="20%">ADDRESS</th>  
                              <th width="20%">NO_OF_SEATS</th>
                               
                              <th width="20%">DEPARTURE_DATE</th>
                              <th width="20%">DEPARTURE_TIME</th>
                              <th width="20%">ROUTE_FROM</th>
                              <th width="20%">ROUTE_TO</th>
                              <th width="20%">STATUS</th> 
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />  
                     <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  