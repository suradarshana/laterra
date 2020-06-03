<?php

$name = $_POST["name"];

$email = $_POST["email"];

$phone = $_POST["phone"];

$message = $_POST["message"];

 

$EmailTo = "info@roomansala.com";

$Subject = "Roo Mansala Contact Details";

  

 

             $headers = "From: ".$email."\r\n";

			$headers .= "Reply-To: ". $email . "\r\n";

			$headers .= "MIME-Version: 1.0\r\n";

			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			

// prepare email body text

$Body .= '<table width="300" border="1">

  <tbody>

  <tr>

  <td colspan="2" style=" text-align:center; font-weight:bold; background:#b5b5b5; padding:5px;">Contact Details</td>

  </tr>

    <tr>

      <td style=" background:#eeeeee; padding:5px;">Name</td>

      <td>'.$name.'</td>

    </tr>

    <tr>

      <td style=" background:#eeeeee; padding:5px;">Email</td>

      <td>'.$email.'</td>

    </tr>

    <tr>

      <td style=" background:#eeeeee; padding:5px;">Mobile</td>

      <td>'.$phone.'</td>

    </tr>

    <tr>

      <td style=" background:#eeeeee; padding:5px;">Message</td>

      <td>'.$message.'</td>

    </tr>

    

  </tbody>

</table>';



 

// send email

$success = mail($EmailTo, $Subject, $Body, $headers);

 

// redirect to success page

if ($success){

   echo "success";

}else{

    echo "invalid";

}

 

?>