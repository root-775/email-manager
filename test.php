<?php date_default_timezone_set('America/Los_Angeles'); ?>
<?php
// $domain="";
// if(checkdnsrr($domain,"MX")) {
//   echo "Passed";
// } else {
//   echo "Failed";
// }


$to = "somebody@example.com, somebodyelse@example.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: amit458756@gmail.com' . "\r\n";


mail($to,$subject,$message,$headers);


?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="http://localhost/email/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/email/css/mystyle.css">

  <link rel = "icon" href = "http://localhost/email/img/banner.jpg" type = "image/x-icon"> 
</head>
<body style="background-image: url(http://localhost/email/img/banner.jpg);">
<div class="mail_bx">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading_txt">
                    rraiflightreservations
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="main_ct_bx">
                        <div class="maid_dls">
                            <h2>Credit Card Authorization Form</h2>
                            <p>Please complete all fields. Changes and cancellations are subject to airline policies. In the event of a cancellation or refund, Standard fee may apply.</p>
                        </div>
                        <div class="card_tp">
                            
                            <h3>Credit Card Information <span></span></h3>
                            <FORM name="myform" method="post" action="">
                                <input type="email" required name="c_customer_email" placeholder="Enter Customer Email" class="email_stt">&nbsp;
                                <div class="bx_11">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="tp_nm">Card Type:</div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="radio">
                                                        <label><input type="radio" value="Master Card" name="c_type" required="required">Master Card</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="radio">
                                                        <label><input type="radio" value="VISA" name="c_type" required="required">VISA</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="radio">
                                                        <label><input type="radio" value="Discover" name="c_type" required="required">Discover</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="radio">
                                                        <label><input type="radio" value="AMEX" name="c_type" required="required">AMEX</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="radio">
                                                        <label><input type="radio" value="Other" name="c_type" required="required">Other</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 nm_mm">
                                    <label>Cardholder Name (as shown on card): <input type="text" name="c_holder_name" required="required"></label>
                                </div>
                                <div class="col-md-6 nm_mm">
                                    <label>Card Number: <input type="text" name="c_number" id="txtChar" onkeypress="return isNumberKey(event)" oninput="if(value.length>16)value=value.slice(0,16)" required="required"></label>
                                </div>
                                <div class="col-md-6 nm_mm">
                                    <label>CVV Number: <input type="text" name="c_cvv_number" id="txtChar" onkeypress="return isNumberKey(event)" maxlength="4" oninput="if(value.length>4)value=value.slice(0,4)" required="required"></label>
                                </div>
                                <div class="col-md-12 nm_mm">
                                    <label>Expiration Date (MM/YY): <input type="text" maxlength="2" placeholder="MM" name="c_expiration_mm" style="width: 35px; margin: 0 10px 0 5px;text-align: center;" required="required"><input type="text" maxlength="2" name="c_expiration_yy" placeholder="YY" style="width: 35px;margin: 0 10px 0 5px;text-align: center;" required="required"></label>
                                </div>
                                <div class="col-md-12 nm_mm bdr_nn">
                                    <label>Cardholder ZIP Code (from credit card billing address): <input type="text" name="c_holder_zip_code" id="txtChar" onkeypress="return isNumberKey(event)" oninput="if(value.length>6)value=value.slice(0,6)" required="required"></label>
                                </div>
                        </div>
                        <div class="dec_txt">
                            <p>I, <input type="text" name="c_accept_holder_name" required="required">, authorize <input type="text" name="c_authorize" required="required"> to charge my credit card above in the amount of $<input type="text" name="c_price" style="width: 75px;margin: 0 5px;" required="required"> upon . I understand that this charge is non-refundable. </p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="dls_tt">
                                    <input type="text" name="c_holder_sign" readonly="readonly">
                                    <div class="tt_nm">Customer Signature</div>
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="dls_text_area">
                                    <label>Booking Details</label>
                                    <textarea type="text" name="c_booking_details" required="required"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="btm_aply text-center">
                                    
                                    <button type="submit" name="submits" value="submit_data">Send Now</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="footer_txt">
                        <h3>&copy; 2020 rraiflightreservations US LLC All rights reserved</h3>
                        <p>Visit: <a href="https://rraiflightreservations.com/"> https://rraiflightreservations.com </a> for more information</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> -->