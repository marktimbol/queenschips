<?php

namespace App\Mailers;

class AdminMailer extends Mailer {


	public function inquiry($userData) {

		$adminEmail = env('MAIL_FROM_ADDRESS');
		$subject = 'Contact Form: ' . $userData['subject'];
		$view = 'emails.admin.inquiry';
		$data = $userData;

		
		$this->sendTo($adminEmail, $subject, $view, $data);

	}
}
