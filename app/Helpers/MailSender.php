<?php  

namespace App\Helpers;

class MailSender {

    private $from;
    private $name;

    public function __construct($from = 'info@bronara.digiants.agency', $name = 'Bronara') {

        $this->from = $from;
        $this->name = $name;
    }

    public function send($to, $subject, $message) {

        $headers = 'From: '. $this->from . "\r\n" .
            'Content-type: text/html; charset=\"utf-8\"';
  
        $result = self::remote($to, $subject, $message);
  
        if ($result !== '1') {
            mail($to, $subject, $message, $headers);
        }
    }
  
    public function remote($email, $subject, $body, $path = 'https://digiants.com.ua/sendmail/remote-send.php') {
  
        return @file_get_contents($path, false, stream_context_create([
          "ssl" => [
            "verify_peer"		=> false,
            "verify_peer_name"	=> false,
          ],
          'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query([
              'sender_mail'	=> $this->from,
              'sender_name'	=> $this->name,
              'email'		=> $email,
              'subject'		=> $subject,
              'body'		=> $body,
              'pass'		=> 'SIvu27Hb2&dhsn',
            ]),
          ]
        ]));
    }

    // public function send($to, $subject, $message) {

    //   $headers = 'From: '. $this->from . "\r\n" .
    //       'Reply-To: '. $this->from . "\r\n" .
    //       'X-Mailer: PHP/' . phpversion();

    //   mail($to, $subject, $message, $headers);
      
    // }
}