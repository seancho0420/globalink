<?php namespace models;

class cwp extends \core\model {
	function __construct(){
		parent::__construct();
	}

	public function pardon_waiver_submit($params=array()) {
		$mail = new \helpers\phpmailer\mail();

		$mail->setFrom($params['email']);
		$mail->addAddress(EMAIL_ADDR);
		$mail->subject('[Canada Wide Pardons] A New Application Has Been Submitted.');

		if($params['look_for'] === 'both') {
			$look_for = 'pardon and waiver';
		} else {
			$look_for = $params['look_for'];
		}

		$message = '<table style="border:none"><tr><td style="width:160px"><b>Name</b></td><td>' . $params['fullname'] . '</td></tr>' . 
			'<tr><td><b>Email</b></td><td>' . $params['email'] . '</td></tr>' .
			'<tr><td><b>Phone</b></td><td>' . $params['phone'] . '</td></tr>' .
			'<tr><td><b>I\'m looking for</b></td><td>' . $look_for . '</td></tr>' . 
			'<tr><td><b>Last conviction</b></td><td>' . $params['last_conviction'] . '</td></tr>' . 
			'</table>';

		$mail->body($message);
		$email_sent = $mail->send();

		$db_params=array(
			"fullname"=>$params['fullname'],
			"email"=>$params['email'],
			"phone"=>$params['phone'],
			"look_for"=>$params['look_for'],
			"last_conviction"=>$params['last_conviction'],
			"email_sent"=>$email_sent,
		);

		$this->_db->insert('pardon_waiver', $db_params);
		return $this->_db->lastInsertId('id');
	}

	public function contact_submit($params=array()) {
		$mail = new \helpers\phpmailer\mail();

		$mail->setFrom(EMAIL_ADDR, SITETITLE);
		$mail->addAddress(EMAIL_ADDR);
		$mail->subject('[' . SITETITLE . '] A New Contact Form Has Been Submitted.');

		$message = '<table style="border:none"><tr><td style="width:200px"><b>Name</b></td><td>' . $params['name'] . '</td></tr>' . 
			'<tr><td><b>Email</b></td><td>' . $params['email'] . '</td></tr>' .
			'<tr><td><b>Phone</b></td><td>' . $params['phone'] . '</td></tr>' .
			'<tr><td><b>Best time to call</b></td><td>' . $params['best_time_to_call'] . '</td></tr>' . 
			'<tr><td><b>Year of last conviction</b></td><td>' . $params['last_conviction'] . '</td></tr>' . 
			'<tr><td><b>Fines/Probation Status</b></td><td>' . $params['fines_status'] . '</td></tr>' . 
			'<tr><td><b>Criminal Record</b></td><td>' . $params['criminal_record'] . '</td></tr>' . 			
			'</table>';

		$mail->body($message);
		$email_sent = $mail->send();

		$db_params=array(
			"name"=>$params['name'],
			"email"=>$params['email'],
			"phone"=>$params['phone'],
			"best_time_to_call"=>$params['best_time_to_call'],
			"last_conviction"=>$params['last_conviction'],
			"fines_status"=>$params['fines_status'],
			"criminal_record"=>$params['criminal_record'],
			"email_sent"=>$email_sent,
		);

		$this->_db->insert('contact', $db_params);
		return $this->_db->lastInsertId('id');
	}
}
