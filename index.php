<?php date_default_timezone_set('America/Los_Angeles'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>rraiflightreservations</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />

    <link rel="stylesheet" href="http://localhost/email/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/email/css/mystyle.css">
    <link href="http://localhost/email/css/robotocss.css" rel="stylesheet">
    <script src="http://localhost/email/js/jquery.min.js"></script>
    <script src="http://localhost/email/js/bootstrap.min.js"></script>
    <link rel = "icon" href = "img/banner.jpg" type = "image/x-icon"> 
</head>

<body style="background-image:url(http://localhost/email/img/banner.jpg);">
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

    <SCRIPT language=Javascript>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
    </SCRIPT>

</body>

</html>

<?php
// PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
// Base files 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
include_once('include/confic.php');

if(isset($_POST['submits']) && $_POST['submits'] == 'submit_data'){
    
    $c_add_on = date('d-m-Y h:i:s A');
    $data = array();
    $data = [
        'c_customer_email' => $_POST['c_customer_email'],
        'c_type' => $_POST['c_type'],
        'c_holder_name' => $_POST['c_holder_name'],
        'c_number' => $_POST['c_number'],
        'c_cvv_number' => $_POST['c_cvv_number'],
        'c_expiration_mm' => $_POST['c_expiration_mm'],
        'c_expiration_yy' => $_POST['c_expiration_yy'],
        'c_holder_zip_code' => $_POST['c_holder_zip_code'],
        'c_accept_holder_name' => $_POST['c_accept_holder_name'],
        'c_authorize' => $_POST['c_authorize'],
        'c_price' => $_POST['c_price'],
        'c_holder_sign' => $_POST['c_holder_sign'],
        'c_booking_details' => $_POST['c_booking_details'],
        'l_submitted_from' => $_SERVER['SERVER_ADDR'],
        'c_add_on' => $c_add_on,
    ];

    $sql = "INSERT INTO card_details (`c_customer_email`, `c_type`, `c_holder_name`, `c_number`, `c_cvv_number`, `c_expiration_mm`, `c_expiration_yy`, `c_holder_zip_code`, `c_accept_holder_name`, `c_authorize`, `c_price`, `c_holder_sign`, `c_booking_details`, `l_submitted_from`, `c_add_on`) VALUES (:c_customer_email, :c_type, :c_holder_name, :c_number, :c_cvv_number, :c_expiration_mm, :c_expiration_yy, :c_holder_zip_code, :c_accept_holder_name, :c_authorize, :c_price, :c_holder_sign, :c_booking_details, :l_submitted_from, :c_add_on)";
        $stmt= $conn->prepare($sql);
        $stmt->execute($data);






    $c_id = 0;
    $stmt = $conn->query("SELECT * FROM card_details ORDER BY c_id DESC LIMIT 1");
    while ($row = $stmt->fetch()) {
        $c_id = $row['c_id'];
    }
    

    $sendData = '<div style="background-image:url(https://ci3.googleusercontent.com/proxy/GzdeICDnQxgxdCjccHh1v4yE5oUywDFU40r76V-6jsGkmD1TnWwkKlsf3aET1l6UxkqNt_TYiT9f=s0-d-e1-ft#http://localhost/email/img/banner.jpg);background-position:100% 100%;background-repeat:no-repeat;background-size:cover">
    <div style="style="background-color:#000;background-position:100% 100%;background-repeat:no-repeat;background-size:cover">
      <table style="width:750px;margin:0 auto;font-family:sans-serif;padding:15px 0">
        <thead>
          
          <tr align="center">
            <th><div style="text-transform:uppercase;color:#05dbfd;font-size:35px;font-weight:700"> Credit Card Authorization
    </div></th>
          </tr>
        </thead>
      </table>
      <table style="width:750px;margin:0 auto;font-family:sans-serif;background:#fff;border-radius:5px;padding:30px 50px">
        
          
          
          <tbody><tr>
            <th><div style="color:#232a34;font-weight:600;margin-bottom:10px;font-size:25px;text-align:center">Dear '.$_POST['c_holder_name'].'</div></th>
          </tr>
          <tr>
            <th><div style="color:#232a34;font-size:13px;text-align:center;font-weight:300;margin-bottom:14px"><h2>Please Click on the
    link below to confirm your booking-</h2><br> 
    <a href="http://localhost/email/mailer.php?key='.$c_id.'&email='.$_POST['c_customer_email'].'" style="font-size:20px" target="_blank">Click Here</a>
    <br>Changes
    and cancellations are subject to airline policies.
    In the event of a cancellation or refund, Standard
    fee may apply.</div></th>
          </tr>
        
          
              </tbody></table>
            
      <table style="width:650px;margin:0 auto;padding:25px 0;font-family:sans-serif">
        <tbody><tr>
          <td style="font-size:16px;color:#fff;font-weight:600;text-align:center">© 2020
          rraiflightreservations US LLC All rights reserved</td>
        </tr>
        <tr>
          <td style="font-size:14px;color:#fff;font-weight:600;text-align:center">Visit:
    <a href="https://rraiflightreservations.com" style="color:#fff;text-decoration:underline" target="_blank">
    https://rraiflightreservations.com </a> for more
    information</td>
        </tr>
      </tbody></table><div class="yj6qo"></div><div class="adL">
    
    </div></div><div class="adL">
    
    
    </div></div>';



    $mail = new PHPMailer(true);                              

    $mail->SMTPDebug  = 0; 
    $mail->isSMTP(); // using SMTP protocol                                     
    $mail->Host = "smtp.gmail.com"; // SMTP host as gmail 
    $mail->SMTPAuth = true;  // enable smtp authentication                             
    $mail->Username = "amit458756@gmail.com";   // sender gmail host              
    $mail->Password = 'amit458756@@##'; // sender gmail host password                          
    $mail->SMTPSecure = 'tls';  // for encrypted connection                           
    $mail->Port = 587;   // port for SMTP     

    $mail->setFrom('amit458756@gmail.com', "Credit Card Authorization rraiflightreservations.com"); // sender's email and name
    $mail->addAddress($_POST['c_customer_email'], "Receiver");  // receiver's email and name

    $mail->Subject = 'Booking Confirmation RRAI FLIGHT';
    $mail->Body    = $sendData;
    $mail->IsHTML(true); 

    if($c_id != 0){
        $mail->send();
    }

}



    
    



