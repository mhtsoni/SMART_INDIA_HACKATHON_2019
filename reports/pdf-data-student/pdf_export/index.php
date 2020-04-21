<?php  
 function fetch_data()  
 {  
      include 'database.php';
      $year=date("Y");
      $output = ''; 
      $sql = "SELECT * FROM `$year` ORDER BY id ASC";  
      $result = mysqli_query($link,$sql);  
      while($res = mysqli_fetch_array($result)) 
      {       
      $output .= "<tr>
		<td>".$res['day']."</td>
		<td>".$res['02']."</td>
		<td>".$res['03']."</td>
		<td>".$res['04']."</td>
		<td>".$res['05']."</td>
		<td>".$res['06']."</td>
		<td>".$res['07']."</td>
		<td>".$res['08']."</td>
		<td>".$res['09']."</td>
		<td>".$res['10']."</td>
		<td>".$res['11']."</td>
		<td>".$res['12']."</td>
		<td>".$res['13']."</td>
        </tr>  
                          ";  
      }  
      return $output;  
 }  
 if(isset($_POST["generate_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h4 align="center">Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
      <tr bgcolor="#CCCCCC">
        <td>Day</td>
		<td>January</td>
		<td>February</td>
		<td>March</td>
		<td>April</td>
		<td>May</td>
		<td>June</td>
		<td>July</td>
		<td>August</td>
		<td>September</td>
		<td>October</td>
		<td>November</td>
		<td>December</td>
	</tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('file.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>coddictors</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br />
           <div class="container">  
                <h4 align="center">
                    <?php
               if($_GET){
                $y=$_GET['dat'];
                $date = "$y";
                $date = explode('-', $date);
                $query="SELECT*FROM `$date[0]`";
                if($row=mysqli_query($link,$query)){
                    $array=mysqli_fetch_all($row);
                    $x=1+$date[1];
                    echo "Water Used on $y is ".$array[$date[2]-1][$x]."ml";
                }
                else{
                    echo "Data UnAvailable";
                }
            }
               
               ?>
               </h4><br />  
                <div class="table-responsive">  
                	<div class="col-md-12" align="right">
                     <form method="post">  
                          <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />  
                     </form>  
                     </div>
                     <br/>
                     <br/>
                     <table class="table table-bordered">  
                     <tr bgcolor="#CCCCCC">
        <td>Day</td>
		<td>January</td>
		<td>February</td>
		<td>March</td>
		<td>April</td>
		<td>May</td>
		<td>June</td>
		<td>July</td>
		<td>August</td>
		<td>September</td>
		<td>October</td>
		<td>November</td>
		<td>December</td>
	</tr>
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  