<?php namespace models;

class glt extends \core\model {
	function __construct(){
		parent::__construct();
	}

	public function contact_submit($params=array()) {
		$mail = new \helpers\phpmailer\mail();

		$mail->setFrom(EMAIL_ADDR, SITETITLE);
		$mail->addAddress(EMAIL_ADDR);
		$mail->subject('[' . SITETITLE . '] A New Contact Form Has Been Submitted.');

		$message = '<table style="border:none"><tr><td style="width:80px"><b>Name</b></td><td>' . $params['name'] . '</td></tr>' . 
			'<tr><td><b>Email</b></td><td>' . $params['email'] . '</td></tr>' .
			'<tr><td><b>Phone</b></td><td>' . $params['phone'] . '</td></tr>' .
			'<tr><td><b>Message</b></td><td>' . $params['message'] . '</td></tr></table>';

		$mail->body($message);
		$email_sent = $mail->send();

		$db_params=array(
			"name"=>$params['name'],
			"email"=>$params['email'],
			"phone"=>$params['phone'],
			"best_time_to_call"=>$params['best_time_to_call'],
			"message"=>$params['message'],
			"email_sent"=>$email_sent,
		);

		$this->_db->insert('contact', $db_params);	

		return $this->_db->lastInsertId('id');
	}

	public function tax_service_submit($params=array()) {
		$mail = new \helpers\phpmailer\mail();

		$mail->setFrom(EMAIL_ADDR, SITETITLE);
		$mail->addAddress(EMAIL_ADDR);
		$mail->subject('[' . SITETITLE . '] A New Tax Service Form Has Been Submitted.');

		$message = '<table style="border:none"><tr><td style="width:240px;padding:5px 8px;"><b>Name</b></td><td>' . $params['name'] . '</td></tr>' . 
			'<tr><td style="width:240px;padding:5px 8px;"><b>Email</b></td><td>' . $params['email'] . '</td></tr>' .
			'<tr><td style="width:240px;padding:5px 8px;"><b>Phone</b></td><td>' . $params['phone'] . '</td></tr>' .
			'<tr><td style="width:240px;padding:5px 8px;"><b>1. # of T4s and other T slips:</b></td><td>' . $params['num_of_t_slip'] . '</td></tr>' . 
			'<tr><td style="width:240px;padding:5px 8px;"><b>2. Any self-employment income?</b></td><td>' . $params['self_employment_income'] . '</td></tr>' . 
			'<tr><td style="width:240px;padding:5px 8px;"><b>2-1. If Yes, amount of revenues:</b></td><td>' . $params['amount_of_revenues'] . '</td></tr>' . 
			'<tr><td style="width:240px;padding:5px 8px;"><b>3. Do you own your own home?</b></td><td>' . $params['own_home'] . '</td></tr>' . 
			'<tr><td style="width:240px;padding:5px 8px;"><b>4. Were you a student in the tax year?</b></td><td>' . $params['were_you_student'] . '</td></tr>' . 
			'<tr><td style="width:240px;padding:5px 8px;"><b>5. Did you make any RRSP contributions?</b></td><td>' . $params['rrsp_contribution'] . '</td></tr>' . 
			'<tr><td style="width:240px;padding:5px 8px;"><b>6. Did you SELL any stocks and/or bonds?</b></td><td>' . $params['sell_stock'] . '</td></tr>' . 
			'<tr><td style="width:240px;padding:5px 8px;"><b>7. Did you receive any rental income from real estate?</b></td><td>' . $params['rental_income_from_real_estate'] . '</td></tr>' . 
			'<tr><td style="width:240px;padding:5px 8px;"><b>7-1. If Yes, how many properties and what provinces are they in?</b></td><td>' . $params['property'] . '</td></tr>' . 
			'<tr><td style="width:240px;padding:5px 8px;"><b>8. Did you have $100,000 or more in foreign assets?</b></td><td>' . $params['foreign_asset'] . '</td></tr>' . 
			'<tr><td style="width:240px;padding:5px 8px;"><b>9. If you are not a Canadian Citizen or Permanent Resident, what is your immigration status and/or type of Visa:</b></td><td>' . $params['immigration_status'] . '</td></tr>' . 
			'<tr><td style="width:240px;padding:5px 8px;"><b>10. Please list any other income and tax credits not mentioned above:</b></td><td>' . $params['other_income_tax_credit'] . '</td></tr>' . 
			'</table>';

		$mail->body($message);
		$email_sent = $mail->send();

		$db_params=array(
			"name"=>$params['name'],
			"email"=>$params['email'],
			"phone"=>$params['phone'],
			"num_of_t_slip"=>$params['num_of_t_slip'],
			"self_employment_income"=>$params['self_employment_income'],
			"amount_of_revenues"=>$params['amount_of_revenues'],
			"own_home"=>$params['own_home'],
			"were_you_student"=>$params['were_you_student'],
			"rrsp_contribution"=>$params['rrsp_contribution'],
			"sell_stock"=>$params['sell_stock'],
			"rental_income_from_real_estate"=>$params['rental_income_from_real_estate'],
			"property"=>$params['property'],
			"foreign_asset"=>$params['foreign_asset'],
			"immigration_status"=>$params['immigration_status'],
			"other_income_tax_credit"=>$params['other_income_tax_credit'],
			"email_sent"=>$email_sent,
		);

		$this->_db->insert('tax_service', $db_params);

		return $this->_db->lastInsertId('id');
	}

	public function noncanadians_submit($params=array()) {
		$mail = new \helpers\phpmailer\mail();

		$mail->setFrom(EMAIL_ADDR, SITETITLE);
		$mail->addAddress(EMAIL_ADDR);
		$mail->subject('[' . SITETITLE . '] A New Non-Canadians Form Has Been Submitted.');

		$message = '<table style="border:none">' . 
			'<tr><td style="width:200px;height:24px;"><b>Firstname</b></td><td>' . $params['firstname'] . '</td></tr>' . 
			'<tr><td style="width:200px;height:24px;"><b>Lastname</b></td><td>' . $params['lastname'] . '</td></tr>' . 
			'<tr><td style="width:200px;height:24px;"><b>Email</b></td><td>' . $params['email'] . '</td></tr>' .
			'<tr><td style="width:200px;height:24px;"><b>Phone</b></td><td>' . $params['phone'] . '</td></tr>' .
			'<tr><td style="width:200px;height:24px;"><b>SIN or ITN</b></td><td>' . $params['sin'] . '</td></tr>' .
			'<tr><td style="width:200px;height:24px;"><b>Birthdate</b></td><td>' . $params['birthdate'] . '</td></tr>' .
			'<tr><td style="width:200px;height:24px;"><b>When did you arrive in Canada</b></td><td>' . $params['arrived_at'] . '</td></tr>' . 
			'<tr><td style="width:200px;height:24px;"><b>Were you working in Canada</b></td><td>' . $params['worked'] . '</td></tr>' . 
			'<tr><td style="width:200px;height:24px;"><b>How much money did you earn in Canada</b></td><td>' . $params['earned'] . '</td></tr>' . 
			'<tr><td style="width:200px;height:24px;"><b>How much rent did you paid during the year</b></td><td>' . $params['rent'] . '</td></tr></table>';

		$mail->body($message);
		$email_sent = $mail->send();

		$db_params=array(
			"firstname"=>$params['firstname'],
			"lastname"=>$params['lastname'],
			"email"=>$params['email'],
			"phone"=>$params['phone'],
			"arrived_at"=>$params['arrived_at'],
			"worked"=>$params['worked'],
			"earned"=>$params['earned'],
			"rent"=>$params['rent'],
			"email_sent"=>$email_sent,
		);

		$this->_db->insert('noncanadians', $db_params);
		return $this->_db->lastInsertId('id');
	}
}
