<?php







$fromdate = $_POST["fromdate"];

$todate = $_POST["todate"];

$bemail = $_POST["bemail"];

$roomcat = $_POST["roomcat"];

$adults = $_POST["adults"];

$child = $_POST["child"];

  

 



             $headers = "From:  info@roomansala.com \r\n";

			$headers .= "Reply-To:  info@roomansala.com \r\n";

			$headers .= "MIME-Version: 1.0\r\n";

			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


 
$EmailTo = "info@roomansala.com";

//$EmailTo = "maheshsuradarshana@gmail.com";

$Subject = "Booking Details";

 

// prepare email body text

$Body .= '<table width="300" border="1">

  <tbody>

  <tr>

  <td colspan="2" style=" text-align:center; font-weight:bold; background:#b5b5b5; padding:5px;">Booking Details</td>

  </tr>

    <tr>

      <td style=" background:#eeeeee; padding:5px;">From Date</td>

      <td>'.$fromdate.'</td>

    </tr>
	
	<tr>

      <td style=" background:#eeeeee; padding:5px;">To Date</td>

      <td>'.$todate.'</td>

    </tr>

    <tr>

      <td style=" background:#eeeeee; padding:5px;">Email address</td>

      <td>'.$bemail.'</td>

    </tr>

    <tr>

      <td style=" background:#eeeeee; padding:5px;">Room Type</td>

      <td>'.$roomcat.'</td>

    </tr>

    <tr>

      <td style=" background:#eeeeee; padding:5px;">Adults</td>

      <td>'.$adults.'</td>

    </tr>

    <tr>

      <td style=" background:#eeeeee; padding:5px;">Child</td>

      <td>'.$child.'</td>

    </tr>

  </tbody>  

</table>';













$Body .= "\n";

 
$Body2 .= '<h3>Thank you for booking at Roo Mansala. Your booking details are as follows:</h3><br><table width="300" border="1">

  <tbody>

  <tr>

  <td colspan="2" style=" text-align:center; font-weight:bold; background:#b5b5b5; padding:5px;">Booking Details</td>

  </tr>

    <tr>

      <td style=" background:#eeeeee; padding:5px;">From Date</td>

      <td>'.$fromdate.'</td>

    </tr>
	
	<tr>

      <td style=" background:#eeeeee; padding:5px;">To Date</td>

      <td>'.$todate.'</td>

    </tr>

    <tr>

      <td style=" background:#eeeeee; padding:5px;">Email address</td>

      <td>'.$bemail.'</td>

    </tr>

    <tr>

      <td style=" background:#eeeeee; padding:5px;">Room Type</td>

      <td>'.$roomcat.'</td>

    </tr>

    <tr>

      <td style=" background:#eeeeee; padding:5px;">Adults</td>

      <td>'.$adults.'</td>

    </tr>

    <tr>

      <td style=" background:#eeeeee; padding:5px;">Child</td>

      <td>'.$child.'</td>

    </tr>

  </tbody>  

</table>';













$Body2 .= "\n";
// send email

$success = mail($EmailTo, $Subject, $Body, $headers);

$Subject2="Roo Mansala Booking Details";
  mail($bemail, $Subject2, $Body2, $headers);

// redirect to success page

if ($success){

   echo "success";

}else{

    echo "invalid";

}

 

?>