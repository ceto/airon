<?php
  define( 'WP_USE_THEMES', FALSE );
  require( '../../../../wp-load.php' );

if($_POST) {
  $to_Email = "hello@airon.hu";
  $dev_Email = "szabogabor@hydrogene.hu";
  // $to_Email = "szabogabi@gmail.com";
  $subject = __('Kapcsolatfelvétel a weboldalon', 'airon');
  $resp_subject = __('Airon - Thank you for writing us!', 'airon');

  if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

    $output = json_encode(
    array(
      'type'=>'error',
      'text' => 'Request must come from Ajax'
    ));

    die($output);
  }

  if( !isset($_POST["userName"]) || !isset($_POST["userEmail"]) ) {
    $output = json_encode(array('type'=>'error', 'text' => __('Missing field required','airon') ));
    die($output);
  }
  $user_Name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
  $user_bName = filter_var($_POST["userbName"], FILTER_SANITIZE_STRING);
  $user_Email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
  $user_Tel = filter_var($_POST["userTel"], FILTER_SANITIZE_STRING);
  $user_Service = filter_var($_POST["userService"], FILTER_SANITIZE_STRING);
  $user_Message = filter_var($_POST["userMsg"], FILTER_SANITIZE_STRING);

  $user_Acceptpolicy = filter_var($_POST["acceptpolicy"], FILTER_SANITIZE_STRING);
  $user_Acceptprocessing = filter_var($_POST["acceptprocessing"], FILTER_SANITIZE_STRING);

  $user_Message = str_replace("\&#39;", "'", $user_Message);
  $user_Message = str_replace("&#39;", "'", $user_Message);

  if(strlen($user_Name)<4) {
    $output = json_encode(array('type'=>'error', 'text' => __('Please add your name','airon')));
    die($output);
  }
  if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) {
    $output = json_encode(array('type'=>'error', 'text' => __('Invalid e-mail address','airon')));
    die($output);
  }

  if(!filter_var($user_Acceptpolicy, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) {
    $output = json_encode(array('type'=>'error', 'text' => __('Missing GDPR related field.','viarent') ));
    die($output);
  }

  if(!filter_var($user_Acceptprocessing, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) {
    $output = json_encode(array('type'=>'error', 'text' => __('Missing GDPR related field.','viarent') ));
    die($output);
  }

//   if(strlen($user_Tel)<6) {
//     $output = json_encode(array('type'=>'error', 'text' => __('Érvénytelen telefonszám','airon')));
//     die($output);
//   }


  $headers = 'From: '.$user_Email.'' . "\r\n" .
  'Reply-To: '.$user_Email.'' . "\r\n" .
  'BCC: '.$dev_Email.'' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

  $sentMail = @wp_mail($to_Email, $subject, 'Név: '.$user_Name. "\r\n". 'Cégnév: '.$user_bName. "\r\n". 'E-mail: '.$user_Email. "\r\n" .'Telefon: '.$user_Tel . "\r\n" . 'Policy Read/Accept: '.$user_Acceptpolicy.'/'.$user_Acceptprocessing. "\r\n" . 'Szolgáltatás: '. $user_Service . "\r\n\n"  .' '.$user_Message, $headers);

  if(!$sentMail) {
    $output = json_encode(array('type'=>'error', 'text' => __('Message not sent. Please call us by phone or send e-mail!','airon')));
    die($output);
  } else {

    $resp_headers = 'From: '.$to_Email.'' . "\r\n" .
    'Reply-To: '.$to_Email.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $resp_text=__('Dear','airon').' '.$user_Name.'!'."\r\n\n".
    __('Thank you for writing us! Your interest was recorded. Our specialists will contact you shortly.','airon')."\r\n\n".
    __('Best regards,', 'airon')."\r\n".'Airon';
    @wp_mail($user_Email, $resp_subject, $resp_text, $resp_headers);
    $output = json_encode(array('type'=>'message', 'text' => __('Thank you for writing us! Your interest was recorded. Our specialists will contact you shortly.','airon')));
    die($output);
  }
}

?>
