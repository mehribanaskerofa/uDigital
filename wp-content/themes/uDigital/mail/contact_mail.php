<?php
ob_start();
session_start();

include 'class.phpmailer.php';

$smtpuser="info@jugaad.az";
$infouser="jugaad.az";
$smtphost="mail.jugaad.az";
$smtpport="465";
$smtppass="meta1213sploit100";

function post($post){
    if(isset($_POST[$post]) && !empty($_POST[$post])){
        return htmlspecialchars(trim($_POST[$post]));
    }
    return false;
}

$fullname = post('fullname') ?? '';
$elaqe = post('phone') ?? '';
$sendermail = post('email') ?? '';

$subject = post('subject') ?? '';
$message = post('message') ?? '';
//$message = post('message') ?? '';
//$strategy = post('indexcats');


$sehife = post('sehife');/// echo "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//$token = post('token') ;
$ip_address = $_SERVER['REMOTE_ADDR'];

//if (!filter_var($sendermail, FILTER_VALIDATE_EMAIL) || !isset($name,$sendermail)) {
//    header("Location:$sehife?mail=nooo"); exit();
//}
//name="mailform" buttona
if (isset($_POST['mailform'])) {
    // $captcha;
    $epostal=$smtpuser;

    //////////////
// 	if(isset($_POST['g-recaptcha-response'])){
//         $captcha=$_POST['g-recaptcha-response'];
//     }
//     if(!$captcha){
//       echo '<h2>Please check the the captcha form.</h2>';
//       exit;
//     }
//     $secretKey = "6Le0L78aAAAAAFRMmGR4HVkw0WlNWu7AioTMweUN";
    $ip = $_SERVER['REMOTE_ADDR'];
//     // post request to server
//     $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
//     $response = file_get_contents($url);
//     $responseKeys = json_decode($response,true);
//     //should return JSON with success as true
//     if($responseKeys["success"]) {
//         echo '<h2>Thanks for posting comment</h2>';
//     } else {
//         echo '<h2>You are spammer ! Get the @$%K out</h2>';
//     }





////////////////////

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = $smtphost;
    $mail->Port = $smtpport;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = $smtpuser;
    $mail->Password = $smtppass;
    $mail->SetFrom($mail->Username, $infouser);
    $mail->CharSet = 'UTF-8';



//    $mail->AddAddress($sendermail, $name);
    $mail->Subject = 'Müraciət formu';

    //birinci form
    $mail->AddAddress($epostal, $fullname);
    $content = '
	<b>Vebsaytdan gələn müraciət formu</b><br>
	<table align="left" class="tg" style="undefined;table-layout: fixed; width: 535px">

		<tr>
			<td class="tg-031e">Ad soyad</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$fullname.'</td>
		</tr>
		<tr>
			<td >Əlaqə</td>
			<td >:</td>
			<td >'.$elaqe.'</td>
		</tr>
		<tr>
			<td >Mail</td>
			<td >:</td>
			<td >'.$sendermail.'</td>
		</tr>
		<tr>
			<td >İP Adres</td>
			<td >:</td>
			<td >'.$ip_address.'</td>
		</tr>
		<tr>
			<td >'.$subject.'</td>
			<td >:</td>
			<td >'.$message.'</td>
		</tr>
	</table>';
    $mail->MsgHTML($content);
//    $mail->Send();

    if ($mail->Send()) {
        if (strpos($sehife, "mail") !== false) {
            $sehife = str_replace('?mail=ok', '', $sehife);
        }
        header("Location: $sehife?mail=ok");
    } else {
        header("Location: $sehife?mail=no");
    }
    //ikinci form
    if($sendermail) {
        $mail->clearAddresses();
        $mail->AddAddress($sendermail, $fullname);
        $content_customer = '
	<b>Arch sayt muraciet<br> '.$fullname.' Muracietiniz ucun tesekkur edirik!</b><br>
	<table align="left" class="tg" style="undefined;table-layout: fixed; width: 535px">

		<tr>
			<td class="tg-031e">Ad soyad</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">' . $fullname . '</td>
		</tr>
		<tr>
			<td >Əlaqə</td>
			<td >:</td>
			<td >+994 50 993 76 02</td>
		</tr>
		<tr>
			<td >Email</td>
			<td >:</td>
			<td >info@udigital.az</td>
		</tr>
		<tr>
			<td >Company</td>
			<td >:</td>
			<td >uDigital MMC</td>
		</tr>
	</table>';
        $mail->MsgHTML($content_customer);
        $mail->Send();
    }



}

exit;

?>

