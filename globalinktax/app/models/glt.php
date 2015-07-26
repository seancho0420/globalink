<?php namespace models;

class glt extends \core\model {
	function __construct(){
		parent::__construct();
	}

	public function get_countries() {
		return $this->_db->select("SELECT * FROM countries");
	}

	public function get_visainfo($citizen, $travel) {
		return $this->_db->select("SELECT * FROM travelvisa WHERE citizen=:citizen AND travel=:travel", array(':citizen'=>$citizen, ':travel'=>$travel));
	}

	public function apply_visa($params=array()) {
		$htmlbody = "<html><head><style>table td:first-child { min-width: 240px;background-color: #DCDCDC;font-weight: bold; } table td { padding: 5px 10px; }" . 
			"</style></head><body><table>" . 
			"<tr>Travel to</td><td>" . $params['traveling_to'] . "</td></tr>" . 
			"<tr><td>First name</td><td>" . $params['first_name'] . "</td></tr>" . 
			"<tr><td>Last name</td><td>" . $params['last_name'] . "</td></tr>" . 
			"<tr><td>Middle name</td><td>" . $params['middle_name'] . "</td></tr>" . 
			"<tr><td>Maiden of former name</td><td>" . $params['maiden_name'] . "</td></tr>" . 
			"<tr><td>Email</td><td>" . $params['email'] . "</td></tr>" . 
			"<tr><td>Sex</td><td>" . $params['sex'] . "</td></tr>" . 
			"<tr><td>Citizenship</td><td>" . $params['citizenship'] . "</td></tr>" . 
			"<tr><td>Residency</td><td>" . $params['residency'] . "</td></tr>" . 
			"<tr><td>Date of birth</td><td>" . $params['date_of_birth'] . "</td></tr>" . 
			"<tr><td>City of birth</td><td>" . $params['city_of_birth'] . "</td></tr>" . 
			"<tr><td>State/Province of birth</td><td>" . $params['state_of_birth'] . "</td></tr>" . 
			"<tr><td>Country of birth</td><td>" . $params['country_of_birth'] . "</td></tr>" . 
			"<tr><td>Address 1</td><td>" . $params['address1'] . "</td></tr>" . 
			"<tr><td>Address 2</td><td>" . $params['address2'] . "</td></tr>" . 
			"<tr><td>City</td><td>" . $params['city'] . "</td></tr>" . 
			"<tr><td>State/Province</td><td>" . $params['state'] . "</td></tr>" . 
			"<tr><td>Zip/Postal code</td><td>" . $params['zip_code'] . "</td></tr>" . 
			"<tr><td>Home Phone</td><td>" . $params['home_phone'] . "</td></tr>" . 
			"<tr><td>Mobile Phone</td><td>" . $params['mobile'] . "</td></tr>" . 
			"<tr><td>Employment status</td><td>" . $params['employment_status'] . "</td></tr>" . 
			"<tr><td>Position</td><td>" . $params['position'] . "</td></tr>" . 
			"<tr><td>Name of school/employer</td><td>" . $params['org_name'] . "</td></tr>" . 
			"<tr><td>School/Company address 1</td><td>" . $params['org_address1'] . "</td></tr>" . 
			"<tr><td>School/Company address 2</td><td>" . $params['org_address2'] . "</td></tr>" . 
			"<tr><td>School/Company City</td><td>" . $params['org_city'] . "</td></tr>" . 
			"<tr><td>School/Company State/Province</td><td>" . $params['org_state'] . "</td></tr>" . 
			"<tr><td>School/Company Zip/Postal code</td><td>" . $params['org_zip_code'] . "</td></tr>" . 
			"<tr><td>School/Company Phone</td><td>" . $params['org_phone'] . "</td></tr>" . 
			"<tr><td>Passport Number</td><td>" . $params['passport_number'] . "</td></tr>" . 
			"<tr><td>Issued at/Issuing authority</td><td>" . $params['issue_authority'] . "</td></tr>" . 
			"<tr><td>Date of issue</td><td>" . $params['date_of_issue'] . "</td></tr>" . 
			"<tr><td>Expiration date</td><td>" . $params['expiration_date'] . "</td></tr>" . 
			"</table></body></html>";

		$to = EMAIL_ADDR; //Recipient Email Address

		$subject = "Visa Application - " . $params['first_name'] . " " . $params['last_name']; //Email Subject

		$headers = "From: " . $params['email'] . "\r\nReply-To: " . $params['email'];

		$random_hash = md5(date('r', time()));

		$mime_boundary = "==Multipart_Boundary_x{$random_hash}x";

		// headers for attachment 
		$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

		$files = $params['attached'];

		// multipart boundary 
		$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n"
		           . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . 
		             "Content-Transfer-Encoding: 7bit\n\n" . $htmlbody . "\n\n";
		$message .= "--{$mime_boundary}\n";

		foreach ($files as $key => $value) {
			if($value['size'] > 0) {
				$attachment = chunk_split(base64_encode(file_get_contents($value['tmp_name']))); // Set your file path here

				$name = $value['name'];

				$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"{$name}\"\n" . 
					"Content-Disposition: attachment;\n" . " filename=\"{$name}\"\n" . 
			    	"Content-Transfer-Encoding: base64\n\n" . $attachment . "\n\n";
			    $message .= "--{$mime_boundary}\n";
			}

			//include attachment
			// $message .= "--PHP-mixed-$random_hash\r\n"."Content-Type: application/zip; name=\"" . substr($value, strripos($value, '/')+1) . "\"\r\n"."Content-Transfer-Encoding: base64\r\n"."Content-Disposition: attachment\r\n\r\n";
			// $message .= $attachment;
			// $message .= "/r/n--PHP-mixed-$random_hash--";
		}

		//send the email
		return $mail = mail($to, $subject , $message, $headers);

	}

	public function contact_submit($params=array()) {
		$mail = new \helpers\phpmailer\mail();

		$mail->setFrom($params['email']);
		$mail->addAddress(EMAIL_ADDR);
		$mail->subject($params['subject']);

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
			"subject"=>$params['subject'],
			"message"=>$params['message'],
			"email_sent"=>$email_sent,
		);

		$this->_db->insert('contact', $db_params);
		return $this->_db->lastInsertId('id');
	}
}
