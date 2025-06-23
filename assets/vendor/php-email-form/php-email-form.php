<?php
/**
 * Basic PHP Email Form class (Free alternative for BootstrapMade templates)
 */

class PHP_Email_Form {
  public $to;
  public $from_name;
  public $from_email;
  public $subject;
  public $ajax = false;

  private $messages = array();

  public function add_message($content, $label = '', $priority = 0) {
    $label = trim($label);
    $message = $label ? "$label: $content" : $content;
    $this->messages[] = $message;
  }

  public function send() {
    $message_body = implode("\n", $this->messages);

    $headers = "From: " . $this->from_name . " <" . $this->from_email . ">\r\n";
    $headers .= "Reply-To: " . $this->from_email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($this->to, $this->subject, $message_body, $headers)) {
      return $this->ajax ? 'OK' : 'Email sent successfully.';
    } else {
      return $this->ajax ? 'ERROR' : 'Email failed to send.';
    }
  }
}
?>
