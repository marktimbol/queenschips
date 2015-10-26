<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Mailers\AdminMailer;
use App\Mailers\UserMailer;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SubmitContactForm extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;


    public $name;

    public $email;

    public $subject;

    public $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $email, $subject, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;

        $this->handle(new UserMailer, new AdminMailer);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(UserMailer $userMailer, AdminMailer $adminMailer)
    {
        $user = [
            'name'  => $this->name,
            'email' => $this->email,
            'subject'   => $this->subject,
            'message_content'  => $this->message
        ];

        $userMailer->autoReply($this->email, $this->subject);

        $adminMailer->inquiry($user);
    }
}
