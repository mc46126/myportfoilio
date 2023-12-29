
<?php

//get data from form  
if(isset($_POST['upload'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $address = $_POST['address'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

$message_content ='
<div style="margin: 0; padding: 0 !important;  color: rgba(0,0,0,.4); line-height: 1.8; font-family: "Playfair Display", serif;  font-weight: 400; font-size: 15px;">
    <center style="width: 100%; background-color: #f1f1f1;">
    <div style="max-width: 600px; margin: 0 auto;" class="email-container">
        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      <!--  <tr>
            <td style="background: #fff; padding: 0em 2.5em; background-color: #fff;">
            <img src="../images/logo/VK.png" style="width: 15%; padding-top: 15px;">
            </td>
        </tr>-->
        <tr>
            <td style="text-align:center; background-color: #fff; color: #000;">
            <h2 style="color: #000; font-size: 29px; margin-top: -56px; font-family: oswald,sans-serif;">
                Our My POrtfolio.Co 
            </h2>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px; width: 100%; background:  #ffffff; text-align: left; color: #557e00;">
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
               
                <tr>
                <th>Name :</th>
                <td>'.$name.'</td>
                </tr>
                <tr>
                <th>Email :</th>
                <td>'.$email.'</td>
                </tr>
                
                <tr>
                <th>Name :</th>
                <td>'.$phone.'</td>
                </tr>
                <tr>
                <th>Email :</th>
                <td>'.$address.'</td>
                </tr>
                <tr>
                <th>Subject :</th>
                <td>'.$subject.'</td>
                </tr>
                <tr>
                <th>Message :</th>
                <td>'.$message.'</td>
                </tr>
            </table>
            </td>
        </tr>
        </table>
        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
        <tr>
            <td valign="middle" style="background-color: #001648; color: #fff; padding: 1.1em;">
            <table>
                <tr>
                <td valign="top" width="33.333%" style="padding-top: 20px;">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td style="text-align: center; padding-right: 10px; color:#fff; font-family: oswald,sans-serif;">
                        <p><strong style="font-size:20px; color: #fff; line-height: 30px;">Contact Details </strong></p>
                        Email : 
                        <a style="color:#fff; text-decoration: none;" href="mailto:info@vkjindal.com" target="_blank" rel="noreferrer">info@vkjindal.com</a>
                        <br>
                        <br>
                        Contact : +91-9453452317 </p>
                        </td>
                    </tr>
                    </table>
                </td>
                </tr>
            </table>
            </td>
        </tr>
        </table>
    </div>
    </center>
</div>';


$subject = "Contact us Enquiry - " . $name;
$to = "mc461266@gmail.com";
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] = 'From: V.K JINDAL & CO. <info@vkjindal.com>';

$mail = mail($to, $subject, $message_content, implode("\r\n", $headers));

$mail_mukesh = mail($to, $subject, $message_content, implode("\r\n", $headers));

if ($mail_mukesh) {
    echo "<script>alert('Mail sent successfully'); window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';</script>";
} else {
    echo "<script>alert('Mail not sent successfully'); window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';</script>";
}



}
?>




