<?php namespace helpers\phpmailer;
class mail extends phpmailer {
    // Set default variables for all new objects
    public $From     = 'noreply@globalinktax.com';
    public $FromName = SITETITLE;
    // public $Host     = 'box953.bluehost.com';
    // public $Mailer   = 'smtp';
    // public $SMTPAuth = true;                         
    // public $Username = 'info@globalinktax.com';                         
    // public $Password = 'global8008';                         
    // public $SMTPSecure = 'ssl';                         
    // public $Port = 465;
    public $WordWrap = 75;

    public function subject($subject) {
        $this->Subject = $subject;
    }

    public function body($body) {
        $this->Body = $body;
    }
                         
    public function send() {
        $this->AltBody = strip_tags(stripslashes($this->Body))."\n\n";
        $this->AltBody = str_replace("&nbsp;","\n\n",$this->AltBody);
        return parent::send();
    }


}