<?php

namespace App\Mailers;

class UserMailer extends Mailer {


	public function autoReply($email, $subject) {

		$subject = 'RE: ' . $subject;
		$view = 'emails.auto-reply';
		$data = [];

		$this->sendTo($email, $subject, $view, $data);

	}

}