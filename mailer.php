<?php date_default_timezone_set('America/Los_Angeles'); ?>
<?php

// PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Base files 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
include_once('include/confic.php');


if (!isset($_GET['key']) || !isset($_GET['email'])) {
  echo 'error';
  die();
} else {
  $c_id = $_GET['key'];
  $c_email = $_GET['email'];
}

$stmt = $conn->prepare("SELECT * FROM card_details WHERE c_id=? AND c_customer_email = ? LIMIT 1");
$stmt->execute([$c_id, $c_email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);



?>
<html lang='en'>

<head>
  <title>Authorization Email</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!-- <link rel="icon" href="img/arrow.png" type="image/x-icon"> -->
</head>

<body>
  <div id="signform" class='bnr_img' style='background-image: url(img/banner.jpg);background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;width: 100%;display: table;'>
    <table class='table' style='width: 750px;margin: 0 auto;font-family: sans-serif;padding: 15px 0;'>
      <thead>

        <tr align='center'>
          <th>
            <div style='text-transform: uppercase;color: #05dbfd;font-size: 35px;font-weight: 700;'> rraiflightreservations </div>
          </th>
        </tr>
      </thead>
    </table>
    <table class='table' style='width: 750px;margin: 0 auto;font-family: sans-serif;background: #fff;border-radius: 5px;padding: 30px 50px;border: double 11px #e6e6e6;'>

      <tr>
        <th>
          <div style='color: #000;font-weight: 600;margin-bottom: 10px;font-size:25px;text-align: center;'>Credit Card Authorization Form</div>
        </th>
      </tr>
      <tr>
        <th>
          <div style='color: #000;font-size: 13px;text-align: center;font-weight: 300;margin-bottom: 14px;'>Please complete all fields. Changes and cancellations are subject to airline policies. In the event of a cancellation or refund, Standard fee may apply.</div>
        </th>
      </tr>
      <tr>
        <td>
          <table style='width: 650px;margin: 0 auto;font-family: sans-serif;background: #fff;border: 2px solid #c5c5c5;'>
            <tr style='background: #fff1f1;'>
              <td style='padding: 10px;font-weight: 600;line-height: 20px;'>Credit Card Information
                <input type='email' required name='to_email' disabled placeho lder='Please Enter Email' class='email_stt' value="<?= $user['c_customer_email'] ?>" style="text-align:left; float:right; width:38%;">
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table style='width: 650px;margin: 0 auto;font-family: sans-serif;background: #fff;border: 2px solid #c5c5c5;
    border-top: 0;margin-top: -4px;padding: 5px 10px;'>
            <tr>
              <td><b>Card Type:</b></td>
              <td><input type='radio' value='Master Card' <?php echo ($user['c_type'] == 'Master Card') ? 'checked' : '' ?> Disabled> Master Card</td>
              <td><input type='radio' value='VISA' <?php echo ($user['c_type'] == 'VISA') ? 'checked' : '' ?> Disabled> VISA</td>
              <td><input type='radio' value='Discover' <?php echo ($user['c_type'] == 'Discover') ? 'checked' : '' ?> Disabled> Discover</td>
              <td><input type='radio' value='AMEX' <?php echo ($user['c_type'] == 'AMEX') ? 'checked' : '' ?> Disabled> AMEX</td>
            </tr>
            <tr>
              <td></td>
              <td><input type='radio' value='Other' <?php echo ($user['c_type'] == 'Other') ? 'checked' : '' ?> Disabled> Other </td>

            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table style='width: 650px;margin: 0 auto;font-family: sans-serif;background: #fff;border: 2px solid #c5c5c5;border-top: 0;margin-top: -4px;padding: 5px 10px;'>
            <tr>
              <td style='line-height: 45px;'><b>Cardholder Name (as shown on card):</b>
                <span style='border-bottom: 2px solid #c5c5c5;'><?= $user['c_holder_name'] ?></span>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table style='width: 650px;margin: 0 auto;font-family: sans-serif;background: #fff;border: 2px solid #c5c5c5;border-top: 0;margin-top: -4px;padding: 5px 10px;'>
            <tr>
              <td style='line-height: 45px;'><b>Card Number: </b> <span style='border-bottom: 2px solid #c5c5c5;'>xxxx-xxxx-xxxx-<?= substr($user['c_number'], -4); ?></span></td>
              <td style='line-height: 45px;'><b>CVV Number: </b> <span style='border-bottom: 2px solid #c5c5c5;'><?= $user['c_cvv_number'] ?></span></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table style='width: 650px;margin: 0 auto;font-family: sans-serif;background: #fff;border: 2px solid #c5c5c5; border-top: 0;margin-top: -4px;padding: 5px 10px;'>
            <tr>
              <td style='line-height: 45px;'><b>Expiration Date (mm/yy): </b> <span style='border-bottom: 2px solid #c5c5c5;'><?= $user['c_expiration_mm'] ?>/<?= $user['c_expiration_yy'] ?></span></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table style='width: 650px;margin: 0 auto;font-family: sans-serif;background: #fff;border: 2px solid #c5c5c5; border-top: 0;margin-top: -4px;padding: 5px 10px;'>
            <tr>
              <td style='line-height: 45px;'><b>Cardholder ZIP Code (from credit card billing address): </b> <span style='border-bottom: 2px solid #c5c5c5;'><?= $user['c_holder_zip_code'] ?></span></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>

        </td>
      </tr>
      <tr>
        <td>
          <form action='' method='post'>
            <table style='width: 650px;margin: 0 auto;font-family: sans-serif;background: #fff;margin-top: -4px;'>

            </table>
        </td>
      </tr>
      <tr>
        <td>
          <table style='width: 650px;margin: 0 auto;font-family: sans-serif;background: #fff;'>
            <tr>
              <td>Booking Details</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table style='width: 650px;margin: 0 auto;font-family: sans-serif;background: #fff;'>
            <tr>
              <td style='border: 2px solid #c5c5c5;padding:8px;'><?= $user['c_booking_details'] ?></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table style='width: 650px;margin: 10px auto;font-family: sans-serif;background: #fff;'>
            <tr>
              <td style='border-bottom: 2px solid #e3c388'></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table style='width: 650px;margin: 0 auto;font-family: sans-serif;background: #fff;margin-top: -4px;'>
            <tr style='line-height: 14px;'>
              <td><button type='submit' name='submit' style='background: #939393;
    border: 0;color: #000;padding: 12px 8px; cursor:pointer;line-height:20px;'>I, <span style='font-weight: 600; border-bottom: 2px solid #c5c5c5;'><?= $user['c_accept_holder_name'] ?></span>, authorize <span style='font-weight: 600; border-bottom: 2px solid #c5c5c5;'><?= $user['c_authorize'] ?></span> to charge my credit card ending in, xxxx-xxxx-xxxx-<?= substr($user['c_number'], -4); ?>, in the amount of <span style='font-weight: 600; border-bottom: 2px solid #c5c5c5;'>$<?= $user['c_price'] ?></span>. I understand that this charge is non-refundable. <img src='http://localhost/email/img/arrow.png' style='margin:8px auto 0 auto; display:block; width: 160px; border: solid 2px #fff; padding: 4px;'></button></td>
            </tr>
            <tr>
              <td>
                <div><input type='text' required value='' name='sign' /><br>
                  <p style='font-weight: 600;margin: 0 0 0 0;border-top: 2px solid;padding: 4px 0 0 0;width: 80%;'>Customer Signature</p>
                </div>
                <!-- <span style='border-bottom: 2px solid #c5c5c5;'>Dummy Name</span><br> <b>Customer Signature</b> -->
              </td>
              <td>

              </td>
            </tr>
          </table>
          </form>
        </td>
      </tr>

    </table>
    <table style='width: 650px;margin: 0 auto;padding: 25px 0; font-family: sans-serif;'>
      <tr>
        <td style='font-size: 16px;color: #fff;font-weight: 600;text-align: center;'>© 2020 rraiflightreservations US LLC All rights reserved</td>
      </tr>
      <tr>
        <td style='font-size: 14px;color: #fff;font-weight: 600;text-align: center;'>Visit: <a href='https://rraiflightreservations.com/' target='_blank' style='color: #fff;text-decoration: underline;'> https://rraiflightreservations.com </a> for more information</td>
      </tr>
    </table>

  </div>

  <div id="signform1" style='width:100%; text-align:center'>This form was filled by ip : <?= $user['l_submitted_from'] ?> at <?= $user['c_add_on'] ?></div>
</body>


</html>

<?php
if (isset($_POST['submit']) && isset($_POST['sign'])) {


  $sign = $_POST['sign'];
  $sql = "UPDATE card_details SET sign_date=?, sign_name=? WHERE c_id=?";
  $conn->prepare($sql)->execute([date('d-m-Y h:i:s A'), $sign, $c_id]);




?>
  <script>
    var myobj = document.getElementById("signform");
    myobj.remove();
    var myobj = document.getElementById("signform1");
    myobj.remove();
  </script>
  <!DOCTYPE html>
  <html lang='en'>

  <head>
    <title>Authorization Email</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
  </head>

  <body>
    <div class='bnr_img' style='background-image: url(http://localhost/email/img/banner.jpg);background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;width: 100%;display: table;'>
      <table class='table' style='width: 750px;margin: 0 auto;font-family: sans-serif;padding: 15px 0;'>
        <thead>

          <tr align='center'>
            <th>
              <div style='text-transform: uppercase;color: #05dbfd;font-size: 35px;font-weight: 700;'> rraiflightreservations LLC </div>
            </th>
          </tr>
        </thead>
      </table>
      <table class='table' style='width: 750px;margin: 0 auto;font-family: sans-serif;background: #fff;border-radius: 5px;padding: 30px 50px;border: double 11px #e6e6e6;'>

        <tr>
          <th>
            <div style='color: #000;font-weight: 600;margin-bottom: 10px;font-size:25px;text-align: center;'></div>
          </th>
        </tr>
        <tr>
          <th>
            <div style='color: #000;font-size: 13px;text-align: center;font-weight: 300;margin-bottom: 14px;'>Thanks For Authorization.<br><br>For your protection, our Authorized Payment Verification department may require additional documentation. Please check your email for a notification from, <a href='javascript:void(0)'>support@rraiflightreservations.com</a>. We may also contact you via the phone number on file.</div>
          </th>
        </tr>


      </table>



      <table style='width: 650px;margin: 0 auto;padding: 25px 0; font-family: sans-serif;'>
        <tr>
          <td style='font-size: 16px;color: #fff;font-weight: 600;text-align: center;'>© 2020 rraiflightreservations US LLC All rights reserved</td>
        </tr>
        <tr>
          <td style='font-size: 14px;color: #fff;font-weight: 600;text-align: center;'>Visit: <a href='https://rraiflightreservations.com/' target='_blank' style='color: #fff;text-decoration: underline;'> https://rraiflightreservations.com </a> for more information</td>
        </tr>
      </table>

    </div>


  </body>

  </html>

<?php


  $c_id = $_GET['key'];
  $c_email = $_GET['email'];
  $stmt = $conn->prepare("SELECT * FROM card_details WHERE c_id=? AND c_customer_email = ? LIMIT 1");
  $stmt->execute([$c_id, $c_email]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  $sendData = '<div class="">
<div class="aHl"></div>
<div id=":lj" tabindex="-1"></div>
<div id=":lc" class="ii gt">
    <div id=":lb" class="a3s aiL "><u></u>
        <div>
            <div style="background-image:url(https://ci3.googleusercontent.com/proxy/GzdeICDnQxgxdCjccHh1v4yE5oUywDFU40r76V-6jsGkmD1TnWwkKlsf3aET1l6UxkqNt_TYiT9f=s0-d-e1-ft#
            /CCA/banner.jpg);background-position:100% 100%;background-repeat:no-repeat;background-size:cover">
                <table style="width:750px;margin:0 auto;font-family:sans-serif;padding:15px 0">
                    <thead>

                        <tr align="center">
                            <th>
                                <div style="text-transform:uppercase;color:#f5a046;font-size:35px;font-weight:700">Airport Early</div>
                            </th>
                        </tr>
                    </thead>
                </table>
                <table style="width:750px;margin:0 auto;font-family:sans-serif;background:#fff;border-radius:5px;padding:30px 50px">
                    <tbody>
                        <tr>
                            <th>
                                <div style="color:#000;font-weight:600;margin-bottom:10px;font-size:25px;text-align:center">Credit Card Authorization Form</div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <div style="color:#000;font-size:13px;text-align:center;font-weight:300;margin-bottom:14px">Please complete all fields. Changes and cancellations are subject to airline policies. In the event of a cancellation or refund, Standard fee may apply.</div>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <table style="width:650px;margin:0 auto;font-family:sans-serif;background:#fff;border:2px solid #c5c5c5">
                                    <tbody>
                                        <tr style="background:#fff1f1">
                                            <td style="padding:10px;font-weight:600;line-height:20px">Credit Card Information <input type="email" name="to_email" disabled="" value="' . $user['c_customer_email'] . '" style="text-align:left;float:right;width:38%"></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width:650px;margin:0 auto;font-family:sans-serif;background:#fff;border:2px solid #c5c5c5;border-top:0;padding:5px 10px">
                                    <tbody>
                                        <tr>
                                            <td><b>Card Type:</b></td>
                                            <td><input type="radio" value="Master Card" ' . ($user['c_type'] == 'Master Card' ? 'checked' : '') . ' Disabled> Master Card</td>
                                            <td><input type="radio" value="VISA" ' . ($user['c_type'] == 'VISA' ? 'checked' : '') . ' Disabled> VISA</td>
                                            <td><input type="radio" value="Discover" ' . ($user['c_type'] == 'Discover' ? 'checked' : '') . 'Disabled> Discover</td>
                                            <td><input type="radio" value="AMEX" ' . ($user['c_type'] == 'AMEX' ? 'checked' : '') . 'Disabled> AMEX</td>
                                        <tr>
                                            <td></td>
                                            <td><input type="radio" value="Other" ' . ($user['c_type'] == 'Other' ? 'checked' : '') . 'Disabled> Other </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width:650px;margin:0 auto;font-family:sans-serif;background:#fff;border:2px solid #c5c5c5;border-top:0;padding:5px 10px">
                                    <tbody>
                                        <tr>
                                            <td style="line-height:45px"><b>Cardholder Name (as shown on card):</b>
                                                <span style="border-bottom: 2px solid #c5c5c5;">' . $user['c_holder_name'] . '</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width:650px;margin:0 auto;font-family:sans-serif;background:#fff;border:2px solid #c5c5c5;border-top:0;padding:5px 10px">
                                    <tbody>
                                        <tr>
                                            <td style="line-height:45px"><b>Card Number: </b> <span style="border-bottom: 2px solid #c5c5c5;">xxxx-xxxx-xxxx-' . substr($user['c_number'], -4) . '</span></td>
                                            <td style="line-height:45px"><b>CVV Number: </b> <span style="border-bottom:2px solid #c5c5c5">' . $user['c_cvv_number'] . '</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width:650px;margin:0 auto;font-family:sans-serif;background:#fff;border:2px solid #c5c5c5;border-top:0;padding:5px 10px">
                                    <tbody>
                                        <tr>
                                            <td style="line-height:45px"><b>Expiration Date (mm/yy): </b> <span style="border-bottom:2px solid #c5c5c5">' . $user['c_expiration_mm'] . '/' . $user['c_expiration_yy'] . '</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width:650px;margin:0 auto;font-family:sans-serif;background:#fff;border:2px solid #c5c5c5;border-top:0;padding:5px 10px">
                                    <tbody>
                                        <tr>
                                            <td style="line-height:45px"><b>Cardholder ZIP Code (from credit card billing address): </b> <span style="border-bottom:2px solid #c5c5c5">' . $user['c_holder_zip_code'] . '</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width:650px;margin:0 auto;font-family:sans-serif;background:#fff">
                                    <tbody>
                                        <tr>
                                            <td>Booking Details</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width:650px;margin:0 auto;font-family:sans-serif;background:#fff">
                                    <tbody>
                                        <tr>
                                            <td style="border:2px solid #c5c5c5;padding:8px">' . $user['c_booking_details'] . '</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width:650px;margin:20px auto;font-family:sans-serif;background:#fff">
                                    <tbody>
                                        <tr>
                                            <td style="line-height:24px">I, <span style="font-weight:600;border-bottom:2px solid #c5c5c5">.' . $user['c_accept_holder_name'] . '</span>, authorize <span style="font-weight:600;border-bottom:2px solid #c5c5c5">65</span> to charge my credit card ending in, xxxx-xxxx-xxxx-5646, in the amount of <span style="font-weight:600;border-bottom:2px solid #c5c5c5">$56465</span>. I understand that this charge is non-refundable.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form method="post" target="_blank">
                                    <table style="width:650px;margin:0 auto;font-family:sans-serif;background:#fff">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div><input type="text" disabled="" value="' . $user['sign_name'] . '" name="sign"><br>
                                                        <p style="font-weight:600;margin:0 0 0 0;border-top:2px solid;padding:4px 0 0 0;width:80%">Customer Signature</p>
                                                    </div>

                                                </td>
                                                <td>
                                                    <div>' . $user['sign_date'] . '<br>
                                                        <p style="font-weight:600;margin:0 0 0 0;border-top:2px solid;padding:4px 0 0 0;width:80%">Date</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width:650px;margin:10px auto;font-family:sans-serif;background:#fff">
                                    <tbody>
                                        <tr>
                                            <td style="border-bottom:2px solid #e3c388"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table style="width:650px;margin:0 auto;padding:25px 0;font-family:sans-serif">
                    <tbody>
                        <tr>
                            <td style="font-size:16px;color:#fff;font-weight:600;text-align:center">© 2020 rraiflightreservations US LLC All rights reserved</td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;color:#fff;font-weight:600;text-align:center">Visit: <a href="https://rraiflightreservations.com/" style="color:#fff;text-decoration:underline" target="_blank"> https://rraiflightreservations.com/ </a> for more information</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="width:100%;text-align:center">This form was filled by ip : 180.151.83.6 at 2021-02-25 03:59:51</div>
            <div class="yj6qo"></div>
            <div class="adL">
            </div>
        </div>
        <div class="adL">
        </div>
    </div>
</div>
<div id=":k9" class="ii gt" style="display:none">
    <div id=":ka" class="a3s aiL undefined"></div>
</div>
<div class="hi"></div>
</div>';





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
  $mail->addAddress($user['c_customer_email'], "Receiver");  // receiver's email and name
  $mail->addAddress('amit458756@gmail.com', "Receiver");  // receiver's email and name

  $mail->Subject = 'Booking Confirmation RRAI FLIGHT';
  $mail->Body    = $sendData;
  $mail->IsHTML(true);

  $mail->send();
}
